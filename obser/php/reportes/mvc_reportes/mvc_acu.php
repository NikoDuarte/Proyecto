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
    <title>Reporte de observacion</title>
    <link rel="stylesheet" href="../assets/css/estilosacu.css">
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
        <h2><a href="../../perfiles/mi_perfil_acu.php?correo=<?php echo $_SESSION['documento'];?>"><?php echo $nom;?></a></h2>
        <label for="check-menu" class="icon-menu">
            <img src="../img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../reporteacu.php"><i class="fas fa-book"></i> Tus Observaciones </a></li>
                <li><a href="../../../../php-login/php/logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion </a></li>
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
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Observacion</th>
        </thead>
<?php

$con = New Conexion();


$consulta = $con->query("SELECT O.id_obser,O.de,REPLACE(D.nombre, ' ', ' ') profe,U.nombre,U.curso,O.observacion,O.fecha,O.tipo 
FROM observaciones O 
INNER JOIN usuarios U ON O.para=U.documento 
INNER JOIN usuarios D ON O.de=D.documento 
INNER JOIN usuarios r ON U.documento=r.documento 
INNER JOIN usuarios A ON A.documento=r.docu_acu 
WHERE r.docu_acu='$doc' AND O.id_obser = $id");
while($row = mysqli_fetch_array($consulta)){

?>
    <tbody>
        <tr>
            <td><?php echo $row['profe']?></td>
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


$consulta = $con->query(
"SELECT O.id_com,O.id_observacion,O.de,O.para,REPLACE(D.nombre, ' ', '_') profe,
U.nombre,O.compromiso,O.version,O.fecha_est,U.curso 
FROM compromiso O,usuarios U, usuarios D 
WHERE O.de=U.documento 
AND O.de = D.documento 
AND O.doc_acudiente = '$doc'
AND O.id_observacion = '$id'");

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


$consulta = $con->query("SELECT O.id_com,O.id_observacion,O.de,REPLACE(D.nombre, ' ', ' ') profe,
U.nombre,O.compromiso_familiar,O.fecha_acu FROM compromiso O,usuarios U, usuarios D 
WHERE O.para=U.documento AND O.doc_acudiente = D.documento AND O.doc_acudiente = '$doc' AND O.id_observacion = '$id'");
while($row = mysqli_fetch_array($consulta)){

?>
    <tbody>
        <tr>
            <td><?php echo $row['profe']?></td>
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