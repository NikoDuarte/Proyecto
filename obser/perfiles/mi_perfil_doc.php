<?php


session_start();
ob_start();

$doc = $_SESSION['documento'];
$nom = $_SESSION['nombre'];
if (!isset($_SESSION['nombre'],$_SESSION['documento'])) {
    header("location:../php-login/login.php");
}


?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Perfil</title>
  <link rel="stylesheet" href="../assets/css/mi_perfil_doc.css">
  <style>
        body{
          background-image: url(../img/imagen.jpg);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<main>
    <div class="content-all">
        <header></header>
        <input type="checkbox" id="check">
        <h2><a href=""><?php echo $nom?></a></h2>
        <label for="check" class="icon-menu">
            <img src="../img/menu.svg" width="25" height="25">
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../app_docente.php">Inicio</a></li>
                <li><a href="../php/reportes/reportedoc.php">Tus observaciones</a></li>
                <li><a href="../../php-login/php/logout.php">Cerrar Sesion</a></li>
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
      <input type="text" name="sede" id="sede" value="<?php echo $consulta ['sede'];?>">
      <br>
      <h2 class="titulo2">Tu documento es:</h2>
      <input type="text" name="documento" id="documento" disabled value="<?php echo $consulta ['documento'];?>"><?php }} ?>
      <br>

      <input type="submit" class="consultar" name="consultar" id="boton" value="consulta mis datos">
      <input type="submit" class="modificar" name="actualizar" id="boton" value="actualizar datos">
    </form>
  </div>
  <?php 
if (isset($_POST['actualizar']))
{

  $sede = $_POST['sede'];


    $sql = $con->query("UPDATE usuarios SET sede = '$sede' WHERE documento = '$doc'");
  if ($sql) {
    echo "<script type='text/javascript'>
    alert('Se han cambiado sus datos exitosamente');
    window.location.href='mi_perfil_doc.php?correo=$_SESSION[documento]';
    </script>";
  }else{
      echo "<script type='text/javascript'>
    alert('No se han podido cambiar sus datos');
    window.location.href='mi_perfil_doc.php?correo=$_SESSION[documento]';
    </script>";
}
}
?>

</div>

</body>
</html>