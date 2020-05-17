<?php

session_start();

$correo = $_SESSION['username'];


if (!isset($_SESSION['username'])) {
    header("location:../php-login/login.php");
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP|Estudiante</title>
    <link rel="stylesheet" href="assets/css/estilosacu.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <style>
        body{
            background-image: url("img/imagenacu.jpg");
        }
    </style>
</head>
<body>
    <main>
    <div class="content-all">
        <header></header>
        <input type="checkbox" id="check-menu">
        <h2><a href="../obser/perfiles/mi_perfil_acu.php?correo=<?php echo $_SESSION['username'];?>">BIENVENIDO <?php echo $correo?></a></h2>
        <label for="check-menu" class="icon-menu">
            <img src="img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../obser/perfiles/mi_perfil_acu.php?correo=<?php echo $_SESSION['username'];?>"> Mi perfil</a></li>
                <li><a href="php/reportes/reporteacu.php"> Tus observaciones</a></li>
                <li><a href="../php-login/logout.php"> Cerrar Sesion</a></li>
            </ul>
        </nav>
    </div>
</main>
<div align="center" class="contenedor">
        <div class="caja" id="caja" align="center">
            <textarea name="" id="obser" cols="30" rows="10" class="observacion" readonly>
            </textarea>
        </div>
        <br>
        <button id="btn" class="boton">Observaciones Recientes</button>
    </div>
    <div class="row">            
        <div class="side">
        <br>
            <div class=side2>
                <h2>Observacion</h2>
                <br>
            <div class="fakeobser" style="height:300px;">
                <form action="php/mensajeest.php" method="post"> 
                    <input type="text" placeholder="Nombre del Docente..." name="docente">
        <br>
        <br>
        <br>
        <h2>Compromiso Familiar</h2>
        <br><br>
            <textarea class="form-control" type="textarea" name="obser" id="form" maxlength="650" rows="10">
            </textarea>
            <br>
            <br>
            <input type="submit" value="Envia" name="respuesta">
        </form>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/anotacion.js"></script>
</body>
</html>