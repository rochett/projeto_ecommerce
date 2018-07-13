<?php 
require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$nome = utf8_decode($_POST['textfield']);
$email = $_POST['emailfield'];
$assunto = utf8_decode($_POST['assunto']);
$msg = utf8_decode($_POST['mensagem']);
$data = date("d/m/Y");
$hora = date("H:i:s");

switch ($assunto) {
    case "1":
        $assunto =  utf8_decode('Dúvidas');
        break;
    case "2":
        $assunto =  utf8_decode('Sugestões');
        break;
    case "3":
        $assunto =  utf8_decode('Reclamações');
        break;
    case "4":
       $assunto =  "Atendimento";
       break;
}

$mensagem  = "<b>Assunto:</b> \t$assunto<br />";
$mensagem .= "<b>Mensagem:</b> \t$msg<br />";
$mensagem .= "<b>Data Envio:</b> \t$data<br />";
$mensagem .= "<b>Hora Envio:</b> \t$hora<br />";

$emailto = "rochett.tavares@gmail.com";
$nameto = "Rochett";
$attach_mail = 'n';
include('../config/header_mail.php');

$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H") - 2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel_cadastro = utf8_decode($_SESSION['utiliza']);

$sql = "INSERT INTO contato (nome, email, assunto, mensagem, data, hora)
VALUES ('$nome', '$email', '$assunto', '$msg', '$data_cadastro', '$hora_cadastro')";

$ResultLog = mysqli_query($conectar, $sql);

echo "<script>alert('".$msg_envio."'); window.location=\"contato.php\"</script>";

?>