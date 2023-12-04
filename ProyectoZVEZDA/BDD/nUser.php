<?php
include 'database.php';

$nombre = $_POST['uname'];
$correo = $_POST['correo'];
$contrasena = $_POST['pwd'];

$sql = "INSERT INTO usuarios (nick, correo, passw) VALUES ('$nombre', '$correo', '$contrasena')";

if ($mysqli->query($sql) === TRUE) {
    session_start();
    $_SESSION['user_nick'] = $row['nick'];
    header("Location: ../index.php");
    exit();
} else {
    echo "Error al crear el usuario: " . $mysqli->error;
}

$mysqli->close();
?>
