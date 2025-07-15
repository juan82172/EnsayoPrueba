<?php
class Database{
    public static function Conectar (){
        $servername = 'localhost';
        $username = 'root';
        $password = '7347';
        $name = 'ensayo';

    $db = new mysqli($servername, $username, $password, $name);
    if($db->connect_error){
        die("Conexion fallida");
    }

    return $db;
}
}