<?php
    require_once("c://xampp/htdocs/tech_department/controller/homeController.php");
    $obj = new homeController();
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $error = "";

    if(empty($username) || empty($email) || empty($password) || empty($confirmPassword)){
        $error .= "<li>Null fields</li>";
        header("Location:signup.php?error=".$error."&&username=".$username."&&email=".$email."&&password=".$password."&&confirmPassword=".$confirmPassword);

    }else if($username && $email && $password && $confirmPassword){
        if($password == $confirmPassword){
            if($obj->saveUser($username,$email,$password) == false){
                $error .= "<li>This email already exist</li>";
                header("Location:signup.php?error=".$error."&&username=".$username."&&email=".$email."&&password=".$password."&&confirmPassword=".$confirmPassword);
            }else{
                header("Location:login.php");
            }
        }else{
            $error .= "<li>Las contraseñas son diferentes</li>";
            header("Location:signup.php?error=".$error."&&username=".$username."&&email=".$email."&&password=".$password."&&confirmPassword=".$confirmPassword);
        }
    }
?>