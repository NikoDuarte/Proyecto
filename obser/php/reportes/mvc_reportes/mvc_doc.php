<?php

session_start();
ob_start();

$doc = $_SESSION['documento'];
$nom = $_SESSION['user'];
if (!isset($_SESSION['user'],$_SESSION['documento'])) {
    header("location:../php-login/login.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de la observacion</title>
    <link rel="stylesheet" href="../assets/css/estilosdoc.css">
</head>
<body>
    
<?php 
include("../assets/php/conexion.php");

$id = $_GET['id'];

?>


<main>
    <div class="content-all">
        <header></header>
        <input type="checkbox" id="check">
        <h2><a href="../../perfiles/mi_perfil_doc.php?correo=<?php echo $_SESSION['documento'];?>"><?php echo $nom;?></a></h2>
        <label for="check" class="icon-menu">
            <img src="../img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../reportedoc.php"><i class="fas fa-book"></i> Tus Observaciones </a></li>
                <li><a href="../../../../php-login/php/logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion </a></li>
            </ul>
        </nav>
    </div>
</main>

<br>
<br>

<div align="center">
    <div class="contenedor">
    <h2 class="respuesta">Observacion</h2>
</div>

</div>

<br><br>

<table class="tabla">
        <thead>
            <th>Hiciste la observacion a</th>
            <th>Curso</th>
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Observacion</th>
        </thead>
<?php

$con = New Conexion();


$consulta = $con->query("SELECT U.nombre,U.curso,O.id_obser,O.observacion,O.curso,O.fecha,O.tipo 
FROM observaciones O,usuarios U WHERE O.para=U.documento AND O.de = '$doc' AND O.id_obser = $id");
while($row = mysqli_fetch_array($consulta)){

?>
    <tbody>
        <tr>
            <td><?php echo $row['nombre']?></td>
            <td><?php echo $row['curso']?></td>
            <td><?php echo $row['tipo']?></td>
            <td><?php echo $row['fecha']?></td>
            <td><?php echo $row['observacion']?></td>
        </tr>
    </tbody>
<?php }?>
</table>

<br><br>
<div align="center">
    <div class="contenedor">
<h2 class="respuesta">Respuesta Estudiante</h2>
</div>

</div>
<br><br>
<table class="tabla">
        <thead>
            <th>Respondio la observacion</th>
            <th>Curso</th>
            <th>Version</th>
            <th>Compromiso</th>
            <th>Fecha</th>
        </thead>
<?php

$con = New Conexion();


$consulta = $con->query("SELECT U.nombre,U.curso,O.id_observacion,O.version,O.compromiso,O.fecha_est 
FROM compromiso O,usuarios U 
WHERE O.de=U.documento AND O.para = '$doc' AND O.id_observacion = '$id'");
while($row = mysqli_fetch_array($consulta)){

?>
    <tbody>
        <tr>
            <td><?php echo $row['nombre']?></td>
            <td><?php echo $row['curso']?></td>
            <td><?php echo $row['version']?></td>
            <td><?php echo $row['compromiso']?></td>
            <td><?php echo $row['fecha_est']?></td>
        </tr>
    </tbody>
<?php }?>
</table>


<br><br>
<div align="center">
<div class="contenedor" align="center">
    <h2 class="respuesta">Respuesta Familiar (Acudiente)</h2>
</div>

</div>

<br><br>

<table class="tabla">
        <thead>
            <th>Respondio la observacion</th>
            <th>Compromiso Familiar</th>
            <th>Fecha</th>
        </thead>
<?php

$con = New Conexion();


$consulta = $con->query("SELECT U.nombre,U.curso,O.id_observacion,O.compromiso_familiar,O.fecha_acu 
FROM compromiso O,usuarios U 
WHERE O.doc_acudiente=U.documento AND O.para = '$doc' AND O.id_observacion = '$id'");
while($row = mysqli_fetch_array($consulta)){

?>
    <tbody>
        <tr>
            <td><?php echo $row['nombre']?></td>
            <td><?php echo $row['compromiso_familiar']?></td>
            <td><?php echo $row['fecha_acu']?></td>
        </tr>
    </tbody>
<?php }?>
</table>



<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>