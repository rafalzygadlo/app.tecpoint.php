<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Lib\File\FileReader;
use App\Models\User;
use App\Models\Import;
use App\Models\Mapping\ImportUserMapping;

class ImportUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:user';

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
	if(!file_exists('_data/users.csv'))
		return;

	$reader = new FileReader('_data/users.csv', 20,"\t");
        $mapping = new ImportUserMapping();

	    \Log::debug("Import User Start");

        if(!$reader->Run())
        {
            \Log::error("Import User Error");
            return;
        }

        $progressbar = $this->output->createProgressBar(count($reader->Records));
        $progressbar->start();
        
        foreach($reader->Records as $record)
        {
            $record = $mapping->get($record);
            try
            {
                $user = User::updateOrCreate(["id" => $record['id']], $record);
                $progressbar->advance();
 
            } catch (\Exception $e){

                \Log::error($e->getMessage());
            }
        }
            
        $progressbar->finish();

	Import::create(['name' => 'users']);
	unlink("_data/users.csv");
	\Log::debug("Import User End");
        
    }
}
