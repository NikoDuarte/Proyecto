<?php


session_start();
ob_start();

$doc = $_SESSION['documento'];
$nom = $_SESSION['user'];
if (!isset($_SESSION['user'],$_SESSION['documento'])) {
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
                <li><a href="../app_docente.php"><i class="fas fa-home"></i> Inicio</a></li>
                <li><a href="../php/reportes/reportedoc.php"><i class="fas fa-book"></i> Tus observaciones</a></li>
                <?php
                  include("../php/conexion.php");  
                  $con = New Conexion();
                  $consulta=$con->query("SELECT rol FROM usuarios WHERE documento = $doc");
                  $fila = $consulta->fetch_object();

                  $rol = $fila->rol;

                  switch ($rol) {
                    case 'Asesor':
                      echo "<li><a href='php/reportes/reporteAsesor.php'><i class='fas fa-chalkboard-teacher'></i> Reporte de tu curso </a></li>";
                      break;
                    
                    default:
                      # code...
                      break;
                  }

                ?>
                <li><a href="../../php-login/php/logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion</a></li>

            </ul>
        </nav>
        
    </div>
</main>

<?php 
if (isset($_POST['actualizar']))
{

  $sede = $_POST['sede'];


    $sql = $con->query("UPDATE usuarios SET sede = '$sede' WHERE documento = '$doc'");
  if ($sql) {
    ?>
    <div class="cont" align="center">
    <h3 class="ok">Se ha modificado tu perfil exitosamente!</h3>
    <meta http-equiv="refresh" content="1.5;URL=mi_perfil_doc.php">
    </div>
<?php
}else{
  ?>
  <div class="cont" align="center">
  <h3 class="bad">Ups! a ocurrido un error al editar ti perfil</h3>
  <meta http-equiv="refresh" content="1.5;URL=mi_perfil_doc.php">
  </div>
<?php
}
}
?>


<div class="row">
  <div class="form">
    <h1>Empieza A Modificar Tu Perfil</h1>
    <br><br>
    <form action="" method="post">

          <?php 
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
      <input type="text" class="activo" name="sede" id="sede" value="<?php echo $consulta ['sede'];?>">
      <br>
      <h2 class="titulo2">Tu documento es:</h2>
      <input type="text" name="documento" id="documento" disabled value="<?php echo $consulta ['documento'];?>"><?php }} ?>
      <br>

      <input type="submit" class="consultar" name="consultar" id="boton" value="consulta mis datos">
      <input type="submit" class="modificar" name="actualizar" id="boton" value="actualizar datos">
    </form>
  </div>

</div>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>

</body>
</html>