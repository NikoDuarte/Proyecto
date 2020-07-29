<?php

session_start();
ob_start();

$doc = $_SESSION['documento'];
$nom = $_SESSION['nombre'];
if (!isset($_SESSION['nombre'],$_SESSION['documento'])) {
    header("location:../php-login/login.html");
}





include("conexion.php");
$con = New Conexion();



if (isset($_POST['respuesta'])) 
{
    $id = $_POST['id'];
    $para = $_POST['docente'];
    $version = $_POST['version'];
    $compromiso = $_POST['compromiso'];

    

            $consulta = $con->query("SELECT * FROM usuarios WHERE documento = $para");
            $row =mysqli_fetch_array($consulta);
            $contar =mysqli_num_rows($consulta);

            if ($contar != 0) 
            {

                $sentencia="INSERT INTO compromiso (de,para,fecha_est,version,compromiso,id_observacion) 
                            values('".$doc."','".$row['documento']."',now(),'$version','$compromiso','$id')"; 
                $insertar=$con->query($sentencia) or die("Error de datos".mysqli_error($con));

                if ($insertar) 
                {
                    echo "<script type='text/javascript'>
                    alert('Se envio el compromiso correctamente');
                    window.location.href=' ../../obser/app_estudiante.php ';
                    </script>";
                }
                else
                {
                    echo "<script type='text/javascript'>
                    alert('No se puede enviar el compromiso');
                    window.location.href=' ../../obser/app_estudiante.php ';
                    </script>";
                }
            }
        
}else{
        echo "<script type='text/javascript'>
            alert('El usuario al que intenta enviar el compromiso no existe');
            window.location.href=' ../../obser/app_estudiante.php ';
            </script>";
    }




?>