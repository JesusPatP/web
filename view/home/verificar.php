<?php
require_once(dirname(__DIR__,2)."/controller/homeController.php");
session_start();
$obj = new homeController();
$email = $obj->cleanEmail($_POST['email']);
$password = $obj->cleanString($_POST['password']);
$bandera = $obj->validateUser($email, $password);

//Validate user
if ($bandera) {
    $_SESSION['user'] = $email;
    //To change the route
    header("Location:../views/employees_table.php");
} else {
    $error = "<li>Incorrecta data</li>";
    header("Location:signin.php?error=" . $error);
}
?>
