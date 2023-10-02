<?php
    require_once("c://xampp/htdocs/tech_department/controller/homeController.php");
    session_start();
    $obj = new homeController();
    $email = $obj->cleanEmail($_POST['email']);
    $password = $obj->cleanString($_POST['password']);
    $bandera = $obj->validateUser($email,$password);
    if($bandera){
        $_SESSION['user'] = $email;
        header("Location:panel_control.php");
    }else{
        $error = "<li>Las claves son incorrectas</li>";
        header("Location:login.php?error=".$error);
    }
?>