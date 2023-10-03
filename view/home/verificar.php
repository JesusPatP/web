<?php

    require_once("c://xampp/htdocs/web/controller/homeController.php");
    session_start();
    $obj = new homeController();
    $email = $obj->cleanEmail($_POST['email']);
    $password = $obj->cleanString($_POST['password']);
    $bandera = $obj->validateUser($email,$password);

    //Validate user
    if($bandera){

        $_SESSION['user'] = $email;
        //To change the route
        header("Location:/web/view/dashboard/dashboard.php");
    }else{
        $error = "<li>Las claves son incorrectas</li>";
        header("Location:signin.php?error=".$error);
    }
?>