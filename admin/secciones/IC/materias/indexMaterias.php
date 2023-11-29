<?php 
    include("../../../bd.php");
    if (isset($_GET['txtIDM'])){
        // para eliminar los datos de la tabla segun su id
        $sentencia=$conexion->prepare("DELETE FROM tbl_materias WHERE id=:id;");
        //donde encuentres txtID pon la varible $txtID en la sentencia de arriba
        $sentencia->bindParam(":id",$txtID);
        $sentencia->execute();
    }
    if (isset($_GET['txtID'])){
        // recepcionar el txtID que se obtiene de index.php en una variable con el mismo nombre 
        $txtID = (isset($_GET['txtID']))?$_GET['txtID']:"";
    }    

    //seleccionar registros
    // esta parte se encarga de extraer los datos de la bdd para luego ser mostradas en la tabla
    $sentencia=$conexion->prepare("SELECT * FROM tbl_materias;");
    $sentencia->execute();
    $lista_informacion=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    include("../../../templates/header.php"); ?>

<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registros</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ID_Carrera</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Plan de estudios</th>                     
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_materias as $registros) { ?>
                    <tr class="">
                        <td><?php echo $registros["ID"]?></td>
                        <td><?php echo $registros["id_info"]?></td>
                        <td><?php echo $registros["nombre"]?></td>
                        <td><?php echo $registros["plan"]?></td>
                        <td>
                            <a name="" id="" class="btn btn-info" href="editarMaterias.php?txtID=<?php echo $registros['ID']; ?>" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="indexMaterias.php?txtIDM=<?php echo $registros['ID']; ?>" role="button">Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer text-muted">
    </div>
</div>
<?php include("../../../templates/footer.php"); ?>