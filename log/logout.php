<?php
session_start();
$_SESSION['usuario_logado'] = false;
$_SESSION['email_user'] = '';  
// session_destroy();
header('Location: ../index.php');
?>