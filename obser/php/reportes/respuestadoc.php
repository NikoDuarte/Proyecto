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
    <title>Tus Observaciones</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assest/css/estilos.css">  
</head>
<body>


<div class="header">
   <h1>
       Tus observaciones
   </h1>
   <p><?php echo $correo?></p>
</div>

<div class="navbar">
       <a href="../../app_docente.php">Regresa Inicio</a>
       <a href="../../../php-login/logout.php" class="right">Cerrar Sesion</a>
</div>


<div id="main-container">
<table>
   <thead>
       <th>Respondio la observacion</th>
       <th>Version</th>
       <th>Compromiso</th>
       <th>Fecha</th>
   </thead>
   <?php
   include("../../php/conexion.php");
   $con = New Conexion();

      $consulta = $con->query("SELECT * FROM respuesta WHERE para = '".$_SESSION['username']."'");
      while($row = mysqli_fetch_array($consulta)){
?>

   <tbody>
       <tr>
           <td><?php echo $row['de']?></td>
           <td><?php echo $row['version']?></td>
           <td><?php echo $row['compromiso']?></td>
           <td><?php echo $row['fecha']?></td>
       </tr>
   </tbody>
      <?php }?>
</table>
</div> 
</body>
</html>