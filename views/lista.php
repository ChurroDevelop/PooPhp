<?php

    // Importaciones
    require_once(__DIR__ . "/../libs/Database.php");
    require_once(__DIR__ . "/../libs/Modelo.php");
    include_once('../class/Aprendiz.php');
    include_once('../class/Instructor.php');


    $database = new Database();
    $connection = $database->getConnection();
    require_once("../class/Aprendiz.php");
    $objeto = new Aprendiz($connection);
    $users = $objeto->getAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de aprendices</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <main>
        <section>
            <article>
                <div>
                    <h1>
                        <a href="../index.php">Registrar un nuevo usuario</a>
                    </h1>
                </div>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Genero</th>
                            <th>Carrera</th>
                            <th>Cuenta</th>
                            <th>Promedio</th>
                            <th>Sueldo</th>
                            <th>Horario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            foreach ($users as $user => $value) {
                        ?>
                        <tr>
                            <td><?php  print_r($value["id"]) ?></td>
                            <td><?php  print_r($value["nombre"]) ?></td>
                            <td><?php  print_r($value["apellido"]) ?></td>
                            <td><?php  print_r($value["edad"]) ?></td>
                            <td><?php  print_r($value["genero"]) ?></td>
                            <td><?php  print_r($value["carrera"]) ?></td>
                            <td><?php  print_r($value["cuenta"] ? $value["cuenta"] : "...") ?></td>
                            <td><?php  print_r($value["promedio"] ? $value["promedio"] : "...") ?></td>
                            <td><?php  print_r($value["sueldo"] ? $value["sueldo"] : "...") ?></td>
                            <td><?php  print_r($value["horario"] ? $value["horario"] : "...") ?></td>
                            <td>
                                <a href="actualizar.php?idUser=<?php echo $value["id"] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="eliminar.php?idUser=<?php echo $value["id"] ?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </article>
        </section>
    </main>

</body>
</html>