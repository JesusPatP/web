<?php
    class db{
        private $host="172.16.16.50:9906";
        private $dbname="tech_department";
        private $user="root";
        private $password="#n76v%AYX2tl";
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
            define('servidor', '172.16.16.50:9906');
            define('nombre_bd', 'usuarios_db');
            define('usuario', 'root');
            define('password', '#n76v%AYX2tl');					        
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