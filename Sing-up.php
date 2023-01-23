<?php
	require 'database.php';

	$message = '';

	if(!empty($_POST['nombre']) && !empty($_POST['cedula']) && !empty($_POST['password'])){
		$sql = "INSERT INTO administrador (nombre, cedula, password) VALUES (:nombre, :cedula, :password)";
		$stmt = $conn -> prepare($sql);
		$stmt->bindParam(':nombre', $_POST['nombre']);
		$stmt->bindParam(':cedula', $_POST['cedula']); 
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$stmt->bindParam(':password', $password);

		if ($stmt->execute()) {
			$message = 'Usuario registrado correctamente';
		} else {
			$message = 'Lo sentimos ocurrio un error, intentelo de nuevo mas tarde';
		}
	} 
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Panaderia Bali</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
	<?php require 'partials/header.php'?>
	
	<?php if(!empty($message)): ?>
      <h2 class="alert"> <?= $message ?></h2>
    <?php endif; ?>

	<div class="cont-struct">
		<div class="cont-form-sing-up">
			<form action="Sing-up.php" method="POST" id="signup-form">
				<h1>Registrate</h1>
				<input type="text" name="nombre" placeholder="Nombre" class="box-form-sing-up">
				<input type="text" placeholder="Apellido" class="box-form-sing-up">
				<input type="number" name="cedula" placeholder="Cedula de Identidad" class="box-form-sing-up">
				<input type="password" name="password" placeholder="Password" class="box-form-sing-up">
				<input type="submit" value="Enviar" class="btn-uni">
			</form>
		</div>
		<div class="cont-form">
			<form action="inicio-session.php" method="POST">
				<h1>Iniciar Sesión</h1>
				<input type="number" name="cedula" placeholder="Cedula de Identidad" class="box-form">
				<input type="password" name="password" placeholder="Password" class="box-form">
				<input type="submit" value="Iniciar Sesión" class="btn-uni">
			</form>
		</div>
	</div>

	<footer>
		<div class="copi">
			<h4>©COPYRIGHT Panaderia Bali 2022-Todos los derechos reservados</h4>
		</div>
	</footer>
</body>
</html>