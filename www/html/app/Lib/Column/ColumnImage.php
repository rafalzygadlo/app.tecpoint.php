<?php

// klasa Column definicja właściwości kolumn w listingu danych
namespace Lib\Column;

use Config\StyleConfig;
use Lib\Column;
use Lib\Settings;

class ColumnImage extends Column
{
    private $Widght;
    private $Height;
    
    public function __construct($name, $fieldname, $width = 50 ,$height = 50,  $visible = true)
    {
        $this->Name = $name;
        $this->FieldName = $fieldname;
        $this->Visible = $visible;
        $this->Width = $width;
        $this->Height = $height;
    }
    
    public function Render($view,$item)
    {
        $name = $this->FieldName;
        $image = Settings::$ImagesFolder.$item->$name;

        if(empty($item->$name))
            $image = StyleConfig::DefaultImage;
        
        print '<a href="" data-toggle="modal" data-target="#myModal" >';
        
        if(file_exists($image))
        {
            print '<img onclick="loadImage(this)" src ='.$image.' class="img img-circle" width='.$this->Width.' height='.$this->Height.'>';
        
        }else{
            print '<img onclick="loadImage(this)" src ='.StyleConfig::ImageDir.'/'.StyleConfig::DefaultImage.' class="img img-circle" width='.$this->Width.' height='.$this->Height.'>' ;
        }
         print '</a>';   
    }

}
