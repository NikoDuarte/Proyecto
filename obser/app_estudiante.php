<?php

session_start();
ob_start();

$doc = $_SESSION['documento'];
$_SESSION['nombre'];
if (!isset($_SESSION['nombre'],$_SESSION['documento'])) {
    header("location:../php-login/login.html");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP|Estudiante</title>
    <link rel="stylesheet" href="assets/css/estilosest.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <script src="assets/js/push.min.js"></script>
    <style>
        body{
            background-image: url("img/imagenest.jpg");
        }
    </style>
</head>
<body>
<?php

include_once("php/conexion.php");

?>
<main>
    <div class="content-all">
        <header></header>
        <input type="checkbox" id="check-menu">
        <h2><a href="../obser/perfiles/mi_perfil_est.php?documento=<?php echo $_SESSION['documento'];?>"><?php echo $_SESSION['nombre'];?></a></h2>
        <label for="check-menu" class="icon-menu">
            <img src="img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../obser/perfiles/mi_perfil_est.php?documento=<?php echo $_SESSION['documento'];?>"> Mi perfil</a></li>
                <li><a href="php/reportes/reporteest.php"> Tus observaciones</a></li>
                <li><a href="../php-login/php/logout.php"> Cerrar Sesion</a></li>
            </ul>
        </nav>
    </div>
</main>
<br>
</div>

<div class="row">            
    <div class="side"align="right">
        <br>
            <div class=side2>
                <h2>Respondes a: </h2>
                <div class="fakecolor" >
                <div class="fakeobser" >
                    <form action="php/mensajeest.php" method="post"> 
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

                <div class="side3">
                <h2> Version y Compromiso</h2>

                </div>
                <br><br>
                        <table class="linea">
                            <tr>
                                <td>
                                    <div class="side5">
                                        <div class="fakeobser">
                                        <h2 align="center">Version</h2>
                                        </div>
                                    </div>
                                    <br>
                                </td>
                                <td>
                                    <div class="side6">
                                        <div class="fakeobser">
                                            <h2 align="center">Compromiso</h2>
                                        </div>
                                    </div>
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="fakeobser">
                                    <textarea class="form-control" type="textarea" name="version" id="form" maxlength="650" rows="10" >
                                    </textarea>
                                    </div>
                                </td>
                                <td>
                                <div class="fakeobser">
                                    <textarea class="form-control" type="textarea" name="compromiso" id="form" maxlength="650" rows="10" >
                                    </textarea>
                                    </div>
                                </td>
                            </tr>
                        </table>
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
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
        Push.create("BIENVENIDO <?php echo $_SESSION['nombre']?>",{
            body: "Mira tus obserbaciones",
            icon: "img/noti.png",
            timeout: 5000,
            onClick: function () {
                window.location="php/reportes/reporteest.php";
                this.close();
            }
        });
</script>

</body>
</html>