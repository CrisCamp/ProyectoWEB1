<?php 
    include("../../bd.php");

    //seleccionar registros
    // esta parte se encarga de extraer los datos de la bdd para luego ser mostradas en la tabla
    $sentencia=$conexion->prepare("SELECT * FROM tbl_entradas;");
    $sentencia->execute();
    $lista_entradas=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    include("../../templates/header.php"); ?>

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
                        <th scope="col">Fecha</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_entradas as $registros) { ?>
                    <tr class="">
                        <td><?php echo $registros["ID"]?></td>
                        <td><?php echo $registros["fecha"]?></td>
                        <td><?php echo $registros["titulo"]?></td>
                        <td><?php echo $registros["descripcion"]?></td>
                        <td><img width="100" src="../../../assets/img/about/<?php echo $registros["imagen"]?>"/></td>
                        <td>
                        <a name="" id="" class="btn btn-info" href="editar.php?txtID=<?php echo $registros['ID']; ?>" role="button">Editar</a>
                            |
                        <a name="" id="" class="btn btn-danger" href="index.php?txtID=<?php echo $registros['ID']; ?>" role="button">Eliminar</a>
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
<?php include("../../templates/footer.php"); ?>