<?php
require_once dirname(__DIR__) . '/head/head.php';
if (!empty($_SESSION['user'])) {
    header("Location:./view/views/employees_table.php");
}
?>
<link href="./assets/css/home.css" rel="stylesheet">
<main>
    <div class="container">
    <div class="row justify-content-center mt-5 pt-5">
        <img class="img-home" src="./assets/img/home/undraw_visionary_technology_re_jfp7.svg">
    </div>
    </div>
</main>

