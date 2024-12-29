<?php

class Conexion{
    
    public $user = 'postgres';
public $passwd = 'trenfers';
public $db = 'sgmost';
public $port = '5432';
public $host = 'localhost';



     function _construct($host,$port,$db,$user,$passwd)
      {
         $this->host=$host;
         $this->port=$port;
         $this->db=$db;
         $this->user=$user;
         $this->passwd=$passwd;
      }

    public function conectarse(){


        $db = pg_connect("host=localhost port=5432 dbname=sgmost user=postgres password=trenfers")
    or die('NO HAY CONEXION: ' . pg_last_error());


 
        return $db;
    }
}
?>
