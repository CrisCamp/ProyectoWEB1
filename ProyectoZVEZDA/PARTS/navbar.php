<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">
    <img src="IMG/Ceti.webp" alt="logo" style="width:40px;">
  </a>
  <div class="collapse navbar-collapse" id="navb">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Información de Carreras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Entrevistas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Recursos Financieros</a>
      </li>
    </ul>

    
    <ul class="navbar-nav ml-auto mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">Pruebas de Orientación</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="login.php?action=login">Iniciar sesión</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php?action=register">Registrarme</a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0 ml-2" action="busqueda.php" method="GET">
      <input class="form-control mr-sm-2" type="text" name="buscar" placeholder="">
      <button class="btn btn-success" type="submit">Buscar</button>
    </form>
  </div>
</nav>