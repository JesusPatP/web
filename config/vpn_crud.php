<?php
include_once '../config/db.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

//Vpn
$idVpn = (isset($_POST['idVpn'])) ? $_POST['idVpn'] : '';
$emailVpn = (isset($_POST['emailVpn'])) ? $_POST['emailVpn'] : '';
$passwordVpn = (isset($_POST['passwordVpn'])) ? $_POST['passwordVpn'] : '';
$keyVpn = (isset($_POST['keyVpn'])) ? $_POST['keyVpn'] : '';
$expiryDateVpn = (isset($_POST['expiryDateVpn'])) ? $_POST['expiryDateVpn'] : '';

//User
$idUser = (isset($_POST['idUser'])) ? $_POST['idUser'] : '';


switch ($opcion) {
    case 1:
        //Employee Query Select
        $query = "SELECT * FROM `vpn` WHERE `id` = '$idVpn'";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2:
        //Employee Query Update
        $query = "UPDATE `vpn` SET
        `expiry_date`='$expiryDateVpn',
        `key`='$keyVpn',`password`='$passwordVpn',
        `email`='$emailVpn' 
        WHERE `id` = '$idVpn'";
        $result = $conexion->prepare($query);
        $result->execute();

        $query = "SELECT * FROM `vpn` WHERE `id` = '$idVpn'";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
        //Employee Query Delete
    case 3:
        //Employee Query Select
        $query = "select users.id,users.name,users.email,users.phone_number
        FROM users
        JOIN user_vpn ON user_vpn.users_id = users.id
        JOIN vpn ON vpn.id = user_vpn.vpn_id
        where vpn.id = '$idVpn'";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 4:
        $query = "DELETE FROM `user_vpn` 
        WHERE `vpn_id` = '$idVpn' and `users_id` ='$idUser'";
        $result = $conexion->prepare($query);
        $result->execute();
        break;
    case 5:
        $query = "INSERT INTO `user_vpn`(`vpn_id`, `users_id`) 
        VALUES ('$idVpn','$idUser')";
        $result = $conexion->prepare($query);
        $result->execute();

        $query = "select users.id,users.name,users.email,users.phone_number
        FROM users
        JOIN user_vpn ON user_vpn.users_id = users.id
        JOIN vpn ON vpn.id = user_vpn.vpn_id
        where vpn.id = '$idVpn'";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 6:
        $query = "select users.id AS ID ,users.name,users.email,users.phone_number FROM users WHERE NOT EXISTS(SELECT 1 FROM user_vpn
        WHERE user_vpn.users_id = ID AND user_vpn.vpn_id = '$idVpn')";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //envio el array final el formato json a AJAX
$conexion = null;
