<nav class="navbar navbar-expand-lg navbar-dark main_menu">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MARBIC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/index.php">Inicio</a>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuarios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?= ROOT ?>/Usuarios/agregar.php">Registro</a></li>
            <li><a class="dropdown-item" href="<?= ROOT ?>/Usuarios/ver.php">Ver Usuarios</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="profesores" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profesores 
          </a>
          <ul class="dropdown-menu" aria-labelledby="profesores">
            <li><a class="dropdown-item" href="<?= ROOT ?>/Profesores/agregar.php">Registro</a></li>
            <li><a class="dropdown-item" href="<?= ROOT ?>/Profesores/ver.php">Ver Profesores</a></li>
          </ul>
        </li>
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="salones" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Salones
          </a>
          <ul class="dropdown-menu" aria-labelledby="salones">
            <li><a class="dropdown-item" href="<?= ROOT ?>/salones/agregar.php">Comentario</a></li>
            <li><a class="dropdown-item" href="<?= ROOT ?>/salones/ver.php">Ver salones</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="Comentarios" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Comentarios
          </a>
          <ul class="dropdown-menu" aria-labelledby="Comentarios">
            <li><a class="dropdown-item" href="<?= ROOT ?>/Comentarios/agregar.php">Comentario</a></li>
            <li><a class="dropdown-item" href="<?= ROOT ?>/Comentarios/ver.php">Ver comentarios</a></li>
          </ul>
        </li>


        </li>
        
        </li>
      </ul>
    </div>
  </div>
</nav>