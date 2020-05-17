<?php

session_start();

$correo = $_SESSION['username'];


if (!isset($_SESSION['username'])) {
    header("location:../../php-login/login.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Perfil</title>
  <link rel="stylesheet" href="../assets/css/mi_perfil_est.css">
  <style>
        body{
            background-image: url("../img/imagenest.jpg");
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<main>
    <div class="content-all">
        <header></header>
        <input type="checkbox" id="check">
        <h2><a href="">Bienvenido <?php echo $correo?></a></h2>
        <label for="check" class="icon-menu">
            <img src="../img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../app_estudiante.php"> Inicio</a></li>
                <li><a href="../php/reportes/reporteest.php"> Tus observaciones</a></li>
                <li><a href="../../php-login/logout.php"> Cerrar Sesion</a></li>
            </ul>
        </nav>
        
    </div>
</main>
<div class="row">
  <div class="form">
    <h1>Empieza A Modificar Tu Perfil</h1>
    <br><br>
    <form action="" method="post">
      <input type="submit" class="consultar" name="consultar" id="boton" value="consulta mis datos">
      <?php 
      include("../../php-login/conexion.php");  
      $con = New Conexion();
      if (isset($_POST['consultar'])){
      $correo = $_SESSION['username'];
      $resultados = $con->query("SELECT * FROM usuarios WHERE correo = '$correo'");
      while ($consulta = mysqli_fetch_array($resultados)) {
      
      ?>
      <br><br><br>
      <h2 class="titulo1">Tu nombre es:</h2>
      <input type="text" name="nombre" id="nombre" value="<?php  echo $consulta ['nombre'];?>" disabled>
      <h2 class="titulo1">Tu apellido es:</h2>
      <input type="text" name="apellido" id="apellido" value="<?php echo $consulta ['apellido'];?>" disabled>
      <br>
      <h2 class="titulo1">Tu institucion es:</h2>
      <input type="text" name="institucion" id="institucion" value="<?php echo $consulta ['institucion'];?>" disabled>
      <h2 class="titulo2">Tu sede es:</h2>
      <input type="text" name="sede" id="sede" value="<?php echo $consulta ['sede'];?>" disabled>
      <h2 class="titulo2">Tu jornada es:</h2>
      <input type="text" name="jornada" id="jornada" value="<?php echo $consulta ['jornada'];?>" disabled>
      <br>
      <h2 class="titulo2">Tu documento es:</h2>
      <input type="text" name="documento" id="documento" value="<?php echo $consulta ['documento'];?>" disabled>
      <h2 class="titulo2">Tu contraseña es:</h2>
      <input type="text" name="password" id="documento" value="<?php echo $consulta ['password'];}}?>">
      <br>
      <input type="submit" class="modificar" name="actualizar" id="boton" value="actualizar datos">
    </form>
  </div>
  <?php 
if (isset($_POST['actualizar']))
{

  $sede = $_POST['sede'];
  $password = $_POST['password'];


    $sql = $con->query("UPDATE usuarios SET sede = '$sede', password = '$password' WHERE correo = '$correo'");
  if ($sql) {
    echo "<script type='text/javascript'>alert('Se inserto los registro correctamente');
    window.location.href='window.location='mi_perfil_doc.php?correo=$_SESSION[username]';</script>";
    echo "se ha modificado exitosamente su usuario";
  }else{
  echo "No se pudo hacer ningun cambio.";
}
}
?>

</div>

</body>
</html>