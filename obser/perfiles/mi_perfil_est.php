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
  <title>Mi Perfil</title>
  <link rel="stylesheet" href="../assets/css/mi_perfil_est.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<main>
    <div class="content-all">
        <header></header>
        <input type="checkbox" id="check">
        <h2><a href=""><?php echo $_SESSION['user']?></a></h2>
        <label for="check" class="icon-menu">
            <img src="../img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../app_estudiante.php"><i class="fas fa-home"></i> Inicio</a></li>
                <li><a href="../php/reportes/reporteest.php"><i class="fas fa-book"></i>  Tus observaciones</a></li>
                <li><a href="../../php-login/php/logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion</a></li>
            </ul>
        </nav>
        
    </div>
</main>
<div class="row">
  <div class="form">
    <h1>Empieza A Modificar Tu Perfil</h1>
    <br><br>
    <form action="" method="post">
      <?php 
      include("../php/conexion.php");  
      $con = New Conexion();
      if (isset($_POST['consultar'])){
        $doc = $_SESSION['documento'];
        $resultados = $con->query("SELECT * FROM usuarios WHERE documento = '$doc'");
      while ($consulta = mysqli_fetch_array($resultados)) {
      
      ?>
      <br><br><br>
      <h2 class="titulo1">Tu nombre y apellido es:</h2>
      <input type="text" name="nombre" id="nombre" value="<?php  echo $consulta ['nombre'];?>" disabled>
      <br>
      <h2 class="titulo1">Tu institucion es:</h2>
      <input type="text" name="institucion" id="institucion" value="<?php echo $consulta ['institucion'];?>" disabled>
      <h2 class="titulo2">Tu sede es:</h2>
      <input type="text" name="sede" id="sede" value="<?php echo $consulta ['sede'];?>" disabled>
      <h2 class="titulo2">Tu Curso es:</h2>
      <input type="text" name="jornada" id="jornada" value="<?php echo $consulta ['curso'];?>" disabled>
      <br>
      <h2 class="titulo2">Tu documento es:</h2>
      <input type="text" name="documento" id="documento" value="<?php echo $consulta ['documento'];?>" disabled> <?php }} ?>
      <br>

      <input type="submit" class="consultar" name="consultar" id="boton" value="consulta mis datos">
    </form>
  </div>
</div>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>

</body>
</html>