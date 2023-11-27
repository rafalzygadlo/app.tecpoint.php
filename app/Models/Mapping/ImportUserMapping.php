<?php

namespace App\Models\Mapping;

use App\Models\User;

define("hr", 1);
define("status", 2);
define("first_name", 3);
define("last_name", 5);
define("birth_date", 6);
define("first_work_day", 7);

class ImportUserMapping
{
    
    public function get($record)
    {
	    $birth_date = null;
        $first_work_day = $record[first_work_day];
        $record[first_name] = trim(preg_replace('/\s\s+/', '', $record[first_name]));
        $record[last_name] = trim(preg_replace('/\s\s+/', '', $record[last_name]));
        
        if($record[status] == "Aktiv")
            $record[status] = 1;
        else
            $record[status] = 0;
        
        if(!$record[birth_date] == null)
        {
            $birth_date = date("Y-m-d", strtotime($record[birth_date]));
        }
                
        if(empty($first_work_day))
        {
            $first_work_day = null;
        }
        else
        {
            $first_work_day = date("Y-m-d", strtotime($first_work_day));
        }
        
        $new_record = array
        (
            "avatar" => "avatar/".$record[0].".png",
            "id" => $record[0],
            "hr" => $record[hr],
            "first_name" => $record[first_name],
            "last_name" => $record[last_name],
            "birth_date" => $birth_date,
            "status" => $record[status],
	        "first_work_day" => $first_work_day,
            "data2" => $record[8]	
        );
    
        return $new_record;
    }



}
