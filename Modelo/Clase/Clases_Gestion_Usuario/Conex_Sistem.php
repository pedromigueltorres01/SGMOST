<?php

class Conexion{
    public function conectarse(){


        $db = pg_connect("host='localhost' port='5432' dbname='sgmost' user='postgres' password='te319319'")
    or die('NO HAY CONEXION: ' . pg_last_error());


 
        return $db;
       pg_close($db);
    }
}
?>
