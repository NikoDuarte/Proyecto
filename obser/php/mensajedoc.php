<?php

session_start();
ob_start();

$doc = $_SESSION['documento'];
$nom = $_SESSION['username'];
if (!isset($_SESSION['username'],$_SESSION['documento'])) {
    header("location:../php-login/login.php");
}






include("conexion.php");
$con = New Conexion();

if (isset($_POST['observacion'])) {
    $para = $_POST['estudiante'];
    $tipo = $_POST['tipo'];
    $observacion = $_POST['obser'];

    $consulta = $con->query("SELECT * FROM usuarios WHERE documento = substr('$para',1,instr('$para','_')-1)");
    $row =mysqli_fetch_array($consulta);
    $contar =mysqli_num_rows($consulta);

    if ($contar != 0) {

        $sentencia="INSERT INTO observaciones (de,para,tipo,fecha,observacion) values('".$_SESSION['username']."','".$row['documento']."','$tipo',now(),'$observacion')"; 
         $insertar=$con->query($sentencia) or die("Error de datos".mysqli_error($con));

        if ($insertar) {
            //header("location:../app_docente.php");
            echo "<script>alert('La observacion se ha enviada')</script>";
        }else{
            echo "<script>alert('La observacion no se ha enviado')</script>";
        }
    }else{
        echo "<script>alert('El Usuario al que intenta enviar la observacion no existe')</script>";
        //header("location:../app_docente.php");
    }
}


?>