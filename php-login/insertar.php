<?php

insertado($_POST['nom'],$_POST['ape'],$_POST['gra'],$_POST['cur'], $_POST['ins'], $_POST['sed'], $_POST['jor'], $_POST['doc'], 
$_POST['cor'], $_POST['psw'], $_POST['rol'], $_POST['correo_acudiente']);


function insertado($nombre,$apellido,$grado,$curso,$institucion,$sede,$jornada,$documento,$correo,$password,$rol,$correo_acudiente)
{

include("conexion.php");  
 $con = New Conexion();

$sentencia="insert into usuarios (nombre,apellido,grado,curso,institucion,sede,jornada,documento,
correo,password,rol,correo_acudiente) values('".$nombre."','".$apellido."','".$grado."','".$curso."','".$institucion."',
'".$sede."','".$jornada."','".$documento."','".$correo."','".$password."','".$rol."','".$correo_acudiente."')"; 


$resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));
}

?>

<script type="text/javascript">

alert("Se inserto los registro correctamente");
window.location.href=' login.php ';
</script>


<?php
session_start();
include "conexion.php";

ini_set('error_reporting', 0);

?>
