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
    <title>app | docente</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <script src="assets/js/push.min.js"></script>
    <link rel="stylesheet" href="assets/css/estilosdoc.css">
</head>
<body>
<?php 	include("php/conexion.php");  
		$con = New Conexion();
?>

    
    <!--POPUP_CURSO-->
    <div class="ventana_curso" id="curso">
        <div id="cerrar"> 
            <a href="javascript:cerrar2()"><img src="img/close.png" alt=""></a>
        </div>
        Escoge el Curso
        <br>
        <br>
		<form  method="get">
                <select class="curso" name="curso">
                    <option> SELECCIONE EL CURSO</option>
                    <?php   
			
            $con = New Conexion();
            $consulta = $con->query("SELECT * FROM usuarios WHERE documento = '$doc'") ;
            $fila = $consulta->fetch_object();
			$sede = $fila->sede;
			$resultados = $con->query("SELECT DISTINCT curso FROM usuarios WHERE sede = '$sede'");
			while ($consulta = mysqli_fetch_array($resultados)) {
			echo "<option value=".$consulta ['curso'].">".$consulta ['curso']."</option>";
				}
			?>
                </select>
        <br>
        <br>
		    <input name="sede" value="<?php echo $sede ?>" type="text" readonly> 
        <br>
		<input class="boton" type="submit" value="Continuar">
		</form> 
    </div>
    <!--POPUP_ALUMNO-->
    <div class="ventana_alumno" id="alumno">
        <div id="cerrar"> 
            <a href="javascript:cerrar3()"><img src="img/close.png" alt=""></a>
        </div>
            Escoge el Alumno
            <br>
            <br>
		<form> 
            <select class="alumno" name="alumno">
                <option> SELECCIONE EL ALUMNO</option>
            <?php 	 
						
						$con = New Conexion();
						
						$sede = $_GET["sede"];
                        $curso = $_GET["curso"];
                        $resultados = $con->query("SELECT concat(documento,'_',replace(nombre,' ','_')) as nombre FROM usuarios WHERE curso = '$curso' AND rol = 'Estudiante'");
						while ($consulta = mysqli_fetch_array($resultados)) {
							echo "<option value=".$consulta ['nombre'].">".$consulta ['nombre']."</option>";
							
						}
			?>
            </select>
            <br>
            <br>
		    <input name="sede" value="<?php  echo $sede ?>" type="text" readonly> 
		    <input name="curso" value="<?php echo $curso ?>" type="text" readonly> 
        <br>
		<input class="boton" type="submit" value="Continuar">
		</form> 
</div>
<main>
    <div class="content-all">
        <header></header>
        <input type="checkbox" id="check">
        <h2><a href="../obser/perfiles/mi_perfil_doc.php?documento=<?php echo $_SESSION['documento'];?>"><?php echo $_SESSION['user']?></a></h2>
        <label for="check" class="icon-menu">
            <img src="img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li>
                    <a href="../obser/perfiles/mi_perfil_doc.php?documento=<?php echo $_SESSION['documento'];?>"><i class="fas fa-user-cog"></i> Mi perfil </a></li>
                <li><a href="php/reportes/reportedoc.php"><i class="fas fa-book"></i> Tus observaciones </a></li>
                <?php
                  $con = New Conexion();
                  $consulta=$con->query("SELECT rol FROM usuarios WHERE documento = $doc");
                  $fila = $consulta->fetch_object();

                  $rol = $fila->rol;

                  switch ($rol) {
                    case 'Asesor':
                      echo "<li><a href='php/reportes/reporteAsesor.php'><i class='fas fa-chalkboard-teacher'></i> Reporte de tu curso </a></li>";
                      break;
                    
                    default:
                      # code...
                      break;
                  }

                ?>
                <li><a href="../php-login/php/logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion </a></li>
            </ul>
        </nav>
    </div>
</main>
<?php include("php/mensajedoc.php");?>
<table class="nav">
    <tr>
        <td>
        <section class="img">
<div align="center">
<div class="contenedor-menu">
		<a href="#" class="btn-menu">Menu</a>
		<ul class="submenu">
			<li><a href="#">Curso</a>
				<ul>
					<li><a href="javascript:Curso()" id="curso">Curso</a></li>
				</ul>
			</li>
			<li><a href="#">Alumno</i></a>
				<ul>
                    <li><a href="javascript:Alumno()" id="alumno">Nombre</a></li>
				</ul>
			</li>
		</ul>
</div>
</div>
</section>

        </td>
    </tr>
</table>

<!--pruebas row-->
<div class="row">            
    <div class="side">
        <br>
        <div class=sideTitle>
            <h2 align="center">Realiza la observacion a </h2>
        </div>
        <br><br>
        <div class=side2>
            <div class="fakecolor" >
                <table class="form">
                    <tr>
                        <td>
                        <div class="fakeobser" >
                            <form  method="post"> 
                            <div align="center">
                                Nombre estudiante:
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="fakeobser" >
                            <div align="center">
                                Curso:
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="fakeobser" >
                            <div align="center">
                                Tipo:
                            </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="fakeobser">
                            <div align="center">
                                <input type="text" class="alumno"  name="alumno" readonly value="<?php 
                                    if(!isset($_GET["alumno"])){
                                    }else{
                                    echo $_GET["alumno"];
                                    } 
                                ?>">
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="fakeobser">
                            <div align="center">
                                <input type="text" class="curso" name="curso" readonly value="<?php 
                                    if(!isset($_GET["curso"])){
                                    }else{
                                    echo $_GET["curso"];
                                    } 
                                ?>">
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="fakeobser">
                            <div align="center">
                                <select name="tipo" class="tipo">
                                    <option>SELECCIONA UN TIPO</option>
                                    <option value="disciplina">Disciplinaria</option>
                                    <option value="academica">Academica</option>
                                </select>
                            </div>
                        </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

<br>
<br>
<br>
<div class="side5" align="center">
    <div class="fakeobser">
        <h2 align="center">Ingrese la observacion</h2>
    </div>
</div>
<br>
<div class="fakeobser">
    <textarea class="form-control" type="textarea" name="obser" id="form" onClick="this.value=''" >Ingresa la observacion...
    </textarea>
</div>
<br>
<div class="fakeobser">
    <input type="submit" value="Enviar" name="observacion">
</div>
</form>
    </div>
    
</div>


<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
    function Curso() {
    document.getElementById("curso")
    .style.display="block";
    }

    function cerrar2() {
        document.getElementById("curso")
        .style.display="none";
    }

    function continuar2() {
        document.getElementById("curso")
        .style.display="none";
    }
    
    </script>

<script>

function Alumno() {
document.getElementById("alumno")
.style.display="block";
}

function cerrar3() {
    document.getElementById("alumno")
    .style.display="none";
}

function continuar3() {
        document.getElementById("alumno")
        .style.display="none";
    }
</script>

<script>

function Documento() {
document.getElementById("documento")
.style.display="block";
}

function cerrar4() {
    document.getElementById("documento")
    .style.display="none";
}

function continuar4() {
        document.getElementById("documento")
        .style.display="none";
    }
</script>

<!--<script>
        Push.create("BIENVENIDO <?php //echo $_SESSION['nombre']?>",{
            body: "Mira tus obserbaciones",
            icon: "img/noti.png",
            timeout: 5000,
            onClick: function () {
                window.location="php/reportes/reportedoc.php";
                this.close();
            }
        });
    </script>-->





    
</body>
</html>