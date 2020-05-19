<?php
    session_start();
    ob_start();

$nom=$_POST['nom'];
$inst=$_POST['inst'];
$doc=$_POST['doc'];
$pass=$_POST['pass'];


$existe = valida($doc);

if ($existe>0){

$arreglo =consulta($nom,$inst,$doc,$pass);


switch ($arreglo[1]) {
    case "acudiente":
        $_SESSION['documento'] = $doc;
        $_SESSION['username'] = $nom;
        header("location:../../obser/app_acudiente.php");
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
 $consulta="SELECT documento FROM acudiente WHERE documento='$doc'";

$resultado=$con->query($consulta) or die("Error de datos".mysqli_error($con));

$numfilas = $resultado->num_rows;
return $numfilas;
}


function consulta($nom,$inst,$doc,$pass)
{

//include("conexion.php");  
 $con = New Conexion();
 $consulta="SELECT * FROM acudiente WHERE nombre='$nom' and contraseña='$pass'
and institucion='$inst' and documento='$doc' and rol='acudiente'";

$resultado=$con->query($consulta) or die("Error de datos".mysqli_error($con));

$numfilas = $resultado->num_rows;
if ($numfilas>0){
$fila = $resultado->fetch_object();

$arreglo = array($fila->nombre, $fila->rol); 
return $arreglo;
}
else {
	echo "<br><br><h1>Los Datos Ingresados No Son Correctos Verifique Y Vuelva A Intentar</h1>";
}
}

?>
