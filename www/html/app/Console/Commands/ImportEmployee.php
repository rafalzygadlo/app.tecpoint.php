<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Lib\File\FileReader;
use App\Models\Employee;
use App\Models\Mapping\ImportEmployeeMapping;

class ImportEmployee extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:employee';

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
        $reader = new FileReader('_data/employee.csv', 16,"\t");
        $mapping = new ImportEmployeeMapping();

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
