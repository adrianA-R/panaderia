<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=º, initial-scale=1.0">
    <title>Panaderia Bali</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
</head>
<body>
    <?php require 'partials/header.php'?>

	<div class="cont-form">
        
		<form action="">
			<h1>Agregar Cliente</h1>
			<input type="text" placeholder="Nombre" class="box-form">
			<input type="text" placeholder="Apellido" class="box-form">
            <input type="text" placeholder="Cédula" class="box-form">
			<input type="submit" value="Agregar" class="btn-uni">
		</form>
	</div>

    <hr color="#8e3200">    

    <div class="cont-form">
		<form action="">
			<h1>Eliminar Cliente</h1>
			<input type="number" placeholder="Cédula" class="box-form">
			<textarea name="motivo" id="motivo" cols="30" rows="10" class="box-form">Motivo</textarea>
			<input type="submit" value="Eliminar" class="btn-uni">
		</form>
	</div>
	<footer>
		<div class="copi">
			<h4>©COPYRIGHT Panaderia Bali 2022-Todos los derechos reservados</h4>
		</div>
	</footer>
    
</body>
</html>