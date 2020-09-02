<?php

ob_start();

$doc = $_SESSION['documento'];
$nom = $_SESSION['user'];
if (!isset($_SESSION['user'],$_SESSION['documento'])) {
    header("location:../php-login/login.php");
}






$con = New Conexion();

if (isset($_POST['observacion'])) {
    if ($_POST['alumno']!=" " && $_POST['curso']!=" " && $_POST['tipo']!='SELECCIONA UN TIPO' && $_POST['obser']!='Ingresa la observacion...') {
        $para = $_POST['alumno'];
        $curso = $_POST['curso'];
        $tipo = $_POST['tipo'];
        $observacion = $_POST['obser'];
    }else {
        ?>
        <div class="cont" align="center">
        <h3 class="bad">Todos los campos son obligatorios</h3>
        <br>
        </div>
    <?php
 
    }
    if (strlen(isset($para)) >= 1 && strlen(isset($curso)) >= 1) {



        $consulta = $con->query("SELECT * FROM usuarios WHERE documento = substr('$para',1,instr('$para','_')-1) and rol = 'Estudiante'");
        $row =mysqli_fetch_array($consulta);
        $contar =mysqli_num_rows($consulta);
    
        if ($contar != 0) {
    
            $sentencia="INSERT INTO observaciones (de,para,curso,tipo,fecha,observacion) values('".$doc."','".$row['documento']."','$curso','$tipo',now(),'$observacion')"; 
             $insertar=$con->query($sentencia) or die("Error de datos".mysqli_error($con));
    
            if ($insertar) {
                ?>
                    <div class="cont" align="center">
                    <h3 class="ok">Se envio con exito la observacion</h3>
                    <meta http-equiv="refresh" content="1.5;URL=app_docente.php">
                    </div>
                <?php
            }else{
                ?>
                    <div class="cont" align="center">
                    <h3 class="bad">Ups! a ocurrido un error al enviar la anotacion</h3>
                    </div>
                <?php
            }
        }else{
            ?>
            <div class="cont" align="center">
            <h3 class="bad">Parece que no se encontro el estudiante al que intentas enviar la observacion!! </h3>
            </div>
        <?php
    }
    }
    
}    


?>