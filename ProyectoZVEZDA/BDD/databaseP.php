<?php
	$server = 'localhost';
	$username = 'admin';
	$password = 'a01020304b';
	$database = 'ProyectoCeti';

	$conn = mysqli_connect($server, $username, $password, $database);
	if($conn == NULL)
	{
		echo "[+] La base de datos no esta activa, error";
    }
?>