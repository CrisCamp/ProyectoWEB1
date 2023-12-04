<?php
  session_start();
  
  require 'BDD/database.php';

  if (!isset($_SESSION['user_nick'])) {
    $vistaNav=0;
  }else{
    $nombreUsuario = $_SESSION['user_nick'];
    $vistaNav=1;
  }

  if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
  }

  $consulta1 = "SELECT * FROM cComentarios";
  $results1 = mysqli_query($mysqli, $consulta1);

?>
<!DOCTYPE html>
<html lang="en">
<?php require 'PARTS/header.php' ?>
<body id="body">
  <?php require 'PARTS/navbar.php' ?>
      
    <div class="container p-2 my-3 border-0 text-center">
        <h2 class="mb-3">Caja de Comentarios </h2>
        <p class="ml-1 mb-0 contenido-texto">Participa en el enriquesimiento de ideas y oportunidades en conjunto con alumnos y exalumnos
    </div>

    <div class="container p-2 my-3 border text-center mt-4" style="width:450px">
  <img src="IMG/Ceti.webp" width="100" height="100" class="rounded-circle mt-3">
  <form action="BDD/comen.php" class="needs-validation mt-4" method="post" novalidate>
  <div class="form-group contenido-texto">
      <label for="uname">Nombre:</label>
      <input type="text" class="form-control" id="uname" placeholder="" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Por favor, escriba un usuario valido.</div>
    </div>
    <div class="form-group contenido-texto">
      <label for="comen">Comentario</label>
      <textarea  type="text" class="form-control" id="comen" placeholder="" name="comen" required style="height:50px"></textarea>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Por favor, llene este campo.</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php
    while ($publicacion = mysqli_fetch_array($results1)) {
    ?>
        <div class="container p-2 my-3 border text-center border-0" style="width:450px">
        <?php echo '<h2 class="mb-3">' . $publicacion['nombre'] . '</h2>'; ?>
          <div class="p-1 my-3 border-0 d-flex align-items-center">
            <?php
            echo '<p class="ml-1 mb-0 contenido-texto">' . $publicacion['comentario'] .'<br>';
            ?>
        </div></div>
    <?php    }    ?>
  </div>
  <br>

<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
    <br>


    <?php require 'PARTS/icono.php' ?>
    <?php require 'PARTS/footer.php' ?>
    <?php require 'PARTS/scripts.php' ?>
    
</body>
</html>