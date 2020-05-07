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
    <title>App| Acudiente</title>
    <link rel="stylesheet" href="../obser/assets/css/estilosacu.css">  
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet"> 
</head>
<body>
<div class="header">
   <h1>Acudiente</h1>
   <h2><b>BIENVENIDO <?php echo $correo?></b></h2>
</div>

<div class="navbar">
<a href="#" class="active">Inicio</a>
<a href="#">Reporte de Observaciones</a>
<a href="../obser/perfiles/mi_perfil_acu.php?correo=<?php echo $_SESSION['username'];?>">Mi Perfil</a>
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
             <input type="text" placeholder="Nombre del Docente">
             <input type="text" placeholder="Area"> 
             <input type="text" placeholder="Tipo de anotacion">
                 <h2>Compromiso</h2>
                 <br>
                 <textarea class="form-control" type="textarea" name="form" id="form" maxlength="650" rows="10">
                 </textarea>
                 <br>
                 <input type="submit" value="Envia">
                 <br>

             </div>
            </div>
        </div>
    </div>     
</body>
</html>