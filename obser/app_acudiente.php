<?php

session_start();
ob_start();

$doc = $_SESSION['documento'];
$_SESSION['user'];
if (!isset($_SESSION['user'],$_SESSION['documento'])) {
    header("location:../php-login/login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP|Acudiente</title>
    <link rel="stylesheet" href="assets/css/estilosacu.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <script src="assets/js/push.min.js"></script>
</head>
<body>
<main>
    <div class="content-all">
        <header></header>
        <input type="checkbox" id="check-menu">
        <h2><a href="../obser/perfiles/mi_perfil_acu.php?documento=<?php echo $_SESSION['documento'];?>"><?php echo $_SESSION['user'];?></a></h2>
        <label for="check-menu" class="icon-menu">
            <img src="img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../obser/perfiles/mi_perfil_acu.php?documento=<?php echo $_SESSION['documento'];?>"><i class="fas fa-user-cog"></i> Mi perfil</a></li>
                <li><a href="php/reportes/reporteacu.php"><i class="fas fa-book"></i> Tus observaciones</a></li>
                <li><a href="../php-login/php/logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion</a></li>
            </ul>
        </nav>
    </div>
</main>
<?php

include_once("php/mensajesacu.php");

?>

<br>
</div>

<div class="row">            
    <div class="side"align="center">
        <br>
            <div class=side2>
                <h2>Respondes a: </h2>
                <div class="fakecolor" >
                <div class="fakeobser" >
                    <form method="post"> 
                    <div align="center">
                        ID Observacion
                        <br>
                        <input type="text" class="id"  name="id" readonly value="<?php 
                                if(!isset($_GET["id"])){
                                }else{
                                echo $_GET["id"];
                                } 
                            ?>">

                    
                        <br>  

                        Documento docente
                        <br> <input type="text" class="doc" name="docente" readonly value="<?php 
                                if(!isset($_GET["documento"])){
                                }else{
                                echo $_GET["documento"];
                                } 
                            ?>">
                        <br>
                        Nombre docente<input type="text" class="name" name="nombre" readonly value="<?php 
                                if(!isset($_GET["nombre"])){
                                }else{
                                    echo $_GET["nombre"];
                            } 
                            ?>">
                            </div>
                </div>

                </div>
            </div>
            <br>
                <br>

                <div class="side3" align="center">
                <h2>Compromiso Familiar</h2>

                </div>
                <br>
                <div class="fakeobser" align="center">
                    <textarea class="form-control" type="textarea" name="compromiso" id="form" onClick="this.value=''">Ingrese su compromiso...</textarea>
                </div>
                        <br>
                        <div class="fakeobser" align="center">
                                    <input type="submit" value="Enviar" name="respuesta">
                        </div>
                            </form>
                                </div>
                            </div>

                        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>