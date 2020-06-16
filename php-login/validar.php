<?php
    session_start();
    ob_start();

$correo=$_POST['correo'];
$password=$_POST['password'];
$institucion=$_POST['institucion'];
$sede=$_POST['sede'];
$rol=$_POST['rol'];


$existe=valida($correo);

if ($existe>0){

$arreglo =consulta($correo,$password,$institucion,$sede,$rol);


switch ($arreglo[1]) {
    case "est":
        $_SESSION['username'] = $correo;
        header("location:../obser/app_estudiante.php");
        break;
    case "doc":
        $_SESSION['username'] = $correo;
        header("location:../obser/app_docente.php");
        break;
    case "acu":
        $_SESSION['username'] = $correo;
        header("location:../obser/app_acudiente.php");
        break;
}

echo "<br><h1>".$arreglo[0]."</h1>";
echo "<br><h2>".$arreglo[1]."</h2>";
echo "<br><h3>".$arreglo[2]."</h3>";
}else {
	echo "<br><h1>el usuario no existe<h1>";
}



function valida($correo)
{

include("conexion.php");  
 $con = New Conexion();
 $consulta="SELECT correo FROM usuarios WHERE correo='$correo' ";

$resultado=$con->query($consulta) or die("Error de datos".mysqli_error($con));

$numfilas = $resultado->num_rows;
return $numfilas;
}


function consulta($correo,$password,$institucion,$sede,$rol)
{

//include("conexion.php");  
 $con = New Conexion();
 $consulta="SELECT nombre,correo,institucion,sede,rol FROM usuarios WHERE correo='$correo' and password='$password' 
 and institucion='$institucion' and sede='$sede' and rol='$rol'";

$resultado=$con->query($consulta) or die("Error de datos".mysqli_error($con));

$numfilas = $resultado->num_rows;
if ($numfilas>0){
$fila = $resultado->fetch_object();

$arreglo = array($fila->correo, $fila->rol, $fila->nombre); 
return $arreglo;
}
else {
	echo "<br><br><h1>Los Datos Ingresados No Son Correctos Verifique Y Vuelva A Intentar</h1>";
}
}
?>
