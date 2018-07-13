<?php
require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$id_user_login = $_GET['var_username'];

$sqlUserPass = "SELECT * from usuarios_adm WHERE login='$id_user_login'";
$queryUserPass = mysqli_query($conectar, $sqlUserPass);
$row_RecordsetUserPass = mysqli_fetch_assoc($queryUserPass);

$senha_recuperada = $row_RecordsetUserPass['senha'];
$email = $row_RecordsetUserPass['login'];
$msg = "Lembrete de Senha";
$nome = 'Loja Teste';
$data = date("d/m/Y");
$timestamp = mktime(date("H") - 2, date("i"), date("s"), 0);
$hora = gmdate("H:i:s", $timestamp);

$mensagem = "<b>Nome:</b> \t$nome<br />";
$mensagem .= "<b>E-mail:</b> \t$email<br />";
$mensagem .= "<b>Assunto:</b> \t$msg<br />";
$mensagem .= "<b>Senha:</b> \t$senha_recuperada<br />";
$mensagem .= "<b>Data Envio:</b> \t$data<br />";
$mensagem .= "<b>Hora Envio:</b> \t$hora<br />";

$emailto = $row_RecordsetUserPass['login'];
$nameto = utf8_encode($row_RecordsetUserPass['usuario']);
$attach_mail = 'n';
include('../config/header_mail.php');

echo "<script>alert('".$msg_envio."'); window.location=\"index.php\"</script>";

?>