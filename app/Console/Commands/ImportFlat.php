<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Lib\File\FileReader;
use App\Models\Flat;
use App\Models\Import;
use App\Models\Mapping\ImportFlatMapping;

class ImportFlat extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:flat';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    //private function 

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
	if(!file_exists('_data/flats.csv'))
		return;

	    $reader = new FileReader('_data/flats.csv', 7,"\t");
        $mapping = new ImportFlatMapping();

	    \Log::debug("Import Flat Start");

        if(!$reader->Run())
        {
            \Log::error("Import Flat Error");
            return;
        }

        $progressbar = $this->output->createProgressBar(count($reader->Records));
        $progressbar->start();
        
        foreach($reader->Records as $record)
        {
            $record = $mapping->get($record);
            print_r($record);
            try
            {
                $flat = Flat::updateOrCreate(["flat_id" => $record['flat_id']], $record);
                $progressbar->advance();
 
            } catch (\Exception $e){

                \Log::error($e->getMessage());
            }
        }
            
        $progressbar->finish();

	Import::create(['name' => 'flats']);
	unlink("_data/flats.csv");
	\Log::debug("Import Flat End");
        
    }
}
