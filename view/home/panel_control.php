<?php
    require_once("c://xampp/htdocs/tech_department/view/head/header.php");
    if(empty($_SESSION['user'])){
        header("Location:login.php");
    }
?>
    <h1 class="text-center mt-4">Bienvenido <?= $_SESSION['user']?></h1>
    
<?php
    require_once("c://xampp/htdocs/tech_department/view/head/footer.php");
?>