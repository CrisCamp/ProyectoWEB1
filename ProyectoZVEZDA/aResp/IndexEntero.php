<?php
  session_start();
  
  require 'BDD/database.php';    
  require 'bdd/databaseP.php';

  $elementosPorPagina = 10;
  $totalElementos = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM contenido ORDER BY id DESC"));
  $totalPaginas = ceil($totalElementos / $elementosPorPagina);

  $paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
  $indicePrimerElemento = ($paginaActual - 1) * $elementosPorPagina;

  $consultaPaginada = "SELECT * FROM contenido ORDER BY id DESC LIMIT $indicePrimerElemento, $elementosPorPagina";
  $resultadosPaginados = mysqli_query($conn, $consultaPaginada);

  $consulta1 = "SELECT * FROM contenido ORDER BY id DESC";
  $results1 = mysqli_query($conn, $consulta1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orientación Vocacional CETI Colomos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    margin: 0;
}
.floating-icon {
    position: fixed;
    bottom: 25px;
    left: 25px;
    z-index: 1000;
    cursor: pointer;
  }
  .cursor-pequeno {
    cursor: small;
  }

  .cursor-grande {
      cursor: url("IMG/Cursor02.png"), auto;
  }

  .texto-pequeno {
      font-size: small;
  }

  .texto-mediano {
      font-size: medium;
  }

  .texto-grande {
      font-size: 135%;
  }

  .fuente-dislexia {
    font-family: 'OpenDyslexic', sans-serif;
    word-spacing:  0.25em;
  }
  .elemento-detras {
    z-index: -1;
    margin-top: auto; 
  }
</style>
<body id="body">
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="index.php">
          <img src="IMG/Ceti.webp" alt="logo" style="width:40px;">
        </a>
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pruebas de Orientación</a>
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
              
            <form class="form-inline my-2 my-lg-0" action="busqueda.php" method="GET">
                <input class="form-control mr-sm-2" type="text" name="buscar" placeholder="">
                <button class="btn btn-success" type="submit">Buscar</button>
            </form>
        </div>
</nav>
  <div id="conten">
    <?php
    while ($publicacion = mysqli_fetch_array($resultadosPaginados)) {
    ?>
        <div class="container p-3 my-3 border d-flex align-items-center">
            <?php
            echo '<img src="IMG/' . $publicacion['idImagen'] . '" class="rounded" width="200" height="200">';
            echo '<p class="ml-3 mb-0 contenido-texto">' . $publicacion['contenido'] . '<br>';
            ?>
        </div>
    <?php
    }
    ?>
</div>
    <br>

  <ul class="pagination justify-content-center position-sticky">
      <?php for ($i = 1; $i <= $totalPaginas; $i++) : ?>
          <li class="page-item <?php echo ($i == $paginaActual) ? 'active' : ''; ?>">
            <a class="page-link" href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
          </li>
      <?php endfor; ?>
  </ul>

  <div class="floating-icon" data-toggle="modal" data-target="#menuModal">
    <img src="IMG/ico_accesibilidad.png" alt="Icono de Menú" width="50" height="50" class="rounded-circle">
  </div>
  

<!-- The Modal -->
<div class="modal" id="menuModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Funciones de accesibilidad</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container p-3 my-3 border d-flex align-items-center">
                <div class="btn-group align-items-center">
                  <p class="mr-3">Cambiar el tamaño del Cursor</p>
                  <button type="button" class="btn btn-primary btn-sm" onclick="actualizarEstilo(1)">Pequeño</button>
                  <button type="button" class="btn btn-primary btn-sm" onclick="actualizarEstilo(2)">Grande</button>
                </div>
            </div>

            <div class="container p-3 my-3 border d-flex align-items-center">
              <div class="btn-group align-items-center">
                <p class="mr-3">Cambiar el tamaño del texto</p>
                <button type="button" class="btn btn-primary btn-sm" onclick="cambiarTamanoTexto('texto-pequeno', 1)">Pequeño</button>
                <button type="button" class="btn btn-primary btn-sm" onclick="cambiarTamanoTexto('texto-mediano', 2)">Mediano</button>
                <button type="button" class="btn btn-primary btn-sm" onclick="cambiarTamanoTexto('texto-grande', 3)">Grande</button>
              </div>
            </div>
            <div class="container p-3 my-3 border d-flex align-items-center">
              <div class="btn-group align-items-center">
                <p class="mr-3">Cambiar a tipografía</p>
                <button type="button" class="btn btn-primary btn-sm" onclick="actualizarEstilo(3)">Default</button>
                <button type="button" class="btn btn-primary btn-sm" onclick="actualizarEstilo(4)">Dislexia</button>
              </div>
            </div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
        </div>
    </div>
</div>

<footer class="bg-dark text-center text-white  elemento-detras">
  <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Orientación Vocacional
    <a class="text-link" href="https://www.colomos.ceti.mx">CETI Colomos</a>
    <img src="IMG/accesibilidad.png" width="100" height="100" class="rounded-circle">
  </div>
</footer>

<script src="JS/icono.js"></script>
<script>
    function guardarPreferencias() {
        sessionStorage.setItem('mouse', mouse);
        sessionStorage.setItem('dislexia', dislexia);
        sessionStorage.setItem('numero', numero);
    }

    // Función para cargar las preferencias desde sessionStorage
    function cargarPreferencias() {
        mouse = parseInt(sessionStorage.getItem('mouse')) || 1;
        dislexia = parseInt(sessionStorage.getItem('dislexia')) || 3;
        numero = parseInt(sessionStorage.getItem('numero')) || 2;
    }    

    // Función para aplicar cambios en el estilo y guardar las preferencias
    function aplicarCambiosEstilo(cambio) {
        actualizarEstilo(cambio);
        guardarPreferencias();
    }

    // Llama a la función para cargar las preferencias al cargar la página
    window.addEventListener('load', function () {
        cargarPreferencias();
        VistaAnterior();
    });
</script>

</body>
</html>