<?php 
include("../../bd.php");

if($_POST){
    $nombre = (isset($_POST['nombre']))?$_POST['nombre']:"";
    $plan = (isset($_POST['plan']))?$_POST['plan']:"";

    // Definir
    $sentencia=$conexion->prepare("INSERT INTO tbl_informacion 
    (ID, nombre, plan, , , ) VALUES 
    (NULL, :nombre, :plan, :, :, :);");

    //donde encuentres nombre pon la varible $nombre en la sentencia de arriba
    $sentencia->bindParam(":nombre",$nombre);
    //donde encuentres plan pon la varible $plan en la sentencia de arriba
    $sentencia->bindParam(":plan",$plan);

    //Ejecutar
    $sentencia->execute();
    $mensaje="Registro agregado con éxito.";
    header("Location:index.php?mensaje=".$mensaje);
}

include("../../templates/header.php"); ?>

<div class="card">
    <div class="card-header">
        Entradas
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text"
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
            </div>

            <div class="mb-3">
              <label for="plan" class="form-label">Plan de estudios:</label>
              <input type="text"
                class="form-control" name="plan" id="plan" aria-describedby="helpId" placeholder="Plan">
            </div>

            <button type="submit" class="btn btn-success">Agregar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
    </div>
    <div class="card-footer text-muted">
    </div>
</div>
<?php include("../../templates/footer.php"); ?>