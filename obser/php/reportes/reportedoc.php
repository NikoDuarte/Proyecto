<?php

session_start();

$correo = $_SESSION['username'];


if (!isset($_SESSION['username'])) {
    header("location:../../php-login/login.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus Observaciones</title>
    <link rel="stylesheet" href="assets/css/estilosdoc.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <style>
        body{
            background-image: url("img/imagendoc.jpg");
        }
    </style>
</head>
<body>
<main>
    <div class="content-all">
        <header></header>
        <input type="checkbox" id="check-menu">
        <h2><a href="../../perfiles/mi_perfil_doc.php?correo=<?php echo $_SESSION['username'];?>">BIENVENIDO <?php echo $correo?></a></h2>
        <label for="check-menu" class="icon-menu">
            <img src="img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../../../obser/app_docente.php"> Inicio</a></li>
                <li><a href="../../perfiles/mi_perfil_doc.php"> Mi perfil</a></li>
                <li><a href="../php-login/logout.php"> Cerrar Sesion</a></li>
            </ul>
        </nav>
    </div>
<div id="main-container">
    <table>
        <thead>
            <th>Hiciste la observacion a</th>
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Observacion</th>
        </thead>
<?php
include("../../php/conexion.php");
$con = New Conexion();

$consulta = $con->query("SELECT * FROM observaciones WHERE de = '".$_SESSION['username']."'");
while($row = mysqli_fetch_array($consulta)){

?>
    <tbody>
        <tr>
            <td><?php echo $row['para']?></td>
            <td><?php echo $row['tipo']?></td>
            <td><?php echo $row['fecha']?></td>
            <td><?php echo $row['observacion']?></td>
        </tr>
    </tbody>
      <?php }?>
</table>
<br>
<br>
<br>
<br>
<br><br>
<h2 align="center" class="respuesta">Respuestas</h2>
<div id="main-container">
    <table>
        <thead>
            <th>Respondio la observacion</th>
            <th>Version</th>
            <th>Compromiso</th>
            <th>Fecha</th>
        </thead>
<?php
//include("../../php/conexion.php");
$con = New Conexion();

$consulta = $con->query("SELECT * FROM respuesta WHERE para = '".$_SESSION['username']."'");
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