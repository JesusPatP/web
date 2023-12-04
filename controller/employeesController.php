<?php

$username = (isset($_POST['username'])) ? $_POST['username'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$phone_number = (isset($_POST['phone_number'])) ? $_POST['phone_number'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$user_id = (isset($_POST['user_id'])) ? $_POST['user_id'] : '';

$obj = new employeesController();

    class employeesController{
        private $MODEL;
        
        public function __construct()
        {
            require_once(dirname(__DIR__)."/model/employeesModel.php");
            $this->MODEL = new EmployeesModel();
        }
        /*
        public function saveUser($username,$email,$phone_number){
            $valor = $this->MODEL->addUserWithVerification($this->cleanUsername($username),$this->cleanEmail($email),$this->EncryptPassword($this->cleanString($password)));
            return $valor;
        }
        */
        public function saveEmployee($username,$email,$phone_number){
            $parameter = $this->MODEL->addEmployees($this->cleanString($username),$this->cleanEmail($email),$this->cleanString($phone_number));
            return $parameter;
        }

        public function queryEmployees(){
            $parameter = $this->MODEL->queryEmployees();
            return $parameter;
        }

        public function cleanString($parameter){
            $parameter = strip_tags($parameter);
            $parameter = filter_var($parameter, FILTER_UNSAFE_RAW);
            $parameter = htmlspecialchars($parameter);
            return $parameter;
        }
        public function cleanEmail($parameter){
            $parameter = strip_tags($parameter);
            $parameter = filter_var($parameter, FILTER_SANITIZE_EMAIL);
            $parameter = htmlspecialchars($parameter);
            return $parameter;
        }

    }
    
?>



