<?php

// klasa Column definicja właściwości kolumn w listingu danych
namespace Lib\Column;

use Lib\Column;

class ColumnActive extends Column
{

    public $Statuses;

    public function __construct($name, $fieldname, $statuses, $visible = true)
    {
        $this->Name = $name;
        $this->FieldName = $fieldname;
        $this->Visible = $visible;
        $this->Statuses = $statuses;
    }

    public function Render($view,$item)
    {
        $name = $this->FieldName;

        foreach ($this->Statuses as $status)
        {
            if ($status->id_active == $item->$name)
            {
                if($status->active)
                    print '<input disabled class="bootstrap-switch-small1" name=my-check type=checkbox checked>';
                else
                    print '<input disabled name=my-check type=checkbox>';

                //print '<script>$("[name=\'my-check\']").bootstrapSwitch();</script>';
            }
        }
    }

}

