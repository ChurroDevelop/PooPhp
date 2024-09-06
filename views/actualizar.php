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

    $path = dirname($_SERVER['SCRIPT_NAME']);
    echo "<br>";
    $url = $_SERVER['REQUEST_URI'];

    // $subString = 

    // echo $url . $path;

    if (isset($id)) {
        $user = $aprendiz->getById($id);

        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <main>
                <section>
                    <article>
                        <div>
                            <form action="../controllers/aprendizController.php" method="POST">
                                <div>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                </div>
                                <div>
                                    <label for="name">Nombre</label>
                                    <input type="text" name="name" value="<?php echo $user["nombre"] ?>">
                                </div>
                                <div>
                                    <label for="lastName">Apellido</label>
                                    <input type="text" name="lastName" value="<?php  echo $user["apellido"] ?>">
                                </div>
                                <div>
                                    <label for="age">Edad</label>
                                    <input type="text" name="age" value="<?php  echo $user["edad"] ?>">
                                </div>
                                <div>
                                    <label for="genero">Genero</label>
                                    <input type="text" name="genero" value="<?php  echo $user["genero"] ?>">
                                </div>
                                <div>
                                    <label for="carrera">Carrera</label>
                                    <input type="text" name="carrera" value="<?php  echo $user["carrera"] ?>">
                                </div>
                                <div>
                                    <label for="cuenta">Cuenta</label>
                                    <input type="text" name="cuenta" value="<?php  echo $user["cuenta"] ?>">
                                </div>
                                <div>
                                    <label for="promedio">Promedio</label>
                                    <input type="text" name="promedio" value="<?php  echo $user["promedio"] ?>">
                                </div>
                                <div>
                                    <button type="submit">Actualizar datos</button>
                                </div>
                            </form>
                        </div>
                    </article>
                </section>
            </main>
        </body>
        </html>
    <?php   
        }
        else {
            echo "Not found 404";
        }
    ?>