<?php
class Database extends PDO
{
	public function __construct($DB_HOST, $DB_NAME, $DB_USER, $DB_PASS)
	{
         
		try 
        {
            parent::__construct('mysql:host='.$DB_HOST.';dbname='.$DB_NAME, $DB_USER, $DB_PASS);
         
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
        catch (PDOException $e) 
        {
            die($e->getMessage());
        }
	}
	
	public function read($query,  $option=array(),$array = array())
	{

        if(empty($option['result'])):
            $option['result'] = 'fetchAll';
        endif;

		$sth = parent::prepare($query);

        if($sth):

            foreach ($array as $key => $value):
                $sth->bindValue("$key", $value);
            endforeach;
            
            
            $sth->execute();



            if( !empty( $option['class'])):
                $sth->setFetchMode(PDO::FETCH_CLASS, $option['class']);
            endif;

            if(empty($option['result']) || $option['result']=='fetchAll'):
                $result = $sth->fetchAll();	
            else:
                $result = $sth->fetch();	
            endif;


            return $result;	
        else:
            return self::get_error();
        endif;
	}

    public function write($query, $array = array())
	{
		$sth = $this->prepare($query);

		foreach ($array as $key => $value):
			$sth->bindValue("$key", $value);
		endforeach;
		
		$sth->execute();
	}

    public function get_error() 
    {
        $this->connection->errorInfo();
    }


    public function __destruct()
    {
        $this->connection = null;
    }
}
	
	
