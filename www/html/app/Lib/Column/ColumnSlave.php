<?php

// klasa Column definicja właściwości kolumn w listingu danych
namespace Lib\Column;

use Lib\Column;

class ColumnSlave extends Column
{
    public function __construct($name, $fieldname, $ctrlname, $visible = true)
    {
        $this->Name = $name;
        $this->FieldName = $fieldname;
        $this->Visible = $visible;
        $this->CtrlName = $ctrlname;
    }
    
    public function Render($view, $item)
    {
        $name = $this->FieldName;
        print '<a href="'.$this->CtrlName.'/'.METHOD_SLAVE.'/'.$item->GetId().'" > ' . $item->$name . '</a>';
    }
}
