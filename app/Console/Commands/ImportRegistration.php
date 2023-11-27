<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Lib\File\FileReader;
use App\Models\Registration;
use App\Models\Import;
use App\Models\Mapping\ImportRegistrationMapping;

class ImportRegistration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:registration';

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

	    if(!file_exists('_data/registrations.csv'))
		    return;

	    $reader = new FileReader('_data/registrations.csv', 8,"\t");
        $mapping = new ImportRegistrationMapping();

	    \Log::debug("Import Registration Start");

        if(!$reader->Run())
        {
            \Log::error("Import Registration Error");
            return;
        }

        $progressbar = $this->output->createProgressBar(count($reader->Records));
        $progressbar->start();
        
        foreach($reader->Records as $record)
        {
            $record = $mapping->get($record);
    
            //try
            //{
                $user = Registration::updateOrCreate(["id" => $record['id']], $record);
                $progressbar->advance();
 
            //} catch (\Exception $e){

              //  \Log::error($e->getMessage());
            //}
        }
            
        $progressbar->finish();

	    Import::create(['name' => 'registrations']);
	    //unlink("_data/registrations.csv");
	    \Log::debug("Import Registrations End");
        
    }
}
