<?php
    class tablesController{
        private $MODEL;
        public function __construct()
        {
            require_once(dirname(__DIR__)."/model/tablesModle.php");
            $this->MODEL = new tablesModel();
        }
        public function saveUsers(){
            $valor = $this->MODEL->getUsers();
            return $valor;
        }
    }
?>