<?php
    class db{
        private $host="localhost";
        private $dbname="department";
        private $user="root";
        private $password="";
        public function conexion(){
            try {
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                return $PDO;
                //For conexcion error
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }
    //To check the conecction
    /*
    $obj = new db();
    print_r($obj->conexion());
    */

    class Conexion{	  
        public static function Conectar() {        
            define('servidor', 'localhost');
            define('nombre_bd', 'department');
            define('usuario', 'root');
            define('password', '');					        
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
            try{
                $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
                return $conexion;
            }catch (Exception $e){
                die("El error de Conexión es: ". $e->getMessage());
            }
        }
    }
?>