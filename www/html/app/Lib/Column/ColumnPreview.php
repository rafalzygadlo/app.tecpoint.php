<?php

// klasa Column definicja właściwości kolumn w listingu danych
namespace Lib\Column;

use Lib\Column;

class ColumnPreview extends Column
{
    public function Render($view,$item)
    {
        $name = $this->FieldName;
        print '<a href="'.$view->CtrlName.'/'.METHOD_PREVIEW.'/'.$item->GetId().'" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>';
    }
}
