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
<!--POPUP_ALUMNO-->
    <div class="ventana_alumno" id="alumno">
        <div id="cerrar"> 
            <a href="javascript:cerrar3()"><img src="img/close.png" alt=""></a>
        </div>
            Escoge el Docente
            <br>
            <br>
		<form> 
            <select class="alumno" name="alumno">
                <option> SELECCIONE EL DOCENTE</option>
            <?php 	 
						
						$con = New Conexion();
						
						$sede = $_GET["sede"];
                        $resultados = $con->query("SELECT concat(documento,'_',replace(nombre,' ','_')) as nombre FROM usuarios WHERE rol = 'docente'");
						while ($consulta = mysqli_fetch_array($resultados)) {
							echo "<option value=".$consulta ['nombre'].">".$consulta ['nombre']."</option>";
							
						}
			?>
            </select>
<br>
<br>
		<input class="boton" type="submit" value="Continuar">
		</form> 
</div>

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

<section class="img">
<div align="center">
<div class="contenedor-menu">
		<a href="#" class="btn-menu">Menu</a>
		<ul class="submenu">
			<li class="activado"><a href="#">Docente</i></a>
				<ul>
                    <li><a href="javascript:Alumno()" id="alumno">Nombre</a></li>
				</ul>
			</li>
		</ul>
</div>
</div>
</section>

<br>
<br>

    </div>
    <div class="row">            
        <div class="side">
        <br>
            <div class=side2>
                <h2>Observacion</h2>
                <br>
                <h2> Version y Compromiso</h2>
                <br>
            <div class="fakeobser" style="height:300px;">
                <form action="php/mensajeest.php" method="post"> 
                <input type="text" placeholder="Nombre del Docente..." name="docente" readonly value="<?php if (!isset($_GET["alumno"])){

                    }else{
                        echo $_GET["alumno"];
                    }if(!isset($_GET["nombre"])){
                        
                    }else{
                        echo $_GET["nombre"];
                    } ?>">
        <br>
        <br>
        <br>
        <h2>Version</h2>
            <textarea class="form-control" type="textarea" name="version" id="form" maxlength="650" rows="10" >
            </textarea>
        <br>
        <br>
        <h2>Compromiso</h2>
            <textarea class="form-control" type="textarea" name="compromiso" id="form" maxlength="650" rows="10">
            </textarea>
            <br>
            <br>
            <input type="submit" value="Enviar" name="respuesta">
        </form>
            </div>
        </div>
    </div>
</div>
<script>
	function principal() {
		var sede="principal";
	return sede;
    }
	
    function Grado() {
    document.getElementById("grado")
    .style.display="block";
    }

    function cerrar1() {
        document.getElementById("grado")
        .style.display="none";
    }

    function continuar1() {
        document.getElementById("grado")
        .style.display="none";
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