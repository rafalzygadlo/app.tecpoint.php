<?php


namespace Lib;

use Config\DatabaseConfig;
use PDO;

class Option
{
    private static $DB;
    private static $Strings;
    private static $Default;
    
    public function __construct()
    {
        
    }
 
    public static function Init($force = false)
    {
        self::$DB = Database::getInstance(DatabaseConfig::Type, DatabaseConfig::Host, DatabaseConfig::Name, DatabaseConfig::User, DatabaseConfig::Password);
        self::$Strings = self::AllValues();
        self::$Default = self::AllDefaultValues();   
    }
    
    public static function Get($const, $default)
    {
       
        if (array_key_exists($const, self::$Strings))
        {
            $value = self::$Strings[$const];
            if ($default == self::$Default[$const])
            {
                return $value;
            }
            else
            { 
                self::Update($const,$default);
                self::Init(true);
                return self::$Default[$const];
            }
        }
        else
        {
            self::Insert($const, $default);
            self::Init(true);
            return $default;
        }
    }

    private static function Insert($const, $value)
    {
        $params = array
        (
            ':id_business'  => Session::GetBusinessId(),
            ':id_lang' => Session::GetLang(),
            ':const' => $const,
            ':user_value' => $value,
            ':default_value' => $value

        );
        
        self::$DB->NonQuery('INSERT INTO `option` SET id_business=:id_business,id_lang=:id_lang,const=:const,user_value=:user_value,default_value=:default_value', $params);
    }
   
    private static function Update($const, $value)
    {
        $params = array
        (
            ':id_business'  => Session::GetBusinessId(),
            ':const' => $const,            
            ':default_value' => $value
        );

        self::$DB->NonQuery('UPDATE `option` SET default_value=:default_value WHERE const=:const AND id_business=:id_business', $params);
    }     

    private static function AllValues()
    {
        $params = array
        (
            ':id_lang'      => Session::GetLang(),
            ':id_business'  => Session::GetBusinessId(),
        );
        
        return self::$DB->Query('SELECT const,user_value FROM `option` WHERE id_lang=:id_lang AND id_business=:id_business', $params, PDO::FETCH_KEY_PAIR);
    }

    private static function AllDefaultValues()
    {
        $params = array
        (
            ':id_lang'      => Session::GetLang(),
            ':id_business'  => Session::GetBusinessId(),
        );
        
        return self::$DB->Query('SELECT const,default_value FROM `option` WHERE id_lang=:id_lang AND id_business=:id_business', $params, PDO::FETCH_KEY_PAIR);
    }
    
}


