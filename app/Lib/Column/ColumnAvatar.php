<?php

// klasa Column definicja właściwości kolumn w listingu danych
namespace Lib\Column;

use Config\StyleConfig;
use Lib\Column;


class ColumnAvatar extends Column
{
    public function Render($view,$item)
    {
        $name = $this->FieldName;

        $avatar = StyleConfig::AvatarDir.'/'.$item->$name;

        print '<a href="" data-toggle="modal" data-target="#myModal" >';
        if(file_exists($avatar))
            print '<img onclick="loadImage(this)" src ='.$avatar.' class="img img-circle" width=50 height=50>';
        else
            print '<img onclick="loadImage(this)" src ='.StyleConfig::ImageDir.'/'.StyleConfig::DefaultImage.' class="img img-circle" width=50 height=50>' ;

        print '</a>';
    }

}
