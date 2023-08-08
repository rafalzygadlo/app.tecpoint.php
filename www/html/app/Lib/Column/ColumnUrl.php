<?php

// klasa Column definicja właściwości kolumn w listingu danych
namespace Lib\Column;

use Config\UrlConfig;
use Lib\Column;

class ColumnUrl extends Column
{
    public function Render($view,$item)
    {
        $name = $this->FieldName;
        print '<a target="_blank" href="'.UrlConfig::SiteUrl.'/'.$item->$name.'" >'.$item->$name.'</a>';
    }
}
