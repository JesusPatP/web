<?php

    require_once("c://xampp/htdocs/tech_department/controller/homeController.php");
    session_start();
    $obj = new homeController();
    $email = $obj->cleanEmail($_POST['email']);
    $password = $obj->cleanString($_POST['password']);
    $bandera = $obj->validateUser($email,$password);

    //Validate user
    if($bandera){

        $_SESSION['user'] = $email;
        //To change the route
        header("Location:/tech_department/view/dashboard/dashboard.php");
    }else{
        $error = "<li>Las claves son incorrectas</li>";
        header("Location:signin.php?error=".$error);
    }
?>