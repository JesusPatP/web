<?php
include_once '../config/db.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

//Employee
$employee_id = (isset($_POST['employee_id'])) ? $_POST['employee_id'] : '';
$nameEmployee = (isset($_POST['nameEmployee'])) ? $_POST['nameEmployee'] : '';
$emailEmployee = (isset($_POST['emailEmployee'])) ? $_POST['emailEmployee'] : '';
$phone_numberEmployee = (isset($_POST['phone_numberEmployee'])) ? $_POST['phone_numberEmployee'] : '';

//Element
$userNameElement = (isset($_POST['userNameElement'])) ? $_POST['userNameElement'] : '';
$identifierElement = (isset($_POST['identifierElement'])) ? $_POST['identifierElement'] : '';
$sessionIdElement = (isset($_POST['sessionIdElement'])) ? $_POST['sessionIdElement'] : '';
$sessionKeyElement = (isset($_POST['sessionKeyElement'])) ? $_POST['sessionKeyElement'] : '';
$encryptionKeyElement = (isset($_POST['encryptionKeyElement'])) ? $_POST['encryptionKeyElement'] : '';

//Element
$userNameNextcloud = (isset($_POST['userNameNextcloud'])) ? $_POST['userNameNextcloud'] : '';
$passwordNextcloud = (isset($_POST['passwordNextcloud'])) ? $_POST['passwordNextcloud'] : '';
$emailNextcloud = (isset($_POST['emailNextcloud'])) ? $_POST['emailNextcloud'] : '';

//Element
$userNameZoho = (isset($_POST['userNameZoho'])) ? $_POST['userNameZoho'] : '';
$emailZoho = (isset($_POST['emailZoho'])) ? $_POST['emailZoho'] : '';
$passwordZoho = (isset($_POST['passwordZoho'])) ? $_POST['passwordZoho'] : '';
$typeZoho = (isset($_POST['typeZoho'])) ? $_POST['typeZoho'] : '';
$idZoho = (isset($_POST['idZoho'])) ? $_POST['idZoho'] : '';
//Vpn
$idVpn = (isset($_POST['idVpn'])) ? $_POST['idVpn'] : '';

