<?php
    class homeModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/tech_department/config/db.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }
        public function addUserWithVerification($username,$email,$password){
            $statement = $this->PDO->prepare("INSERT INTO tech_department values(null,:username,:email,:password)");
            $statement->bindParam(":username",$username);
            $statement->bindParam(":email",$email);
            $statement->bindParam(":password",$password);
            try {
                $statement->execute();
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }
        public function getPassword($emailoruser){
            $statement = $this->PDO->prepare("SELECT password FROM tech_department WHERE email = :emailoruser OR username = :emailoruser");
            $statement->bindParam(":emailoruser",$emailoruser);
            return ($statement->execute()) ? $statement->fetch()['password'] : false;
        }
    }

?>