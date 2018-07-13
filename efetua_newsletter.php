<?php 
	require_once('Connections/conectar.php');
	include('config/base_local.php'); 
	
	session_start();

	$contato_newsletter = $_SESSION['contatonewsletter'];
	$nome = utf8_decode($_POST['subscribe_name']);
	$email = $_POST['subscribe_email'];
	$assunto = 'Newsletter';
	$msg = 'Cadastro de Newsletter';
	$data = date("d/m/Y");
	$hora = date("H:i:s");	
	
	$mensagem = "<b>Nome:</b> \t$nome<br />";
	$mensagem .= "<b>E-mail:</b> \t$email<br />";
	$mensagem .= "<b>Assunto:</b> \t$assunto<br />";
	$mensagem .= "<b>Mensagem:</b> \t$msg<br />";
	$mensagem .= "<b>Data Envio:</b> \t$data<br />";
	$mensagem .= "<b>Hora Envio:</b> \t$hora<br />";	
	
	$emailto = "rochett.tavares@gmail.com";
	$nameto = "Rochett";
    $attach_mail = 'n';
	include('config/header_mail.php');
	
	$data_cadastro = date("Y-m-d");
	$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
	$hora_cadastro = gmdate("H:i:s", $timestamp);
	
	$sql = "INSERT INTO contato(nome, email, assunto, mensagem, data, hora)
	VALUES ('$nome', '$email', '$assunto', '$msg', '$data_cadastro', '$hora_cadastro')";
	
	$ResultLog = mysqli_query($conectar, $sql); 	
	echo "<script>alert('".$msg_envio."'); window.location=\"newsletter.php?var=".$contato_newsletter."\"</script>";
?>