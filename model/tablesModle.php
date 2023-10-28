<?php
    class tablesModel{
        private $PDO;
        public function __construct()
        {
            require_once(dirname(__DIR__)."/config/db.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }

        /*Tables*/
        public function getUsers(){
            $statement = $this->PDO->prepare("SELECT id, nombre, pais, edad FROM personas");
            $statement->execute(); 
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>