<?php
    class homeController{
        private $MODEL;
        public function __construct()
        {
            require_once("c://xampp/htdocs/tech_department/model/homeModel.php");
            $this->MODEL = new homeModel();
        }
        public function saveUser($username,$email,$password){
            $valor = $this->MODEL->addUserWithVerification($this->cleanUsername($username),$this->cleanEmail($email),$this->EncryptPassword($this->cleanString($password)));
            return $valor;
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

        public function cleanUsername($parameter){
            $parameter = strip_tags($parameter);
            $parameter = filter_var($parameter, FILTER_UNSAFE_RAW);
            $parameter = htmlspecialchars($parameter);
            return $parameter;
        }

        public function EncryptPassword($password){
            return password_hash($password,PASSWORD_DEFAULT);
        }
        
        public function validateUser($emailoruser,$password){
            $keydb = $this->MODEL->getPassword($emailoruser);
            return (password_verify($password,$keydb)) ? true : false;
        }
    }
?>