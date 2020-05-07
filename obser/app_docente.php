<?php

session_start();
$correo = $_SESSION['username'];

if (!isset($_SESSION['username'])) {
    header("location:../php-login/login.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docente|APP</title>
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/estilosdoc.css">
</head>
<body>

    <!--POPUPS_GRADO-->
    <div class="ventana_grado" id="grado">
        <div id="cerrar"> 
        <a href="javascript:cerrar1()"><img src="img/close.png" alt=""></a>
        </div>   
          Escoge el grado
          <br>
          <br>
		  <form  method="get">
		  
          <select class="grado" name="grado">
              <option> SELECCIONE EL GRADO</option>
               <?php 	include("php/conexion.php");  
						
						$con = New Conexion();
						
						$sede = $_GET["sede"];
						$resultados = $con->query("SELECT grado FROM usuarios WHERE sede = '$sede'");
						while ($consulta = mysqli_fetch_array($resultados)) {
							echo "<option value=".$consulta ['grado'].">".$consulta ['grado']."</option>";
							
						}
			  ?>
		  
			  
          </select>
		  <br>
		  <input name="sede" value="<?php echo $sede ?>" type="text" readonly> 
          <br>
          <br>
		    <input class="boton" type="submit" value="Continuar">
			</form> 
         
          <br>
          <br>
    </div>

    
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
						$grado = $_GET["grado"];
						$resultados = $con->query("SELECT curso FROM usuarios WHERE grado = '$grado'");
						while ($consulta = mysqli_fetch_array($resultados)) {
							echo "<option value=".$consulta ['curso'].">".$consulta ['curso']."</option>";
							
						}
			  ?>
		  
			  
          </select>
		  <br>
		  <input name="sede" value="<?php echo $sede ?>" type="text" readonly> 
		   <input name="grado" value="<?php echo $grado ?>" type="text" readonly>
          <br>
          <br>
		    <input class="boton" type="submit" value="Continuar">
			</form> 
    <br>
    <br>

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
						$resultados = $con->query("SELECT  CONCAT(nombre,'_',apellido) AS nombre FROM usuarios WHERE curso = '$curso'");
						while ($consulta = mysqli_fetch_array($resultados)) {
							echo "<option value=".$consulta ['nombre'].">".$consulta ['nombre']."</option>";
							
						}
			  ?>
		  
            </select>
				<br>
		  <input name="sede" value="<?php echo $sede ?>" type="text" readonly> 
		   <input name="grado" value="<?php echo $grado ?>" type="text" readonly>
		   <input name="curso" value="<?php echo $curso ?>" type="text" readonly> 
		   
          <br>
          <br>
		    <input class="boton" type="submit" value="Continuar">
			</form> 
            <br>
            <br>
</div>



    <!--HEADERS-->
    <div class="header">
        <h1> Docente </h1>
        <h2><b>BIENVENIDO <?php echo $correo?></b></h2>
    </div>
    <div class="navbar">
        <a href="#" class="active">Inicio</a>
        <a href="../obser/perfiles/mi_perfil_doc.php?correo=<?php echo $_SESSION['username'];?>">Mi Perfil</a>
        <a href="../php-login/logout.php" class="right">Cerrar Sesion</a>
    </div>


    <!--submenu-->
    <div class="contenedor-menu">
		<a href="#" class="btn-menu">Menu</a>

		<ul class="menu">
            <li class="activado"><a href="../obser/app_docente.php">Inicia La Observacion</a></li>
            <li><a href="#">Sede</a>
				<ul>
					<li><a class="add_sede" href="?sede=principal">Principal</a></li>
					<li><a class="add_sede" href="?sede=tarde">Tarde</a></li>
                    <li><a href="#">##</a></li>
				</ul>
			</li>
			<li><a href="#">Curso</a>
				<ul>
					<li><a href="javascript:Grado()" id="grado">Grado</a></li>
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

    <!--SCRIPT-->
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="assets/js/main.js"></script>

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


    <!--Observaciones-->
    <div class="row">
        <div class="side">
        <a class="boton" href="#" target="_blank">Observaciones Recientes</a>
        <br>
        <div class=side2>
            <h2>Observacion</h2>
            <h3> Ingrese la Observacion </h3>
            <div class="fakeobser" style="height:300px;">
              <form action="php/mensajedoc.php" method="post"> 
                  <input type="text" placeholder="Nombre del Estudiante..." name="estudiante" value="<?php echo $_GET["alumno"]; ?>">
                  <input type="text" placeholder="Grado..." name="grado" value="<?php echo $_GET["grado"]; ?>"> 
                  <input type="text" placeholder="Curso...." name="curso" value="<?php echo $_GET["curso"]; ?>">
                  <br>
                  <br>
                  <br>
                  <textarea class="form-control" type="textarea" name="obser" id="form" maxlength="650" rows="10">
                  </textarea>
                  <br>
                  <br>
                  <input type="submit" value="Enviar Observacion">
              </form>
			  
              </div>
            </div>
        </div>
    </div>
</body>
</html>