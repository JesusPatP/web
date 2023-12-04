<?php
    class homeModel{
        private $PDO;
        private $PDO_t;
        public function __construct()
        {
            require_once(dirname(__DIR__)."/config/db.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }
        public function addUserWithVerification($email,$password){
            $statement = $this->PDO->prepare("INSERT INTO tech_department values(null,:email,:password)");
            $statement->bindParam(":email",$email);
            $statement->bindParam(":password",$password);
            try {
                $statement->execute();
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }
        public function getPassword($email){
            $statement = $this->PDO->prepare("SELECT password FROM tech_department WHERE email = :email");
            $statement->bindParam(":email",$email);
            return ($statement->execute()) ? $statement->fetch()['password'] : false;
        }
        
    }

?>