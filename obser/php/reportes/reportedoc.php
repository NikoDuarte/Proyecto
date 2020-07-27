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
    <link rel="stylesheet" href="assets/css/estilosdoc.css">
    <style>
        body{
            background-image: url("img/imagendoc.jpg");
        }
    </style>
</head>
<body>
    
<?php 
include("assets/php/conexion.php");


?>

<div class="ventana_curso" id="curso">
        <div id="cerrar"> 
            <a href="javascript:cerrar2()"><img src="img/close.png" alt=""></a>
        </div>
        Escoge el Curso
        <br>
        <br>
		<form  method="get">
                <select class="curso" name="curso">
                    <option> SELECCIONE EL CURSO</option>
            <?php   
			
            $con = New Conexion();
            $consulta = $con->query("SELECT * FROM usuarios WHERE documento = '$doc'") ;
            $fila = $consulta->fetch_object();
			$sede = $fila->sede;
			$resultados = $con->query("SELECT DISTINCT curso FROM usuarios WHERE sede = '$sede'");
			while ($consulta = mysqli_fetch_array($resultados)) {
			echo "<option value=".$consulta ['curso'].">".$consulta ['curso']."</option>";
				}
			?>
                </select>
        <br>
        <br>
		    <input name="sede" value="<?php echo $sede ?>" type="text" readonly> 
        <br>
		<input class="boton" type="submit" value="Continuar">
		</form> 
    </div>


<main>
    <div class="content-all">
        <header></header>
        <input type="checkbox" id="check">
        <h2><a href="../../perfiles/mi_perfil_doc.php?correo=<?php echo $_SESSION['documento'];?>"><?php echo $nom;?></a></h2>
        <label for="check" class="icon-menu">
            <img src="img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../../app_docente.php"> Inicio </a></li>
                <li><a href="../../perfiles/mi_perfil_doc.php?correo=<?php echo $_SESSION['documento'];?>"> Mi perfil </a></li>
                <li><a href="../../../php-login/php/logout.php"> Cerrar Sesion </a></li>
            </ul>
        </nav>
    </div>
</main>

<table class="nav">
    <tr>
        <td>
        <section class="img">
<div align="center">
<div class="contenedor-menu">
		<a href="#" class="btn-menu">Menu</a>
		<ul class="submenu">
			<li><a href="#">Curso</a>
				<ul>
					<li><a href="javascript:Curso()" id="curso">Curso</a></li>
				</ul>
			</li>
		</ul>
</div>
</div>
</section>

        </td>
    </tr>
</table>

<br>
<br>
<br>
<br>
<br>

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

if(!isset($_GET["curso"])){

}else{

    $curso = $_GET['curso'];


$consulta = $con->query("SELECT U.nombre,U.curso,O.observacion,O.curso,O.fecha,O.tipo 
FROM observaciones O,usuarios U WHERE O.para=U.documento AND O.de = '$doc' AND O.curso = $curso");
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
<?php }}?>
</table>

<br><br>
<h2 align="center" class="respuesta">Respuesta</h2>
<br><br>


<table class="tabla">
        <thead>
            <th>Respondio la observacion</th>
            <th>Curso</th>
            <th>fecha</th>
            <th>Version</th>
            <th>Compromiso</th>
        </thead>
<?php
$con = New Conexion();

if(!isset($_GET["curso"])){

}else{

    $curso = $_GET['curso'];


$consulta = $con->query(
    "SELECT U.nombre,U.curso,O.version,O.compromiso,O.fecha 
    FROM compromiso O,usuarios U 
    WHERE O.de=U.documento AND O.para = '$doc' AND U.curso = '$curso'");
while($row = mysqli_fetch_array($consulta)){

?>
    <tbody>
        <tr>
            <td><?php echo $row['nombre']?></td>
            <td><?php echo $row['curso']?></td>
            <td><?php echo $row['fecha']?></td>
            <td><?php echo $row['version']?></td>
            <td><?php echo $row['compromiso']?></td>
        </tr>
    </tbody>
<?php }}?>
</table>






<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
    function Curso() {
    document.getElementById("curso")
    .style.display="block";
    }

    function cerrar2() {
        document.getElementById("curso")
        .style.display="none";
    }

    function continuar2() {
        document.getElementById("curso")
        .style.display="none";
    }
    

    </script>



</body>
</html>