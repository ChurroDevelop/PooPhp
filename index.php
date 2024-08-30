<?php 
	require_once("services/mail.php");

	if (isset($_POST["email"])) {
		$email = $_POST["email"];
		$asunto = $_POST["asunto"];
		$body = $_POST["cuerpo"];
		$mensaje = $_POST["mensaje"];
		$enviar = new Mail($email, $asunto, $mensaje, $body);
		$msg = $enviar->enviarMail();
		echo $msg;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
</head>
<body>
	<main>
		<section>
			<article>
				<div>
					<h1>
						Formulario para crear un usuario
					</h1>
				</div>
				<div>
					<form action="controllers/aprendizController.php" method="POST">
						<div>
							<label for="name">Nombre</label>
							<input type="text" name="name">
						</div>
						<div>
							<label for="lastName">Apellido</label>
							<input type="text" name="lastName">
						</div>
						<div>
							<label for="age">Edad</label>
							<input type="text" name="age">
						</div>
						<div>
							<label for="genero">Genero</label>
							<input type="text" name="genero">
						</div>
						<div>
							<label for="carrera">Carrera</label>
							<input type="text" name="carrera">
						</div>
						<div>
							<label for="cuenta">Cuenta</label>
							<input type="text" name="cuenta">
						</div>
						<div>
							<label for="promedio">Promedio</label>
							<input type="text" name="promedio">
						</div>
						<div>
							<button type="submit">Evnviar datos</button>
						</div>
					</form>
				</div>
			</article>
			<hr>
			<article>
				<div>
					<h1>Formulario para enviar correos</h1>
				</div>
				<div>
					<form action="index.php" method="POST">
						<div>
							<label for="corre">Correo electronico</label>
							<input type="text" name="email">
						</div>
						<div>
							<label for="asunto">Asunto del correo</label>
							<input type="text" name="asunto">
						</div>
						<div>
							<label for="mensaje">Mensaje del correo</label>
							<input type="text" name="mensaje">
						</div>
						<div>
							<label for="cuerpo">Cuerpo del correo</label>
							<textarea name="cuerpo" id="body"></textarea>
						</div>
						<div>
							<button type="submit">Enviar correo</button>
						</div>
					</form>
				</div>
			</article>
		</section>
	</main>
</body>
</html>