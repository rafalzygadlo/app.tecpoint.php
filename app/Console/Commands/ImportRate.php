<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Lib\File\FileReader;
use App\Models\Employee;
use App\Models\Mapping\ImportEmployeeMapping;

class ImportRate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:rate';

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
        $reader = new FileReader('_data/rate.csv', 16,"\t");
        $mapping = new ImportRateMapping();

        if($reader->Run())
        {
            foreach($reader->Records as $record)
            {
                $record = $mapping->get($record);
                try
                {
                    Employee::updateOrCreate(["employees_id" => $record['employees_id']], $record);
                } catch (\Exception $e){
                    \Log::error($e->getMessage());
                }
            }

        }
    }
}
