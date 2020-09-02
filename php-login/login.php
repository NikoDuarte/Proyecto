<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Observer Virtual Academic</title>

	<link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<?php
			include("php/validar.php");
			?>

	<div class="container">
		<div class="img">
			<img src="img/ilustracion_ob.svg">
		</div>
		<div class="login-content">
			<form method="POST">                 
				<img src="img/avatar_registro.svg">
				<a href="#" class="h2"><h2 class="title"> BIENVENIDO</h2></a>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
				</div>
			  <div class="div">
							<h5>Documento</h5>
							<input type="number" class="input" name="doc">
					</div>
				 </div>
				<input type="submit" class="btn" value="Iniciar Sesion" name="iniciar">
				<a href="../index.html" class="btn">Vuelve al inicio</a>
			</form>
        </div>
    </div>	
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>
