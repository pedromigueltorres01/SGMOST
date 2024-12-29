<?php

class Conexion{
    
public $user = 'postgres';
public $passwd = 'te319319';
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


        $db = pg_connect("host=localhost port=5432 dbname=sgmost user=postgres password=te319319")
    or die('NO HAY CONEXION: ' . pg_last_error());


 
        return $db;
       // pg_close($db);
    }
}
?>
