<?php
    session_start();
    ob_start();

if (isset($_POST['iniciar'])) {
    //if (strlen($_POST['user']) >= 1 && strlen($_POST['pass']) >= 1) {

        $doc = $_POST['doc'];

        $existe = valida($doc);
    
        if ($existe>0){

            $arreglo =consulta($doc);
    
            //if ($arreglo=1) {
                switch ($arreglo[0]) {
                    case "Estudiante":
                            $_SESSION['documento'] = $doc;
                            $user = $_SESSION['user'];
                        
                    ?>
                        <div class="cont" align="center">
                        <h3 class="ok">Bienvenido <?php echo $user?> te estamos redireccionando</h3>
                        <meta http-equiv="refresh" content="1.5;URL=../obser/app_estudiante.php">
                        </div>
                    <?php
                    break;
                    case "Docente":
                            $_SESSION['documento'] = $doc;
                            $user = $_SESSION['user'];
                    ?>
                        <div class="cont" align="center">
                        <h3 class="ok">Bienvenido <?php echo $user?> te estamos redireccionando</h3>
                        <meta http-equiv="refresh" content="1.5;URL=../obser/app_docente.php">
                        </div>
                    <?php
                    break; 
                    case "acudiente":
                            $_SESSION['documento'] = $doc;
                            $user = $_SESSION['user'];
                    ?>
                            <div class="cont" align="center">
                            <h3 class="ok">Bienvenido <?php echo $user?> te estamos redireccionando</h3>
                            <meta http-equiv="refresh" content="1.5;URL=../obser/app_acudiente.php">
                            </div>
                    <?php
                    break;
                    case "Asesor":
                        $_SESSION['documento'] = $doc;
                        $user = $_SESSION['user'];
                ?>
                        <div class="cont" align="center">
                        <h3 class="ok">Bienvenido <?php echo $user?> te estamos redireccionando</h3>
                        <meta http-equiv="refresh" content="1.5;URL=../obser/app_docente.php">
                        </div>
                <?php
                    break;
                    case "coordinador":
                        $_SESSION['documento'] = $doc;
                        $user = $_SESSION['user'];
                ?>
                        <div class="cont" align="center">
                        <h3 class="ok">Bienvenido <?php echo $user?> te estamos redireccionando</h3>
                        <meta http-equiv="refresh" content="1.5;URL=../obser/app_coordinador.php">
                        </div>
                <?php
                    break;
                    case "admin":
                        $_SESSION['documento'] = $doc;
                        $user = $_SESSION['user'];
                ?>
                        <div class="cont" align="center">
                        <h3 class="ok">Bienvenido <?php echo $user?> te estamos redireccionando</h3>
                        <meta http-equiv="refresh" content="1.5;URL=../obser/app_admin.php">
                        </div>
                <?php
                    break;
                }
            //}else{
                //echo "no funciono";
            //}
        }else {
?>
        <div class="cont" align="center">
        <h3 class="bad">Ups, parece que el usuario con documento "<?php echo $doc; ?>" que ingresaste no existe, verifica los campos!</h3>
        <meta http-equiv="refresh" content="2.3;URL=login.php">
        </div>
<?php
        }

        
    //}
}


function valida($doc)
{

    include("conexion.php");  
    $con = New Conexion();
    $consulta="SELECT * FROM usuarios WHERE documento='$doc'";
    $resultado=$con->query($consulta) or die("Error de datos".mysqli_error($con));

    $numfilas = $resultado->num_rows;
        
        return $numfilas;
    
    
}


function consulta($doc)
{

    $con = New Conexion();
    $consulta="SELECT * FROM usuarios WHERE documento='$doc'";

    $resultado=$con->query($consulta) or die("Error de datos".mysqli_error($con));

    $numfilas = $resultado->num_rows;
    if ($numfilas>0){
        $fila = $resultado->fetch_object();

        $_SESSION['user']= $fila->nombre;
        $arreglo = array($fila->rol); 
        return $arreglo;
    }
    else
    {
?>
        <h5 class="bad">Ups, parece que alguno de los datos no coinciden!</h5>
<?php
    }
}

?>
