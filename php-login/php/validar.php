<?php 
    session_start();
    ob_start();


$doc = $_POST['doc'];


$existe = valida($doc);

if ($existe>0){

$arreglo =consulta($doc);


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
    case "acudiente":
            $_SESSION['documento'] = $doc;
            $_SESSION['nombre'];
            header("location:../../obser/app_acudiente.php");
            break;
    
}

echo "<br><h1>".$arreglo[0]."</h1>";
echo "<br><h2>".$arreglo[1]."</h2>";
echo "<br><h3>".$arreglo[2]."</h3>";
}else {
	echo "<script type='text/javascript'>
    alert('El usuario que ingreso no existe o 
    no lo ubicamos en la base de datos por favor verifique he intente de nuevo');
    window.location.href=' ../../obser/app_docente.php ';
    </script>";
}



function valida($doc)
{

include("conexion.php");  
 $con = New Conexion();
 $consulta=$con->query("SELECT documento FROM usuarios WHERE documento='$doc'");


$numfilas = $consulta->num_rows;
return $numfilas;
}


function consulta($doc)
{

$con = New Conexion();
$consulta=$con->query("SELECT nombre,documento,institucion,rol FROM usuarios
WHERE documento='$doc'");



$numfilas = $consulta->num_rows;
if ($numfilas>0){
$fila = $consulta->fetch_object();

$_SESSION['nombre'] = $fila->nombre;

$arreglo = array($fila->nombre, $fila->rol); 
return $arreglo;
}
else {
	echo "<script type='text/javascript'>
    alert('Los datos son incorrectos verifique y vuelva ha reenviar el formulario');
    window.location.href=' ../../obser/app_docente.php ';
    </script>";
}
}

