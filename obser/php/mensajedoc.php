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
    $curso = $_POST['curso'];
    $observacion = $_POST['obser'];

    $consulta = $con->query("SELECT * FROM usuarios WHERE documento = substr('$para',1,instr('$para','_')-1)");
    $row =mysqli_fetch_array($consulta);
    $contar =mysqli_num_rows($consulta);

    if ($contar != 0) {

        $sentencia="INSERT INTO observaciones (de,para,curso,tipo,fecha,observacion) values('".$_SESSION['username']."','".$row['documento']."','$curso','$tipo',now(),'$observacion')"; 
         $insertar=$con->query($sentencia) or die("Error de datos".mysqli_error($con));

        if ($insertar) {
            //header("location:../app_docente.php");
            echo "<script type='text/javascript'>
            alert('Se guardo la observacion ');
            window.location.href=' ../../obser/app_docente.php ';
            </script>";
        }else{
            echo "<script type='text/javascript'>
            alert('No se guardo con exito');
            window.location.href=' ../../obser/app_docente.php ';
            </script>";
        }
    }else{
        echo "<script type='text/javascript'>
        alert('No se ha encontrado el alumno al que intenta hacer la observacion');
        window.location.href=' ../../obser/app_docente.php ';
        </script>";
        //header("location:../app_docente.php");
    }
}


?>