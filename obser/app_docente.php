<?php

session_start();
ob_start();

$doc = $_SESSION['documento'];
$_SESSION['nombre'];
if (!isset($_SESSION['nombre'],$_SESSION['documento'])) {
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
    <style>
        body{
            background-image: url(img/imagen.jpg);
        }
    </style>
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
			$sede = $_GET["sede"];
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
                        $resultados = $con->query("SELECT concat(documento,'_',replace(nombre,' ','_')) as nombre FROM usuarios WHERE curso = '$curso'");
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
        <h2><a href="../obser/perfiles/mi_perfil_doc.php?documento=<?php echo $_SESSION['documento'];?>"><?php echo $_SESSION['nombre']?></a></h2>
        <label for="check" class="icon-menu">
            <img src="img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../obser/perfiles/mi_perfil_doc.php?documento=<?php echo $_SESSION['documento'];?>"> Mi perfil </a></li>
                <li><a href="php/reportes/reportedoc.php"> Tus observaciones </a></li>
                <li><a href="../php-login/php/logout.php"> Cerrar Sesion </a></li>
            </ul>
        </nav>
    </div>
</main>
<section class="img">
<div align="center">
<div class="contenedor-menu">
		<a href="#" class="btn-menu">Menu</a>
		<ul class="submenu">
            <li class="activado"><a href="#">Sede</a>
				<ul>
                <?php 
                        $con = New Conexion();
                        $consulta = $con->query("SELECT DISTINCT sede FROM usuarios WHERE documento='".$_SESSION['documento']."'");
                        while($row = mysqli_fetch_array($consulta)){

                    ?>
					<li>
                        <a class="add_sede" href="?sede=<?php echo $row['sede']?>">
                        <?php echo $row['sede']?>
                        </a>
                    </li>
                    <?php }?>
				</ul>
			</li>
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


    <!--Observaciones-->
    <div class="row">            
        <div class="side">
        <br>
            <div class=side2>
                <h2>Observacion</h2>
                <h3> Ingrese la Observacion </h3>
            <div class="fakeobser" style="height:300px;">
                <form action="php/mensajedoc.php" method="post"> 
                    <input type="text" placeholder="Nombre del Estudiante..." name="estudiante" readonly value="<?php if (!isset($_GET["alumno"])){

                    }else{
                        echo $_GET["alumno"];
                    }?>">
                    <br>
                    <input type="text" placeholder="Curso...." name="curso" readonly value="<?php if (!isset($_GET["curso"])){

                    }else{
                        echo $_GET["curso"];
                    }?>">
                <select name="tipo" class="tipoobser">
                    <option>SELECCIONA UN TIPO</option>
                    <option value="disciplina">Disciplinaria</option>
                    <option value="academica">Academica</option>
                </select>
        <br>
        <br>
        <br>
            <textarea class="form-control" type="textarea" name="obser" id="form" maxlength="650" rows="10">
            </textarea>
        <br>
        <br>
            <input type="submit" value="Enviar Observacion" name="observacion">
        </form>
            </div>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="assets/js/main.js"></script>

<script>
	function principal() {
		var sede="principal";
	return sede;
    }
</script>

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

<script>
        Push.create("BIENVENIDO <?php echo $_SESSION['nombre']?>",{
            body: "Mira tus obserbaciones",
            icon: "img/noti.png",
            timeout: 5000,
            onClick: function () {
                window.location="php/reportes/reportedoc.php";
                this.close();
            }
        });
    </script>





    
</body>
</html>