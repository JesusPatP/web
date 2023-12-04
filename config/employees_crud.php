<?php
include_once '../config/db.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
/*Ids*/

$username = (isset($_POST['username'])) ? $_POST['username'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$phone_number = (isset($_POST['phone_number'])) ? $_POST['phone_number'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$employee_id = (isset($_POST['employee_id'])) ? $_POST['employee_id'] : '';


switch($opcion){
    case 1:
        /*User*/
        $query = "INSERT INTO users (name,email,phone_number) VALUES('$username','$email','$phone_number') ";
        $result = $conexion->prepare($query);
        $result->execute();
        $id_employee = $conexion->lastInsertId();
        
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
        $query = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
  
    case 2:        
        $query = "UPDATE users SET name='$username', email='$email', phone_number='$phone_number' WHERE id='$employee_id' ";		
        $result = $conexion->prepare($query);
        $result->execute();        
        
        $query = "SELECT * FROM usuarios WHERE id='$employee_id' ";       
        $result = $conexion->prepare($query);
        $result->execute();
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $query = "DELETE FROM `users` WHERE id='$employee_id'";		
        $result = $conexion->prepare($query);
        $result->execute();               
        break;
    case 4:    
        $query = "SELECT * FROM users";
        $result = $conexion->prepare($query);
        $result->execute();        
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        break;  

}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;