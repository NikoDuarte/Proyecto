<?php

session_start();

$correo = $_SESSION['username'];


if (!isset($_SESSION['username'])) {
    header("location:../php-login/login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante|APP</title>
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../obser/assets/css/estilosest.css">
</head>
<body>
    <div class="header">
        <h1>Estudiante</h1>
       <h2><b>BIENVENIDO <?php echo $correo?></b></h2>
    </div>

    <div class="navbar">
        <a href="#" class="active">Inicio</a>
        <a href="php/reportes/reporteest.php">Reporte De Observaciones</a>
        <a href="../obser/perfiles/mi_perfil_est.php?correo=<?php echo $_SESSION['username'];?>">Mi Perfil</a>
        <a href="../php-login/logout.php" class="right">Cerrar Sesion</a>
    </div>

    <div class="row">
        <div class="side">
            <h2>Observaciones</h2>
            <div class="fakeobser" style="height:100px;">
             <a class="boton" href="#" target="_blank">Observaciones Resientes</a>
             <br>
             <br>        
            <div class="side2">
            <form action="php/mensajeest.php" method="post">
             <input type="text" placeholder="Nombre del Docente" name="docente">

                 <h2>Tú version</h2>
                 <br>
                 <textarea class="form-control" type="textarea" name="version" id="form" maxlength="650" rows="10">
                 </textarea>
                 <br>        
                 <h2>Compromiso</h2>
                 <br>
                 <textarea class="form-control" type="textarea" name="compromiso" id="form" maxlength="650" rows="10">
                 </textarea>
                 <br>
                 <input type="submit" value="Envia" name="respuesta">
                 <br>
             </form>
             </div>
            </div>
        </div>
    </div>   

</body>
</html>