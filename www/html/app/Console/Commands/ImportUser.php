<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Lib\File\FileReader;
use App\Models\User;
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
        $reader = new FileReader('_data/user.csv', 20,"\t");
        $mapping = new ImportUserMapping();

        if($reader->Run())
        {
            foreach($reader->Records as $record)
            {
                $record = $mapping->get($record);
		        print_r($record);
                try
                {
                    $user = User::updateOrCreate(["id" => $record['id']], $record);
                
                } catch (\Exception $e){
			        print $e->getMessage();
                    \Log::error($e->getMessage());
                }
            }

        }
        
    }
}
