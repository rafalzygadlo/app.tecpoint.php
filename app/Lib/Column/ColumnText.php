<?php

// klasa Column definicja właściwości kolumn w listingu danych
namespace Lib\Column;

use Lib\Column;

class ColumnText extends Column
{

    public function Render($view,$item)
    {
        $name = $this->FieldName;
        print $item->$name ;
    }

}
