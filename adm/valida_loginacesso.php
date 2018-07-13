<?php
require_once('Connections/conectar.php');
include('config/base_local.php');
session_start();

$usuario = $_SESSION['utiliza'];
$login = $_SESSION['usuarios'];
$tipo_usuario = $_SESSION['libera'];
$data_log = date("Y-m-d");
$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
$hora_log = gmdate("H:i:s", $timestamp);
$acao="LogIn";

$sql = "INSERT INTO log_usuarios_adm (usuario, login, acao, dat_log, hor_log) 
VALUES ('$usuario', '$login', '$acao', '$data_log', '$hora_log')";

$ResultLog = mysqli_query($conectar, $sql);

$router_tipo_usuario1 = $_SESSION['tipo_usuario'];

switch ($router_tipo_usuario) {
    case '1':
		header('Location: administrador.php');	
        break;
	case '2':
 		header('Location: administrador.php');	
        break;
	case '4':
 		header('Location: administrador.php');	
        break;
	case '5':
 		header('Location: administrador.php');	
        break;
	 default:
        header('Location: administrador.php');
}
?>

