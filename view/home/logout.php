<?php 
    session_start();
    session_destroy();
    header("Location:/tech_department/index.php");
?>