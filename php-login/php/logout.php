<?php 
session_start();
unset($_SESSION['username']);
unset($_SESSION['documento']);
session_destroy();

header("location: ../../php-login/login.html");
exit();

?>