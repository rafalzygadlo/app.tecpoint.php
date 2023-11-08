<?php

// klasa Column definicja właściwości kolumn w listingu danych
namespace Lib\Column;

use Lib\Column;

class ColumnLink extends Column
{
    public function Render($view,$item)
    {
        $name = $this->FieldName;
        print '<a href="'.$view->CtrlName.'/'.METHOD_PARENT.'/'.$item->GetId().'" > ' . $item->$name . '</a>';
    }
}
