<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=º, initial-scale=1.0">
    <title>Panaderia Bali</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <?php require 'partials/header.php'?>

	<div class="cont-form">
		<form action="">
			<h1>Datos del Cliente</h1>
			<input type="text" placeholder="Nombre" class="box-form">
			<input type="text" placeholder="Apellido" class="box-form">
            <input type="text" placeholder="Cédula" class="box-form">
            <h1>Datos del Producto</h1>
            <input type="text" placeholder="Producto a llevar" class="box-form">
            <input type="text" placeholder="Código del producto" class="box-form">
            <input type="text" placeholder="Metodo de pago" class="box-form">
            <input type="submit" value="Generar factura" class="btn-uni">
		</form>
	</div>

	<footer>
		<div class="copi">
			<h4>©COPYRIGHT Panaderia Bali 2022-Todos los derechos reservados</h4>
		</div>
	</footer>
    
</body>
</html>