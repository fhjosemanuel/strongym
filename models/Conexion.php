<?php
abstract class Conexion{
	//Colocar datos correctos del servidor.
    private static $db_host = 'localhost';
    private static $db_user = 'root';
    private static $db_pass = '';
    private static $db_name = 'dbstrongym';
    
    private static $db_charset = 'utf8';
    private $conn;
    protected $query;
    protected $rows = array();
    private function db_open(){
        $this->conn = new mysqli(self::$db_host,self::$db_user,self::$db_pass,self::$db_name);
        $this->conn->set_charset(self::$db_charset);
    }
    private function db_close(){
        $this->conn->close();
    }
    
}
?>