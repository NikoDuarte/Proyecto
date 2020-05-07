<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login Environmet</title>
	<link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<?php require 'partials/header.php' ?>

<span>o <a href="signup.php">Crea Sesion</a><br><a href="#">Olvide mi Contraseña</a></span>
    <h1>Iniciar Sesion</h1>
    <!--formulario-->
   <form action="validar.php" method="post">
    <!--formulario sencillo-->
   	<input type="text" name="correo" placeholder="Ingrese Su Correo">
     <input type="text" name="institucion" placeholder="Ingrese La Institucion">
     <input type="text" name="sede" placeholder="Ingrese La Sede">
    <input type="password" name="password" placeholder="Ingrese Su Contraseña">
    <!--quien eres-->
    <h2>¿Que Eres En La I.E?</h2>
    <input type="radio" id="est" name="rol" value="est">
      <label for="estudiante">Estudiante</label>
    <input type="radio" id="est" name="rol" value="acu">
      <label for="acudiente">Acudiente</label>
    <input type="radio" id="est" name="rol" value="doc">
      <label for="docente">Docente</label>
      <br>
      <br>
      <br>
      <!--envio-->
    <input type="submit" value="enviar">
   </form>


</body>
</html>