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
       <th>Hiciste la observacion a</th>
       <th>Tipo</th>
       <th>Fecha</th>
       <th>Observacion</th>
   </thead>
   <?php
   include("../../php/conexion.php");
   $con = New Conexion();

      $consulta = $con->query("SELECT * FROM observaciones WHERE de = '".$_SESSION['username']."'");
      while($row = mysqli_fetch_array($consulta)){
?>

   <tbody>
       <tr>
           <td><?php echo $row['para']?></td>
           <td><?php echo $row['tipo']?></td>
           <td><?php echo $row['fecha']?></td>
           <td><?php echo $row['observacion']?></td>
       </tr>
   </tbody>
      <?php }?>
</table>
</div> 
</body>
</html>