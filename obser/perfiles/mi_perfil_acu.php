<?php

session_start();
ob_start();

$doc = $_SESSION['documento'];
$nom = $_SESSION['username'];
if (!isset($_SESSION['username'],$_SESSION['documento'])) {
    header("location:../php-login/login.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Perfil</title>
  <link rel="stylesheet" href="../assets/css/mi_perfil_acu.css">
  <style>
        body{
            background-image: url("../img/imagenacu.jpg");
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<main>
    <div class="content-all">
        <header></header>
        <input type="checkbox" id="check">
        <h2><a href="../obser/perfiles/mi_perfil_acu.php?documento=<?php echo $_SESSION['documento'];?>"><?php echo $nom?></a></h2>
        <label for="check" class="icon-menu">
            <img src="../img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../app_acudiente.php"> Inicio</a></li>
                <li><a href="../php/reportes/reporteacu.php"> Tus observaciones</a></li>
                <li><a href="../../php-login/php/logout.php"> Cerrar Sesion</a></li>
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
      include("../php/conexion.php");  
      $con = New Conexion();
      if (isset($_POST['consultar'])){
      $doc = $_SESSION['documento'];
      $resultados = $con->query("SELECT * FROM acudiente WHERE documento = '$doc'");
      while ($consulta = mysqli_fetch_array($resultados)) {
      
      ?>
      <br>
      <h2 class="titulo1">Tu nombre y apellido es:</h2>
      <input type="text" name="nombre" id="nombre" value="<?php  echo $consulta ['nombre'];?>" disabled>
      <h2 class="titulo1">Tu institucion es:</h2>
      <input type="text" name="institucion" id="institucion" value="<?php echo $consulta ['institucion'];?>" disabled>
      <h2 class="titulo2">Tu documento es:</h2>
      <input type="text" name="documento" id="documento" value="<?php echo $consulta ['documento'];?>" disabled>
      <h2 class="titulo2">Tu contraseña es:</h2>
      <input type="text" name="password" id="password" value="<?php echo $consulta ['contraseña'];}}?>">
      <input type="submit" class="modificar" name="actualizar" id="boton" value="actualizar datos">
    </form>
  </div>
  <?php
  
if (isset($_POST['actualizar']))
{

  $contra = $_POST['password'];


    $sql = $con->query("UPDATE acudiente SET  contraseña='$contra' WHERE nombre='$nom'");
  if ($sql) {
    echo "<script type='text/javascript'>alert('Se inserto los registro correctamente');
    window.location.href='window.location='mi_perfil_doc.php?correo=$_SESSION[username]';</script>";
    echo "<script type='text/javascript'>alert('se ha modificado exitosamente su usuario;</script>')";
  }else{
  echo "No se pudo hacer ningun cambio.";
}
}

?>

</div>

</body>
</html>