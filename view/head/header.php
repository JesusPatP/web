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

          <!--Register area-->
          <ul class="navbar-nav ">
      
            <li class="nav-item">
              <a class="nav-link" href="\web\view\home\signin.php">Inicia Session</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="\web\view\home\signup.php">Registrate</a>
            </li>
          </ul>

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
          <a href="/web/view/home/logout.php" class="boton">Cerrar Sesion</a>
        </div>
      <?php endif ?>

    </div>
  </nav>
</div>