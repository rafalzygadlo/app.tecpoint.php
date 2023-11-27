<?php

namespace App\Models\Mapping;

use App\Models\Registration;

define("id", 0);
define("flat_id", 1);
define("user_id", 2);
define("street", 3);
define("house_number", 4);
define("flat_number", 5);
define("code", 6);
define("city", 7);

class ImportRegistrationMapping
{
    
    public function get($record)
    {
        $model = \App\Models\Flat::where('flat_id', '=', $record[flat_id])->first();
        $record[flat_id] = null;  

        if($model)
        {           
            $record[flat_id] = $model->id;  
        }

        if(empty($record[user_id]))
            $record[user_id] = null;

        $new_record = array
        (
            "id" => $record[id],
            "flat_id" => $record[flat_id],
            "user_id" => $record[user_id],
            "street" => $record[street],
            "house_number" => $record[house_number],
            "flat_number" => $record[flat_number],
            "code" => $record[code],
            "city" => $record[city]
        );
    
        return $new_record;
    }



}
