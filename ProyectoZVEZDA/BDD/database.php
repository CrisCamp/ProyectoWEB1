<?php
	$server = 'localhost';
	$username = 'admin';
	$password = 'a01020304b';
	$database = 'ProyectoCeti';

	try {
		$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
	} catch (PDOException $e) {
		die('Connected failed: '.$e->getMessage());
	}
?>