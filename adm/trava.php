<?php

require_once('Connections/conectar.php');

session_start();

$_SESSION['acesso']="";
$_SESSION['libera']="";
$_SESSION['master']="";
$_SESSION['avatar']="";
header('Location: trava_sessao.php');

?>
