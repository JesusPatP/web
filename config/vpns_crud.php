<?php
include_once '../config/db.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
/*Ids*/
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$key = (isset($_POST['key'])) ? $_POST['key'] : '';
$expiryDate = (isset($_POST['expiryDate'])) ? $_POST['expiryDate'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$vpn_id = (isset($_POST['vpn_id'])) ? $_POST['vpn_id'] : '';
$email_id = (isset($_POST['vpn_id'])) ? $_POST['vpn_id'] : '';

switch($opcion){
    case 1:
        /*Email*/
        /*
        $query = "INSERT INTO `emails`(`email_address`) 
        VALUES ('$email')";
        $result = $conexion->prepare($query);
        $result->execute();
        $email_id = $conexion->lastInsertId();
        */
        /*Vnp*/
        $query = "INSERT INTO `vpn`(`expiry_date`, `key`, `password`, `email`) 
        VALUES ('$expiryDate','$key','$password','$email')";
        $result = $conexion->prepare($query);
        $result->execute();
        
        /*PhoneNumber
        $query = "INSERT INTO phone_numbers (phone_number) VALUES('$phone_number') ";
        $result = $conexion->prepare($query);
        $result->execute();
        $id_phone = $conexion->lastInsertId();
        */
        /*
        $query = "INSERT INTO  users_has_departments (users_id) VALUES('$id_employee','1') ";
        $result = $conexion->prepare($query);
        $result->execute();
        */
        $query = "SELECT * FROM vpn ORDER BY id DESC LIMIT 1";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
  
    case 2:        
        $query = "UPDATE vpn SET expiry_date='$expiryDate', key = '$key', password='$password' WHERE id='$vpn_id'";		
        $result = $conexion->prepare($query);
        $result->execute(); 
        
        $query = "UPDATE emails SET email_address='$email' WHERE id='$vpn_id'";		
        $result = $conexion->prepare($query);
        $result->execute();  
        
        $query = "SELECT * FROM vpn WHERE id='$vpn_id' ";       
        $result = $conexion->prepare($query);
        $result->execute();
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $query = "DELETE FROM vpn WHERE id='$vpn_id' ";		
        $result = $conexion->prepare($query);
        $result->execute();  
        break;
    case 4:
        $query = "SELECT * FROM `vpn`";
        $result = $conexion->prepare($query);
        $result->execute();        
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        break;  
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;