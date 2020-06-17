<?php 
    session_start();
    ob_start();

//$nom=$_POST['nom'];
$doc = $_POST['doc'];
$pass=$_POST['pass'];


$existe = valida($doc);

if ($existe>0){

$arreglo =consulta($doc,$pass);


switch ($arreglo[1]) {
    case "Estudiante":
        
        $_SESSION['documento'] = $doc;
        $_SESSION['nombre'];
        header("location:../../obser/app_estudiante.php");
        break;
    case "Docente":
        $_SESSION['documento'] = $doc;
        $_SESSION['nombre'];
        header("location:../../obser/app_docente.php");
        break;
}

echo "<br><h1>".$arreglo[0]."</h1>";
echo "<br><h2>".$arreglo[1]."</h2>";
echo "<br><h3>".$arreglo[2]."</h3>";
}else {
	echo "<br><h1>el usuario no existe<h1>";
}



function valida($doc)
{

include("conexion.php");  
 $con = New Conexion();
 $consulta=$con->query("SELECT documento FROM usuarios WHERE documento='$doc'");


$numfilas = $consulta->num_rows;
return $numfilas;
}


function consulta($doc,$pass)
{

//include("conexion.php");  
$con = New Conexion();
$consulta=$con->query("SELECT nombre,documento,institucion,password,rol FROM usuarios
WHERE documento='$doc' and password='$pass'");



$numfilas = $consulta->num_rows;
if ($numfilas>0){
$fila = $consulta->fetch_object();

$_SESSION['nombre'] = $fila->nombre;

$arreglo = array($fila->nombre, $fila->rol); 
return $arreglo;
}
else {
	echo "<br><br><h1>Los Datos Ingresados No Son Correctos Verifique Y Vuelva A Intentar</h1>";
}
}

