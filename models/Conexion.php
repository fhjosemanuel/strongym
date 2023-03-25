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
    
}
?>