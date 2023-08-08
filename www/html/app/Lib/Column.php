<?php

// klasa Column definicja właściwości kolumn w listingu danych
namespace Lib;

abstract class Column
{

    public $Name;               // Nazwa columny (tytuł)
    public $FieldName;          // Nazwa pola
    public $Visible = true;

    public function __construct($name, $fieldname, $visible = true)
    {
        //parent::__construct(); // gdybyśmy chcieli printować tłumaczenia to trzeba włączyć żeby konstrował bazową
        $this->Name = $name;
        $this->FieldName = $fieldname;
        $this->Visible = $visible;
    }

}
