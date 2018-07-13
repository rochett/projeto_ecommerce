<?php 
	require_once('Connections/conectar.php');
	include('config/base_local.php'); 
	
	session_start(); 

	$contato_telefone = $_SESSION['contatotelefone'];
	$nome = utf8_decode($_POST['subscribe_name']);
	$telefone = $_POST['telefone'];
	$assunto = 'Telefone';
	$msg = 'Contato Telefone';
	$data = date("d/m/Y");
	$hora = date("H:i:s");	
	
	$mensagem = "<b>Nome:</b> \t$nome<br />";
	$mensagem .= "<b>Telefone:</b> \t$telefone<br />";
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
	
	$sql = "INSERT INTO contato(nome, assunto, telefone, mensagem, data, hora)
	VALUES ('$nome', '$assunto', '$telefone', '$msg', '$data_cadastro', '$hora_cadastro')";
	
	$ResultLog = mysqli_query($conectar, $sql); 	
	echo "<script>alert('".$msg_envio."'); window.location=\"contatofone.php?var=".$contato_telefone."\"</script>";
?>
