<?php

namespace App\Models\Mapping;

define("flat_id", 0);
define("active", 1);
define("object_id", 2);
define("number", 3);
define("street", 6);
define("code", 5);
define("city", 4);

class ImportFlatMapping
{
    
    public function get($record)
    {
	    
        return array
        (
            "flat_id" => $record[flat_id],
            "active" => $record[active],
            "object_id" => $record[object_id],
            "street" => $record[street],
            "number" => $record[number],
            "code" => $record[code],
            "city" => $record[city]
        );
    
        
    }



}
