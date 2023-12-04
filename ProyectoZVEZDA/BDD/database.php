<?php
	$server = 'localhost';
$username = 'admin';
$password = 'a01020304b';
$database = 'ProyectoCeti';

$mysqli = new mysqli($server, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}
?>