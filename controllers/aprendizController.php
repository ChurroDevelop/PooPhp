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
    // Instancia de un nuevo objeto
    $aprendiz = new Aprendiz($connection);
    $cerrar = $database->closeConnection(); 
    
    if (isset($_POST["name"])) {

        $nombre = $_POST["name"];
        $correo = $_POST["email"];
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
            "promedio" => $promedio
        ];

        $aprendiz->store($data);
    }

// $phpmailer = new PHPMailer();
// $phpmailer->isSMTP();
// $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
// $phpmailer->SMTPAuth = true;
// $phpmailer->Port = 2525;
// $phpmailer->Username = 'fac9c78d99b6a9';
// $phpmailer->Password = 'ea4ea16d3879ff';