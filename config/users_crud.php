<?php
include_once '../config/db.php';
$objeto = new db();
$conexion = $objeto->conexion();

$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

switch ($opcion) {
    case 1:
        $query = "INSERT INTO `tech_department`(`email`, `password`) 
        VALUES ('$email','$password') ";
        $result = $conexion->prepare($query);
        $result->execute();

        $query = "SELECT * FROM tech_department ORDER BY id DESC LIMIT 1";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2:
        $query = "UPDATE `tech_department` SET 
        `email`='$email',`password`='$password' 
        WHERE `id` = $id";
        $result = $conexion->prepare($query);
        $result->execute();

        $query = "SELECT * FROM tech_department WHERE id='$id' ";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:
        $query = "DELETE FROM tech_department WHERE id='$id' ";
        $result = $conexion->prepare($query);
        $result->execute();
        break;
    case 4:
        $query = "SELECT * FROM tech_department";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //envio el array final el formato json a AJAX
$conexion = null;
