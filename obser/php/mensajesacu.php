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
    $para = $_POST['docente'];
    $observacion = $_POST['obser'];

    $consulta = $con->query("SELECT * FROM usuarios WHERE documento = substr('$para',1,instr('$para','_')-1)");
    $row =mysqli_fetch_array($consulta);
    $contar =mysqli_num_rows($consulta);

    if ($contar != 0) {

        $sentencia="INSERT INTO respuesta (de,para,fecha,compromiso) values('".$_SESSION['username']."','".$row['documento']."',now(),'$observacion')"; 
         $insertar=$con->query($sentencia) or die("Error de datos".mysqli_error($con));

        if ($insertar) {
            echo "<script type='text/javascript'>
            alert('Se envio el compromiso correctamente');
            window.location.href=' ../../obser/app_acudiente.php ';
            </script>";
        }else{
            echo "<script type='text/javascript'>
            alert('No se puede enviar el compromiso');
            window.location.href=' ../../obser/app_acudiente.php ';
            </script>";
        }
    }else{
        echo "<script type='text/javascript'>
            alert('El usuario al que intenta enviar el compromiso no existe');
            window.location.href=' ../../obser/app_acudiente.php ';
            </script>";
    }

}


?>