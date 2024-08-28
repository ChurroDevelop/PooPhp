<?php
	// Incluir la clase al index
	require_once(__DIR__ . "/libs/Database.php");
	require_once(__DIR__ . "/libs/Modelo.php");

	include_once('class/Aprendiz.php');
	include_once('class/Instructor.php');

	$database = new Database();
	$connection = $database->getConnection();
	// Instancia de un nuevo objeto
	$aprendiz = new Aprendiz($connection);
	// $instructor = new Instructor();
	// $cerrar = $database->closeConnection(); 
	
	// Metodo para asignar un nuevo nombre y apellido
	// $aprendiz->setNombre("Jhon");
	// $aprendiz->setApellido("Carreño");
	
	// Imprimir el metodo en el index
	$user = $aprendiz->getById(3);

	print_r($user);

	// $data = $aprendiz->getAll();
	
	// foreach ($data as $key => $value) {
	// 	echo "<br>";
	// 	var_dump($value);
	// }