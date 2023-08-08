<?php

// klasa Column definicja właściwości kolumn w listingu danych
namespace Lib\Column;

use Lib\Column;

class ColumnCheckBox extends Column
{


    public function Render($view,$item)
    {
        $fid = $item->GetId(); // id dla unikalności
        $fname = $this->FieldName;
        $id = $fname.'_'.$fid;
        
        if($item->$fname)
            print '<input id='.$fid.' class='.$fname.' name='.$fname.' type=checkbox checked>';
        else
            print '<input id='.$fid.' class='.$fname.' name='.$fname.' type=checkbox>';

    }

}

