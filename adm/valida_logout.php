<?php
session_start();

$_SESSION['utiliza']="";
$_SESSION['acesso']="";
$_SESSION['libera']="";
$_SESSION['master']="";
$_SESSION['avatar']="";
$_SESSION['foto']="";
$_SESSION['tipo_usuario']="";

header('Location: index.php');
?>
