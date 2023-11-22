<?php
    $servidor = "localhost";
    $baseDeDatos="proyecto";
    $usuario = "admin";
    $contrasenia = "cristoph22110099";
    try{
        $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
        // echo "Conexión realizada....";
    }catch(Exception $error){
        echo $error->getMessage();
    }
?>