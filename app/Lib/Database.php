<?php




namespace Lib;

use Config\DatabaseConfig;
use Config\DatabaseConfig_1;
use PDO;


class Database extends PDO
{

    private $sth;
    private static $Instance;
	private static $Instance1;
    public $Result = true;
    public $Exception = true;    

    public function __construct($type, $host, $name, $user, $password)
    {

        try
        {
            parent::__construct($type . ':host=' . $host . ';dbname=' . $name, $user, $password);
            $this->sth = $this->prepare('SET NAMES utf8');
            $this->sth->execute();

        } catch (Exception $ex)
        {
			if($this->Exception)
				new myException('DATABASE CONNECTION ERROR','');
			else
				print $this->sth->errorInfo( )[2];
        }
        
    }

    public static function getInstance()
    {
        if (!self::$Instance)
        {
            self::$Instance = new Database(DatabaseConfig::Type, DatabaseConfig::Host, DatabaseConfig::Name, DatabaseConfig::User, DatabaseConfig::Password);
            //print '<br><br><div class="alert alert-info">Database instance</div>';
        }
        return self::$Instance;
    }

	public static function getInstance1()
    {
        if (!self::$Instance1)
        {
            self::$Instance1 = new Database(DatabaseConfig_1::Type, DatabaseConfig_1::Host, DatabaseConfig_1::Name, DatabaseConfig_1::User, DatabaseConfig_1::Password);
            //print '<br><br><div class="alert alert-info">Database instance</div>';
        }
		
        return self::$Instance1;
    }
	
    public function Row($sql,$params)
    {
        $this->sth = $this->prepare($sql);
        if ($this->sth)
        {
            if ($this->sth->execute($params))
            { 
                //if($class)
                  //  $this->sth->setFetchMode(PDO::FETCH_OBJ);
                //else
                    $this->sth->setFetchMode(PDO::FETCH_OBJ);
                    
                return $this->sth->fetch();
            }else
            {
			    if($this->Exception)
					$this->Exception('DATABASE ERROR',$sql.'<br>'. $this->sth->errorInfo()[2]);
				else
					print $this->sth->errorInfo( )[2];
            }
        }
        else
        {
            return false;
        }

    }

    public function Max($field,$table,$fetchMode = PDO::FETCH_CLASSTYPE)
    {
        $sql = "SELECT MAX($field) as Max FROM $table";

        $this->sth = $this->prepare($sql);
        if ($this->sth)
        {
            if ($this->sth->execute())
            {
                 return $this->sth->fetch($fetchMode);
            }else
            {
				if($this->Exception)
					$this->Exception('DATABASE ERROR',$sql.'<br>'. $this->sth->errorInfo()[2]);
				else
					print $this->sth->errorInfo( )[2];
    
            }
        }
        else
        {
            return false;
        }

    }
    
    public function Query($sql, $params, $fetchMode = PDO::FETCH_ASSOC, $class = null)
    {
        $this->sth = $this->prepare($sql);
        if ($this->sth)
        {
            if ($this->sth->execute($params))
            {
                if ($class == null)
                    return $this->sth->fetchAll($fetchMode);
                else
                    return $this->sth->fetchAll($fetchMode, $class);
            }else
            {
				if($this->Exception)
					$this->Exception('DATABASE ERROR',$sql.'<br>'. $this->sth->errorInfo()[2]);
				else
					print $this->sth->errorInfo( )[2];
            }
        }
        else
        {
            return false;
        }
    }

    public function NonQuery($sql, $params)
    {
 
        $this->sth = $this->prepare($sql);
        if ($this->sth)
        {
            if ($this->sth->execute($params))
            {
                return true;
            }
            else
            {
				if($this->Exception)
					$this->Exception('DATABASE ERROR',$sql.'<br>'. $this->sth->errorInfo()[2]);
				else
					print $this->sth->errorInfo( )[2];
            }
        }
        else
        {
            return false;
        }
    }

    private function Exception($title,$text)
    {
        $this->Result = false;
        new myException($title,$text);
    }
    
    public function RowCount()
    {
        return $this->sth->rowCount();
    }

    public function Count($sql, $params)
    {
        $this->sth = $this->prepare($sql);
        $this->sth->execute($params);
        return $this->sth->fetchColumn();
    }

    public function InsertRandom()
    {
        $counter = 100000;
        while ($counter--)
        {
            $this->query("insert into user set nick='.$counter.'");
        }
    }

}
