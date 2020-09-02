<?php 
session_start();
unset($_SESSION['user']);
unset($_SESSION['documento']);
session_destroy();

header("location: ../../php-login/login.php");
exit();

?>