switch ($opcion) {
    case 1:
        //Employee Query Select
        $query = "SELECT * FROM users  WHERE id='$employee_id'";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2:
        //Employee Query Update
        $query = "UPDATE `users` SET `name`='$nameEmployee',`email`='$emailEmployee',`phone_number`='$phone_numberEmployee' WHERE '$employee_id'";
        $result = $conexion->prepare($query);
        $result->execute();

        $query = "SELECT * FROM users WHERE id='$employee_id' ";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
        //Employee Query Delete
    case 3:
        //Element Query Select
        $query = "SELECT * FROM `element` WHERE `users_id`='$employee_id'";
        $result = $conexion->prepare($query);
        $result->execute();
        $stm = $result->fetchAll(PDO::FETCH_ASSOC);
        //$data = $result->fetchAll(PDO::FETCH_ASSOC);
        if ($result->fetchColumn() > 0) {
            //$data = $stm;
        } else {
            $data = $stm;
        }

        break;
    case 4:
        //Element Query Select
        $query = "SELECT * FROM `element` WHERE `users_id`='$employee_id'";
        $result = $conexion->prepare($query);
        $result->execute();
        if ($result->fetchColumn() > 0) {
            //Element Query Update
            //Exist
            $query = "UPDATE `element` 
             SET `user_name`='$userNameElement',`identifier`='$identifierElement',`session_id`='$sessionIdElement',
             `session_key`='$sessionKeyElement',`encryption_key`='$encryptionKeyElement' 
             WHERE `users_id`='$employee_id'";
            $result = $conexion->prepare($query);
            $result->execute();

            //Element Query Select
            $query = "SELECT * FROM `element` WHERE `users_id`='$employee_id'";
            $result = $conexion->prepare($query);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
        } else {
            //NoExist
            $query = "INSERT INTO `element`(`user_name`, `identifier`, `session_id`, `session_key`, `users_id`, `encryption_key`) 
            VALUES ('$userNameElement','$identifierElement','$sessionIdElement',
            '$sessionKeyElement','$employee_id','$encryptionKeyElement')";
            $result = $conexion->prepare($query);
            $result->execute();

            //Element Query Select
            $query = "SELECT * FROM `element` WHERE `users_id`='$employee_id'";
            $result = $conexion->prepare($query);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        break;
        //Element Query Delete
    case 5:
        //Element Query Select
        $query = "SELECT * FROM `nextcloud` WHERE `users_id`='$employee_id'";
        $result = $conexion->prepare($query);
        $result->execute();
        $stm = $result->fetchAll(PDO::FETCH_ASSOC);
        //$data = $result->fetchAll(PDO::FETCH_ASSOC);
        if ($result->fetchColumn() > 0) {
            //$data = $stm;
        } else {
            $data = $stm;
        }

        break;
    case 6:
        //Element Query Select
        $query = "SELECT * FROM `nextcloud` WHERE `users_id`='$employee_id'";
        $result = $conexion->prepare($query);
        $result->execute();
        if ($result->fetchColumn() > 0) {
            //Element Query Update
            //Exist
            $query = "UPDATE `nextcloud` SET `user_name`='$userNameNextcloud',
            `password`='$passwordNextcloud',`email`='$emailNextcloud' 
            WHERE `users_id` = '$employee_id'";
            $result = $conexion->prepare($query);
            $result->execute();

            //Element Query Select
            $query = "SELECT * FROM `nextcloud` WHERE `users_id`='$employee_id'";
            $result = $conexion->prepare($query);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
        } else {
            //NoExist
            $query = "INSERT INTO `nextcloud`(`user_name`, `password`, `users_id`, `email`) 
            VALUES ('$userNameNextcloud','$passwordNextcloud',
            '$employee_id','$emailNextcloud')";
            $result = $conexion->prepare($query);
            $result->execute();

            //Element Query Select
            $query = "SELECT * FROM `nextcloud` WHERE `users_id`='$employee_id'";
            $result = $conexion->prepare($query);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        break;
    case 7:
        //Zoho Query Select
        $query = "SELECT `id`, `username`, `email`, `password`,`type_zoho_id` FROM `zoho` WHERE  `users_id` = '$employee_id'";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 8:
        $query = "INSERT INTO `zoho`(`username`, `email`, `password`, `users_id`, `type_zoho_id`) 
        VALUES ('$userNameZoho','$emailZoho','$passwordZoho','$employee_id','$typeZoho')";
        $result = $conexion->prepare($query);
        $result->execute();
        break;
    case 9:
        $query = "UPDATE `zoho` SET `username`='$userNameZoho',
        `email`='$emailZoho',`password`='$passwordZoho',
        `type_zoho_id`='$typeZoho' 
        WHERE `id` = '$idZoho'";
        $result = $conexion->prepare($query);
        $result->execute();

        $query = "SELECT `id`, `username`, `email`, `password`,`type_zoho_id` FROM `zoho` WHERE  `users_id` = '$employee_id'";
        $result = $conexion->prepare($consulta);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 10:
        $query = "SELECT * FROM `type_zoho`";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 11:
        $query = "DELETE FROM zoho WHERE id='$idZoho' ";
        $result = $conexion->prepare($query);
        $result->execute();
        break;
    case 12:
        //Employee Query Select
        $query = "select vpn.id,vpn.expiry_date,vpn.key
        FROM vpn
        JOIN user_vpn ON user_vpn.vpn_id = vpn.id
        JOIN users ON users.id = user_vpn.users_id
        where users.id = '$employee_id'";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 13:
        $query = "select vpn.id AS ID ,vpn.expiry_date,vpn.key,vpn.email FROM vpn WHERE NOT EXISTS(SELECT 1 FROM user_vpn
            WHERE user_vpn.vpn_id = ID AND user_vpn.users_id = '$employee_id')";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 14:
        $query = "INSERT INTO `user_vpn`(`vpn_id`, `users_id`) 
                VALUES ('$idVpn','$employee_id')";
        $result = $conexion->prepare($query);
        $result->execute();

        $query = "select vpn.id,vpn.expiry_date,vpn.key
                FROM vpn
                JOIN user_vpn ON user_vpn.vpn_id = vpn.id
                JOIN users ON users.id = user_vpn.users_id
                where users.id = '$employee_id'";
        $result = $conexion->prepare($query);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 15:
        $query = "DELETE FROM `user_vpn` 
                    WHERE `vpn_id` = '$idVpn' and `users_id` ='$employee_id'";
        $result = $conexion->prepare($query);
        $result->execute();
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //envio el array final el formato json a AJAX
$conexion = null;
