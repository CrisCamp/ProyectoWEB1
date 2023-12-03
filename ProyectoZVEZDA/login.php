<?php
  session_start();
  
  require 'BDD/database.php';    
  require 'bdd/databaseP.php';

?>
<!DOCTYPE html>
<html lang="en">
<?php require 'PARTS/header.php' ?>
<body id="body">
  <?php require 'PARTS/navbar.php' ?>
      
    <?php
    if (isset($_GET['action'])) {
      $action = $_GET['action'];
    
      if ($action === 'register') {
        include 'PARTS/registrarS.php';
      } elseif ($action === 'login') {
        include 'PARTS/iniciarS.php';
      } 
    } 
    
    ?>

    <br>
    <?php require 'PARTS/icono.php' ?>
    <?php require 'PARTS/footer.php' ?>
    <?php require 'PARTS/scripts.php' ?>
    
</body>
</html>