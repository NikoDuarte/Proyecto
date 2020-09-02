<?php

$doc = $_SESSION['documento'];
$nom = $_SESSION['user'];
if (!isset($_SESSION['user'],$_SESSION['documento'])) {
    header("location:../php-login/login.php");
}





include("conexion.php");
$con = New Conexion();



if (isset($_POST['respuesta'])) 
{
        
    if ($_POST['version']!='Ingrese su version...' && $_POST['compromiso']!='Ingrese su compromiso...') {
        if (strlen($_POST['id']) >= 1 && strlen($_POST['docente']) >= 1 && strlen($_POST['version']) >= 1 && strlen($_POST['compromiso']) >= 1) {
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
                    ?>
                        <div class="cont" align="center">
                        <h3 class="ok">Se ha enviado correctamente la respuesta de la observacion</h3>
                        <meta http-equiv="refresh" content="1.5;URL=app_estudiante.php">
                        </div>
                    <?php
                        }
                    else
                    {
                    ?>
                        <div class="cont" align="center">
                        <h3 class="bad">Ups! a ocurrido un error al enviar la respuesta de la observacion</h3>
                        <meta http-equiv="refresh" content="1.5;URL=app_estudiante.php">
                        </div>
                    <?php
                        }
                }
        }else {
        ?>
            <div class="cont" align="center">
            <h3 class="bad">Todos los campos son obligatorios</h3>
            <meta http-equiv="refresh" content="1.5;URL=app_estudiante.php">
            </div>
        <?php
        
        }    
    
    }

}else{
    ?>
    <!--<div class="cont" align="center">
    <h3 class="bad">Parece que al usuario que intentas responder la observacion no existe en nuestra base de datos!!</h3>-->
    <!--<meta http-equiv="refresh" content="1.5;URL=app_docente.php">-->
    </div>
<?php
}




?>