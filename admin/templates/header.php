<?php 
  session_start();
  $url_base="http://localhost/ProyectoWEB1/admin";
  $url_imagen="http://localhost/ProyectoWEB1/assets/img/Ceti.webp";
  if(!isset($_SESSION['usuario'])){
    header("Location:".$url_base."/login.php");
  }

?><!--Si quieres cambiar de servidor se tiene que cambiar el link-->
<!doctype html>
<html lang="en">
<head>
  <title>Administrador del sitio web</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>    
</head>

<body>
  <header>
    <!-- <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#" aria-current="page">Administrador <span class="visually-hidden">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>/secciones/servicios/">Servicios</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>/secciones/portafolio/">Portafolio</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>/secciones/entradas/">Entradas</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>/secciones/equipo/">Equipo</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>/secciones/usuarios/">Usuarios</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>/cerrar.php">Cerrar sesión</a>
        </div>
    </nav> -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="index.php">
          <img src="<?php echo $url_imagen;?>" alt="logo" style="width:40px;">
        </a>
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $url_base;?>../index.php">Ver template</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $url_base;?>/secciones/servicios/">Servicios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $url_base;?>/secciones/portafolio/">Portafolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $url_base;?>/secciones/entradas/">Entradas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $url_base;?>/secciones/equipo/">Equipo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $url_base;?>/secciones/usuarios/">Usuarios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $url_base;?>/cerrar.php">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>    
  </header>
  <main class = "container">
  <br/>