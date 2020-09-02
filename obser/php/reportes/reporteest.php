<?php

session_start();
ob_start();

$doc = $_SESSION['documento'];
$_SESSION['user'];
if (!isset($_SESSION['user'],$_SESSION['documento'])) {
    header("location:../php-login/login.php");
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
</head>
<body>
<main>
    <div class="content-all">
        <header></header>
        <input type="checkbox" id="check-menu">
        <h2><a href="../../perfiles/mi_perfil_est.php?correo=<?php echo $_SESSION['documento'];?>"><?php echo $_SESSION['user']?></a></h2>
        <label for="check-menu" class="icon-menu">
            <img src="img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../../app_estudiante.php"><i class="fas fa-home"></i>  Inicio</a></li>
                <li><a href="../../perfiles/mi_perfil_est.php?correo=<?php echo $_SESSION['documento'];?>"><i class="fas fa-user-cog"></i> Mi perfil</a></li>
                <li><a href="../../../php-login/php/logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion</a></li>
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

$consulta = $con->query(
"SELECT O.id_obser,O.de,REPLACE(D.nombre, ' ', '_') profe,U.nombre,U.curso,O.observacion,O.fecha,O.tipo 
FROM observaciones O,usuarios U, usuarios D
WHERE O.para=U.documento AND O.de = D.documento AND O.de = '$doc' O.para=D.documento
AND O.id_obser NOT IN (SELECT c.id_observacion FROM compromiso c where c.de=O.para)");

/*$consulta = $con->query("SELECT O.id_obser,O.de,REPLACE(D.nombre, ' ', '_') profe,U.nombre,U.curso,O.observacion,O.fecha,O.tipo FROM observaciones O,usuarios U, usuarios D 
WHERE O.para=U.documento AND O.de = D.documento AND O.para = '$doc'");*/
while($row = mysqli_fetch_array($consulta)){

?>

    <tbody>
        <tr>
            <td><?php echo "<a href=../../app_estudiante.php?id=".$row['id_obser']."&".'documento='. $row['de']."&".'nombre='. $row['profe'].">".$row['id_obser']?></td>
            <td><?php echo $row['profe']?></td>
            <td><?php echo $row['tipo']?></td>
            <td><?php echo $row['fecha']?></td>
            <td><?php echo $row['observacion']?></td>
        </tr>
    </a>    
    </tbody>
<?php }?>
</table>

<br><br><br><br>
<h2 align="center" class="respuesta">Respuesta</h2>
<div id="main-container">
    <table>
        <thead>
        <th>Id Observacion</th>
            <th>Respondio la observacion de</th>
            <th>version</th>
            <th>Compromiso</th>
            <th>Fecha</th>
        </thead>
<?php

$con = New Conexion();


$consulta = $con->query(
"SELECT O.id_com,O.id_observacion,O.de,REPLACE(D.nombre, ' ', '_') profe,U.nombre,O.version,O.compromiso,O.fecha_est
FROM compromiso O,usuarios U, usuarios D 
WHERE O.para=U.documento AND O.para = D.documento AND O.de = '$doc'");
while($row = mysqli_fetch_array($consulta)){

?>

    <tbody>
        <tr>
        <td><?php echo "<a href=mvc_reportes/mvc_est.php?id=".$row['id_observacion'].">".$row['id_observacion']?></td>
            <td><?php echo $row['profe']?></td>
            <td><?php echo $row['version']?></td>
            <td><?php echo $row['compromiso']?></td>
            <td><?php echo $row['fecha_est']?></td>
            
        </tr>
        
    </tbody>
<?php }?>
</table>


</main>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>
</html>