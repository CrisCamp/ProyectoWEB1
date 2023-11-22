<?php 
    include("../../bd.php");
    if($_POST){
        $titulo = (isset($_POST['titulo']))?$_POST['titulo']:"";
        $subtitulo = (isset($_POST['subtitulo']))?$_POST['subtitulo']:"";
        //Para recepcionar imagenes es un caso especial, esto es diferente a la del $_POST
        $imagen = (isset($_FILES["imagen"]["name"]))?$_FILES["imagen"]["name"]:"";
        $descripcion = (isset($_POST['descripcion']))?$_POST['descripcion']:"";
        $cliente = (isset($_POST['cliente']))?$_POST['cliente']:"";
        $categoria = (isset($_POST['categoria']))?$_POST['categoria']:"";
        $url = (isset($_POST['url']))?$_POST['url']:"";

      //en esta parte se esta validando que si existe una imagen le asignamos un nuevo nombre
      $fecha_imagen = new DateTime();
      $nombre_archivo_imagen = ($imagen!="")? $fecha_imagen->getTimestamp()."_".$imagen:"";
      
      //esta sentecia sirve para mover la imagen a otra carpeta
      $tmp_imagen=$_FILES["imagen"]["tmp_name"];
      if($tmp_imagen!=""){
        //porfolio en lugar de portafolio
        move_uploaded_file($tmp_imagen,"../../../assets/img/portfolio/".$nombre_archivo_imagen);
      }

        // Definir 
        $sentencia=$conexion->prepare("INSERT INTO `tbl_portafolio` (`ID`, `titulo`, `subtitulo`, `imagen`, `descripcion`, `cliente`, `categoria`, `url`) 
        VALUES (NULL, :titulo, :subtitulo, :imagen, :descripcion, :cliente, :categoria, :url);");

        //donde encuentres titulo pon la varible $titulo en la sentencia de arriba
        $sentencia->bindParam(":titulo",$titulo);
        //donde encuentres subtitulo pon la varible $subtitulo en la sentencia de arriba
        $sentencia->bindParam(":subtitulo",$subtitulo);
        //donde encuentres imagen pon la varible $nombre_archivo_imagen en la sentencia de arriba
        $sentencia->bindParam(":imagen",$nombre_archivo_imagen);
        //donde encuentres descripcion pon la varible $descripcion en la sentencia de arriba
        $sentencia->bindParam(":descripcion",$descripcion);
        //donde encuentres cliente pon la varible $cliente en la sentencia de arriba
        $sentencia->bindParam(":cliente",$cliente);
        //donde encuentres categoria pon la varible $categoria en la sentencia de arriba
        $sentencia->bindParam(":categoria",$categoria);
        //donde encuentres url pon la varible $url en la sentencia de arriba
        $sentencia->bindParam(":url",$url);  

        //Ejecutar
        $sentencia->execute();
        $mensaje="Registro agregado con éxito.";
        header("Location:index.php?mensaje=".$mensaje);
    }
    include("../../templates/header.php"); 
?>

<div class="card">
    <div class="card-header">
        Producto del portafolio
    </div>
    <div class="card-body">
        <form action="" enctype="multipart/form-data" method="post">
            <!-- Titulo -->
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo:</label>
                <input type="text"
                    class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Titulo">
            </div>
            <!-- Subtitulo -->
            <div class="mb-3">
              <label for="subtitulo" class="form-label">Subtitulo:</label>
              <input type="text"
                class="form-control" name="subtitulo" id="subtitulo" aria-describedby="helpId" placeholder="Subtitulo">              
            </div>
            <!-- Imagen -->
            <!-- este input debe ser de tipo file ya que es la imagen bs5-form-file -->
            <div class="mb-3">
              <label for="imagen" class="form-label">Imagen:</label>
              <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen" aria-describedby="fileHelpId">              
            </div>
            <!-- Despcripcion -->
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripcion:</label>
                <!--se puede tambien manejar como un texarea --> <input type="text"
                class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripcion">              
            </div>
            <!-- Cliente -->
            <div class="mb-3">
              <label for="cliente" class="form-label">Cliente:</label>
              <input type="text"
                class="form-control" name="cliente" id="cliente" aria-describedby="helpId" placeholder="Cliente">              
            </div>
            <!-- Categoria -->
            <div class="mb-3">
              <label for="categoria" class="form-label">Categoria:</label>
              <input type="text"
                class="form-control" name="categoria" id="categoria" aria-describedby="helpId" placeholder="Categoria">
            </div>
            <!-- URL -->
            <div class="mb-3">
              <label for="url" class="form-label">URL:</label>
              <input type="text"
                class="form-control" name="url" id="url" aria-describedby="helpId" placeholder="URL del proyecto">
            </div>

            <button type="submit" class="btn btn-success">Agregar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

        </form>        
    </div>
    <div class="card-footer text-muted">

    </div>
</div>

<?php include("../../templates/footer.php"); ?>