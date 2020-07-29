<?php

session_start();
ob_start();

$doc = $_SESSION['documento'];
$nom = $_SESSION['nombre'];
if (!isset($_SESSION['nombre'],$_SESSION['documento'])) {
    header("location:../php-login/login.html");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/estilosest.css">
    <style>
        body{
            background-image: url("../img/imagenest.jpg");
        }
    </style>
</head>
<body>
    
<?php 
include("../assets/php/conexion.php");

$id = $_GET['id'];

?>


<main>
    <div class="content-all">
    <header></header>
        <input type="checkbox" id="check-menu">
        <h2><a href="../../perfiles/mi_perfil_est.php?correo=<?php echo $_SESSION['documento'];?>"><?php echo $nom;?></a></h2>
        <label for="check-menu" class="icon-menu">
            <img src="../img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../reporteest.php"> Tus Observaciones </a></li>
                <li><a href="../../../../php-login/php/logout.php"> Cerrar Sesion </a></li>
            </ul>
        </nav>
    </div>
</main>

<br>
<br>
<br>

<table class="tabla">
        <thead>
            <th>Hizo la observacion </th>
            <th>Curso</th>
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Observacion</th>
        </thead>
<?php

$con = New Conexion();


$consulta = $con->query("SELECT O.id_obser,O.de,REPLACE(D.nombre, ' ', ' ') profe,U.nombre,U.curso,O.observacion,O.fecha,O.tipo FROM observaciones O,usuarios U, usuarios D 
WHERE O.para=U.documento AND O.de = D.documento AND O.para = '$doc' AND O.id_obser = $id");
while($row = mysqli_fetch_array($consulta)){

?>
    <tbody>
        <tr>
            <td><?php echo $row['profe']?></td>
            <td><?php echo $row['curso']?></td>
            <td><?php echo $row['tipo']?></td>
            <td><?php echo $row['fecha']?></td>
            <td><?php echo $row['observacion']?></td>
        </tr>
    </tbody>
<?php }?>
</table>

<br><br>
<h2 align="center" class="respuesta">Respuesta Estudiante</h2>
<br><br>

<table>
        <thead>
            <th>Respondio la observacion de</th>
            <th>version</th>
            <th>Compromiso</th>
            <th>Fecha</th>
        </thead>
<?php

$con = New Conexion();


$consulta = $con->query(
"SELECT O.id_com,O.id_observacion,O.de,REPLACE(D.nombre, ' ', ' ') profe,U.nombre,O.version,O.compromiso,O.fecha_est
FROM compromiso O,usuarios U, usuarios D 
WHERE O.para=U.documento AND O.para = D.documento AND O.de = '$doc' AND O.id_observacion = $id ");
while($row = mysqli_fetch_array($consulta)){

?>

    <tbody>
        <tr>
            <td><?php echo $row['profe']?></td>
            <td><?php echo $row['version']?></td>
            <td><?php echo $row['compromiso']?></td>
            <td><?php echo $row['fecha_est']?></td>
        </tr>
    </tbody>
<?php }?>
</table>


<br><br>
<h2 align="center" class="respuesta">Respuesta Familiar (Acudiente)</h2>
<br><br>

<table class="tabla">
        <thead>
            <th>Respondio la observacion</th>
            <th>Compromiso Familiar</th>
            <th>Fecha</th>
        </thead>
<?php

$con = New Conexion();

$stmt = $con->query("SELECT * FROM usuarios WHERE documento = $doc");
$fila = $stmt->fetch_object();
$doc_acu = $fila->docu_acu;

$consulta = $con->query("SELECT O.id_com,O.id_observacion,O.de,REPLACE(D.nombre, ' ', '_') profe,
U.nombre,O.compromiso_familiar,O.fecha_acu FROM compromiso O,usuarios U, usuarios D 
WHERE O.para=U.documento AND O.para = D.documento AND O.doc_acudiente = '$doc_acu' AND O.id_observacion = '$id'");
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




<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>