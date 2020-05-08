<?php

session_start();
$correo = $_SESSION['username'];

if (!isset($_SESSION['username'])) {
    header("location:../php-login/login.php");
}



include("conexion.php");
$con = New Conexion();

if (isset($_POST['respuesta'])) {
    $para = $_POST['docente'];
    $version = $_POST['version'];
    $compromiso = $_POST['compromiso'];

    $consulta = $con->query("SELECT * FROM usuarios WHERE correo = '$para'");
    $row =mysqli_fetch_array($consulta);
    $contar =mysqli_num_rows($consulta);

    if ($contar != 0) {

        $sentencia="INSERT INTO respuesta (de,para,fecha,version,compromiso) values('".$_SESSION['username']."','".$row['correo']."',now(),'$version','$compromiso')"; 
         $insertar=$con->query($sentencia) or die("Error de datos".mysqli_error($con));

        if ($insertar) {
            header("location:../app_estudiante.php");
            echo "<script>alert('La observacion se ha enviada')</script>";
        }else{
            echo "<script>alert('La observacion no se ha enviado')</script>";
        }
    }else{
        echo "<script>alert('El Usuario al que intenta enviar la observacion no existe')</script>";
    }

}


?>