<?php
require_once(dirname(__DIR__,2)."/controller/homeController.php");
$obj = new homeController();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$error = "";

if (empty($email) || empty($password) || empty($confirmPassword)) {
    $error .= "<li>Null fields</li>";
    header("Location:signup.php?error=" . $error . "&&email=" . $email . "&&password=" . $password . "&&confirmPassword=" . $confirmPassword);
} else if ($email && $password && $confirmPassword) {
    if ($password == $confirmPassword) {
        if ($obj->saveUser($email, $password) == false) {
            $error .= "<li>This email already exist</li>";
            header("Location:signup.php?error=" . $error . "&&email=" . $email . "&&password=" . $password . "&&confirmPassword=" . $confirmPassword);
        } else {
            header("Location:signin.php");
        }
    } else {
        $error .= "<li>Las contraseñas son diferentes</li>";
        header("Location:signup.php?error=" . $error . "&&email=" . $email . "&&password=" . $password . "&&confirmPassword=" . $confirmPassword);
    }
}
