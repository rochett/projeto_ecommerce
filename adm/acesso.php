<?php
require_once('Connections/conectar.php');

session_start();

if ($_SESSION["acesso"]!="xc456") {
	header('Location: index.php');
}

$master=$_SESSION['master'];

?>