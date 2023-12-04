<?php
    class EmployeesModel{
        private $PDO;
        public function __construct()
        {
            require_once(dirname(__DIR__)."/config/db.php");
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

        public function addEmployees($username,$email,$phone_number){
            $statement = $this->PDO->prepare("INSERT INTO users values(null,:name,:email,:phone_number)");
            $statement->bindParam(":name",$username);
            $statement->bindParam(":email",$email);
            $statement->bindParam(":phone_number",$phone_number);

            $statement = $this->PDO->prepare ("SELECT * FROM users ORDER BY id DESC LIMIT 1");
            
            try {
                $statement->execute();
                $data = $statement->fetchAll(PDO::FETCH_ASSOC);
                return print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
            } catch (PDOException $e) {
                return false;
            }
        }

        public function queryEmployees(){
            $statement = $this->PDO->prepare("SELECT * FROM users"); 
            try {
                $statement->execute();
                $statement->fetchAll(PDO::FETCH_ASSOC);
                return $statement;
            } catch (PDOException $e) {
                return false;
            }
        }
        
    }

?>