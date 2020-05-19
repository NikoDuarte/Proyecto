<?php

insertado($_POST['nom_ape'],$_POST['inst'],$_POST['doc'],$_POST['pass']);

function insertado($nom_ape,$inst,$doc,$pass){

include("conexion.php");  
$con = New Conexion();

$sentencia="insert into acudiente (nombre,institucion,documento,contraseña,rol)
values('".$nom_ape."','".$inst."','".$doc."','".$pass."','".$rol='acudiente'."')"; 

$resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));

}
?>

<script type="text/javascript">

alert("Se inserto los registro correctamente");
window.location.href=' ../../php-login/login.html ';
</script>
