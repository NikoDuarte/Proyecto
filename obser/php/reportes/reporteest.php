<?php

session_start();
ob_start();

$doc = $_SESSION['documento'];
$_SESSION['nombre'];
if (!isset($_SESSION['nombre'],$_SESSION['documento'])) {
    header("location:../php-login/login.html");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus Observaciones</title>
    <link rel="stylesheet" href="assets/css/estilosest.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <style>
        body{
            background-image: url("img/imagenest.jpg");
        }
    </style>
</head>
<body>
<main>
    <div class="content-all">
        <header></header>
        <input type="checkbox" id="check-menu">
        <h2><a href="../../perfiles/mi_perfil_est.php?correo=<?php echo $_SESSION['documento'];?>"><?php echo $_SESSION['nombre']?></a></h2>
        <label for="check-menu" class="icon-menu">
            <img src="img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../../app_estudiante.php"> Inicio</a></li>
                <li><a href="../../perfiles/mi_perfil_est.php?correo=<?php echo $_SESSION['documento'];?>"> Mi perfil</a></li>
                <li><a href="../../../php-login/php/logout.php"> Cerrar Sesion</a></li>
            </ul>
        </nav>
    </div>
<div id="main-container">
    <table>
        <thead>
            <th>Id observacion</th>
            <th>Quien hizo la observacion</th>
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Observacion</th>
        </thead>
<?php
include("../../php/conexion.php");
$con = New Conexion();

$consulta = $con->query("SELECT O.id_mensaje,O.de,U.nombre,U.curso,O.observacion,O.fecha,O.tipo 
FROM observaciones O,usuarios U WHERE O.para=U.documento AND O.para = '$doc'");
while($row = mysqli_fetch_array($consulta)){

?>

    <tbody>
        <tr>
            <td><?php echo "<a href=../../app_estudiante.php?id=".$row['id_mensaje']."&".'nombre='. $row['de'].">".$row['id_mensaje']?></td>
            <td><?php echo $row['de']?></td>
            <td><?php echo $row['tipo']?></td>
            <td><?php echo $row['fecha']?></td>
            <td><?php echo $row['observacion']?></td>
        </tr>
    </tbody>
<?php }?>
</table>

<br><br><br><br>
<h2 align="center" class="respuesta">Respuesta</h2>
<div id="main-container">
    <table>
        <thead>
            <th>Respondio la observacion</th>
            <th>version</th>
            <th>Compromiso</th>
            <th>Fecha</th>
        </thead>
<?php

$con = New Conexion();

$consulta = $con->query("SELECT * FROM respuesta WHERE de = '".$_SESSION['documento']."'");
while($row = mysqli_fetch_array($consulta)){

?>

    <tbody>
        <tr>
            <td><?php echo $row['de']?></td>
            <td><?php echo $row['version']?></td>
            <td><?php echo $row['compromiso']?></td>
            <td><?php echo $row['fecha']?></td>
        </tr>
    </tbody>
<?php }?>
</table>


</main>
</body>
</html>