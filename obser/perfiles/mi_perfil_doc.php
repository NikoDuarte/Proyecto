<?php

session_start();

$correo = $_SESSION['username'];


if (!isset($_SESSION['username'])) {
    header("location:../../php-login/login.php");
}


?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Perfil APP</title>
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/perfil.css">
</head>
<!--BODY-->
<body>  
   <div class="header">
     <h1>
       Mi Perfil
     </h1>

    <p> Modifica o Elimina cosas de tu perfil</p>
    <br>
    <p><b>BIENVENIDO <?php echo $correo?></b></p>
   </div>



   <div class="navbar">
       <a href="../app_docente.php">Regresa Inicio</a>
       <a href="../../php-login/logout.php" class="right">Cerrar Sesion</a>
   </div>

   <div class="row">
     <div class="form">
       <h2>Empieza A Modificar Tu Perfil</h2>
       <div class="fakeform">
       <form action="#" method="post">
       <input type="submit" class="consultar" name="consultar" id="boton" value="consulta mis datos">
       <br><br>
       <?php
       include("../../php-login/conexion.php");  
       $con = New Conexion();
       if (isset($_POST['consultar'])){
      $correo = $_SESSION['username'];
      $resultados = $con->query("SELECT * FROM usuarios WHERE correo = '$correo'");
     while ($consulta = mysqli_fetch_array($resultados)) {
      

     ?>


       Nombre<input type="text" name="nombre" id="nombre" value="<?php echo $consulta ['nombre'];?>" disabled>
       <br><br>
       Apellido<input type="text" name="apellido" id="apellido" value="<?php echo $consulta ['apellido'];?>" disabled>
       <br><br>
       Institucion<input type="text" name="institucion" id="institucion" value="<?php echo $consulta ['institucion'];?>" disabled>
       <br><br>
       Sede<input type="text" name="sede" id="sede" value="<?php echo $consulta ['sede'];?>">
       <br><br>
       Jornada<input type="text" name="jornada" id="jornada" value="<?php echo $consulta ['jornada'];?>" disabled>
       <br><br>
       Documento<input type="text" name="documento" id="documento" value="<?php echo $consulta ['documento'];?>" disabled>
       <br><br>
       Contraseña<input type="text" name="password" id="documento" value="<?php echo $consulta ['password'];}}?>">

        <input type="submit" class="modificar" name="actualizar" id="boton" value="actualizar datos">
        
      </form>       
       </div>

<?php
    /*include("../../php-login/conexion.php");  
    $con = New Conexion();*/
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
  </div> 
</body>
</html>