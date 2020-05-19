<?php

insertado($_POST['nom_ape'],$_POST['inst'],$_POST['sede'],$_POST['grado'],
$_POST['curso'],$_POST['doc'],$_POST['pass']);

function insertado($nom_ape,$inst,$sede,
$grado,$curso,$doc,$pass){

include("conexion.php");  
$con = New Conexion();

$sentencia="insert into usuarios (nombre_apellido,institucion,sede,grado,curso,documento,contraseña,rol)
values('".$nom_ape."','".$inst."','".$sede."','".$grado."','".$curso."',
'".$doc."','".$pass."','".$rol='estudiante'."')"; 

$resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));

}
?>

<script type="text/javascript">

alert("Se inserto los registro correctamente");
window.location.href=' ../../php-login/login.html ';
</script>

