<?php 
    // Importaciones
    require_once(__DIR__ . "/../libs/Database.php");
    require_once(__DIR__ . "/../libs/Modelo.php");
    include_once('../class/Aprendiz.php');
    include_once('../class/Instructor.php');

    $database = new Database();
    $connection = $database->getConnection();

    $aprendiz = new Aprendiz($connection);

    $id = $_GET["idUser"];

    if (isset($id)) {
        $aprendiz->destroy($id);
        header("Location: lista.php");
    }