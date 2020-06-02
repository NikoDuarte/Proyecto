<?php

session_start();
ob_start();

$doc = $_SESSION['documento'];
$nom = $_SESSION['username'];
if (!isset($_SESSION['username'],$_SESSION['documento'])) {
    header("location:../php-login/login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus Observaciones</title>
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
        <h2><a href="../../perfiles/mi_perfil_acu.php?correo=<?php echo $_SESSION['documento'];?>">Bienvenido <?php echo $nom?></a></h2>
        <label for="check-menu" class="icon-menu">
            <img src="img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../../app_acudiente.php"> Inicio</a></li>
                <li><a href="../../perfiles/mi_perfil_acu.php?correo=<?php echo $_SESSION['documento'];?>"> Mi perfil</a></li>
                <li><a href="../../../php-login/php/logout.php"> Cerrar Sesion</a></li>
            </ul>
        </nav>
    </div>
<div id="main-container">
    <table>
        <thead>
            <th>Tu(s) hijos son:</th>
            <th>Institucion</th>
            <th>Curso</th>
            <th>Documento</th>
        </thead>
<?php
include("../../php/conexion.php");
$con = New Conexion();

$consulta = $con->query("SELECT U.* FROM usuarios U, RELACION_ACU_EST r 
WHERE u.documento=r.documento_estudiante AND r.documento_acudiente='".$_SESSION['documento']."'");
while($row = mysqli_fetch_array($consulta)){

?>

    <tbody>
        <tr>
            <td><?php echo $row['nombre']?></td>
            <td><?php echo $row['institucion']?></td>
            <td><?php echo $row['curso']?></td>
            <td><?php echo $row['documento']?></td>
        </tr>
    </tbody>
<?php }?>
</table>
<br><br><br><br>
<h2 align="center" class="respuesta">Observaciones Hechas</h2>

<div id="main-container">
    <table>
        <thead>
            <th>Quien hizo la observacion</th>
            <th>Para</th>
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Observacion</th>
        </thead>
<?php
//include("../../php/conexion.php");
$con = New Conexion();

$consulta = $con->query("SELECT U.* FROM observaciones U, RELACION_ACU_EST r 
WHERE u.para=r.documento_estudiante AND r.documento_acudiente='".$_SESSION['documento']."'");
while($row = mysqli_fetch_array($consulta)){

?>

    <tbody>
        <tr>
            <td><?php echo $row['de']?></td>
            <td><?php echo $row['para']?></td>
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
            <th>Compromiso</th>
            <th>Fecha</th>
        </thead>
<?php
//include("../../php/conexion.php");
$con = New Conexion();

$consulta = $con->query("SELECT * FROM respuesta WHERE de = '".$_SESSION['username']."'");
while($row = mysqli_fetch_array($consulta)){

?>

    <tbody>
        <tr>
            <td><?php echo $row['de']?></td>
            <td><?php echo $row['compromiso']?></td>
            <td><?php echo $row['fecha']?></td>
        </tr>
    </tbody>
<?php }?>
</table>


</main>
</body>
</html>