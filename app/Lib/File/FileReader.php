<?php

/**
 * FileReader
 * 
 * @category   Libs
 * @package    Mass-Symfonia
 * @author     Rafał Żygadło <rafal@maxkod.pl>

 * @copyright  2018 maxkod.pl
 * @version    1.0
 */


namespace App\Lib\File;

class FileReader 
{
   
   public $Records = array();
       
   function __construct($file, $column_count, $separator = ";")
   {
      $this->Records = array();
      $this->File = $file;
      $this->FileDataSeparator = $separator;
      $this->ColumnCount = $column_count;

   }
    
    private function Read()
    {
         $file = fopen($this->File,"r");

         if($file)
         {
            while(!feof($file))
            {
               $line = fgets($file);
               
               if(!empty($line))
               {
                  $parts = explode($this->FileDataSeparator, $line);
                  $columns = 0;
               
                  //policz kolumny
                  $columns = count($parts);
                           
                  if($columns == $this->ColumnCount)
                  {
                     array_push($this->Records,$parts);
                  }
                  else
                  {
                     printf("number of columns %d %d",$columns,$this->ColumnCount);
		    		      return false;
                  }
               }
            }
         
            fclose($file);
	    	return true;
         }
    }
    
    public function Run()
    {
         return $this->Read();
         //$this->Header();
         //$this->Items();
    }
    
    
}

