
<!DOCTYPE html>
<html>
<head>
	<title>Crea Sesion</title>
	<link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<h1>Crear Sesion</h1>
	<span>o <a href="login.php">Iniciar Sesion</a></span>

	<form method="post" action="insertar.php">
    
Nombre <input  name="nom" type="text"  placeholder="Nombre" ></input>
Apellido <input  name="ape" type="text"  placeholder="Apellido" ></input>
Grado <input name="gra" type="text" placeholder="Grado">
Curso <input  name="cur" type="text"  placeholder="Curso" ></input> 
Institucion <input  name="ins" type="text"  placeholder="Institucion" ></input> 
Sede <input  name="sed" type="text"  placeholder="Sede" ></input>
Jornada <input  name="jor" type="text"  placeholder="Jornada" ></input> 
Documento <input  name="doc" type="text"  placeholder="Documento" ></input>    
Correo <input  name="cor" type="text"  placeholder="Correo electronico" ></input>
Password <input  name="psw" type="text"  placeholder="Contrasena" ></input>
Que eres en la IE <br>
  <input type="radio" id="est" name="rol" value="estudiante">
  <label for="estudiante">Estudiante</label>
  <input type="radio" id="acu" name="rol" value="acudiente">
  <label for="acudiente">Acudiente</label>
  <input type="radio" id="doc" name="rol" value="docente">
  <label for="docente">Docente</label>
  <br><br><br>
Correo del Acudiente <input  name="correo_acudiente" type="text"  placeholder="Correo Acudiente..." ></input>
 <input   type="submit" value="Registrame" ></input>
</form>
</body>
</html>