<?php
require_once("c://xampp/htdocs/tech_department/view/head/head.php");
?>

<div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <?php if (empty($_SESSION['user'])) : ?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Precios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contactanos</a>
            </li>
          </ul>

          <!--Botons to sign-in-up-->
          <a href="\tech_department\view\home\login.php" class="boton">Inicia Session</a>
          <a href="\tech_department\view\home\signup.php" class="
          boton">Registrate</a>

        </div>

      <?php else : ?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Agregar informacion</a>I
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Editar perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Session de recursos</a>
            </li>
          </ul>
          <a href="/login/view/home/logout.php" class="boton">Cerrar Sesion</a>
        </div>
      <?php endif ?>

    </div>
  </nav>
</div>