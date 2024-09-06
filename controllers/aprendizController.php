<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;


    // Importaciones
    require_once(__DIR__ . "/../libs/Database.php");
    require_once(__DIR__ . "/../libs/Modelo.php");
    include_once('../class/Aprendiz.php');
    include_once('../class/Instructor.php');

    $database = new Database();
    $connection = $database->getConnection();


    // Instancia de un nuevo aprendiz
    $aprendiz = new Aprendiz($connection);
    $cerrar = $database->closeConnection(); 
    
    if (isset($_POST["id"])) {

        $id = $_POST["id"];
        $nombre = $_POST["name"];
        $apellido = $_POST["lastName"];
        $edad = $_POST["age"];
        $genero = $_POST["genero"];
        $carrera = $_POST["carrera"];
        $cuenta = $_POST["cuenta"];
        $promedio = $_POST["promedio"];

        $data = [
            "id" => $id,
            "nombre" => $nombre,
            "apellido" => $apellido,
            "edad" => $edad,
            "genero" => $genero,
            "carrera" => $carrera,
            "cuenta" => $cuenta,
            "promedio" => $promedio
        ];

        $aprendiz->update($id, $data);

        header("Location: ../views/lista.php");
    } else {
        $nombre = $_POST    ["name"];
        $apellido = $_POST["lastName"];
        $edad = $_POST["age"];
        $genero = $_POST["genero"];
        $carrera = $_POST["carrera"];
        $cuenta = $_POST["cuenta"];
        $promedio = $_POST["promedio"];

        $data = [
            "nombre" => $nombre,
            "apellido" => $apellido,
            "edad" => $edad,
            "genero" => $genero,
            "carrera" => $carrera,
            "cuenta" => $cuenta,
        ];

        $aprendiz->store($data);
    }