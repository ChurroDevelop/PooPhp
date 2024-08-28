<?php
	// Incluir la clase al index
	include_once('class/Aprendiz.php');

	// Instancia de un nuevo objeto
	$per = new Aprendiz();

	// Metodo para asignar un nuevo nombre y apellido
	$per->setNombre("Jhon");
	$per->setApellido("Carreño");

	// Imprimir el metodo en el index
	echo $per->saludar();