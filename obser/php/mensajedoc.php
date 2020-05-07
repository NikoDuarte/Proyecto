<?php

session_start();
ob_start();

$alumno = $_POST['estudiante'];
$grado = $_POST['grado'];
$curso = $_POST['curso'];
$obser = $_POST['obser'];


$arreglo = array($alumno,$grado,$curso,$obser);

foreach($arreglo as $datos){
    echo $datos."<br>";
}












?>