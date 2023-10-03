<?php
    class db{
        private $host="localhost";
        private $dbname="web";
        private $user="root";
        private $password="";
        public function conexion(){
            try {
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                return $PDO;
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
?>