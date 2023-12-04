<?php
  session_start();
  
  require 'BDD/database.php';

  $elementosPorPagina = 10;
  $totalElementos = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tablero ORDER BY id DESC"));
  $totalPaginas = ceil($totalElementos / $elementosPorPagina);

  $paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
  $indicePrimerElemento = ($paginaActual - 1) * $elementosPorPagina;

  $consultaPaginada = "SELECT * FROM tablero ORDER BY id DESC LIMIT $indicePrimerElemento, $elementosPorPagina";
  $resultadosPaginados = mysqli_query($conn, $consultaPaginada);

  $consulta1 = "SELECT * FROM tablero ORDER BY id DESC";
  $results1 = mysqli_query($conn, $consulta1);
?>
<!DOCTYPE html>
<html lang="en">
<?php require 'PARTS/header.php' ?>
<body id="body">
  <?php require 'PARTS/navbar.php' ?>
  <div id="conten">
    <?php
    while ($publicacion = mysqli_fetch_array($resultadosPaginados)) {
    ?>
        <div class="container p-2 my-3 border text-center">
        <?php echo '<h2 class="mb-3">' . $publicacion['titulo'] . '</h2>'; ?>
          <div class="p-0 my-3 border-0 d-flex align-items-center">
            <?php
            echo '<img src="IMG/' . $publicacion['idImagen'] . '" class="rounded" width="200" height="200">';
            echo '<p class="ml-3 mb-0 contenido-texto">' . $publicacion['contenido'] .'<br>';
            ?>
        </div></div>
    <?php    }    ?>
  </div>
  <br>

  <ul class="pagination justify-content-center position-sticky">
    <?php for ($i = 1; $i <= $totalPaginas; $i++) : ?>
        <li class="page-item <?php echo ($i == $paginaActual) ? 'active' : ''; ?>">
          <a class="page-link" href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
        </li>
    <?php endfor; ?>
  </ul>

  <?php require 'PARTS/icono.php' ?>
  <?php require 'PARTS/footer.php' ?>
  <?php require 'PARTS/scripts.php' ?>

</body>
</html>