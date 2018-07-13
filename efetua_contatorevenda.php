<?php 
	require_once('Connections/conectar.php');
	include('config/base_local.php'); 
	
	session_start();

	$contato_revenda = $_SESSION['contatorevenda'];
	$nome = $_POST['subscribe_name'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$cnpj = $_POST['cnpj'];
	$assunto = 'Cadastro de Revendedor';
	$data = date("d/m/Y");
	$hora = date("H:i:s");

	$mensagem = "<b>Nome:</b> \t$nome<br />";
	$mensagem .= "<b>E-mail:</b> \t$email<br />";
	$mensagem .= "<b>Telefone:</b> \t$telefone<br />";
	$mensagem .= "<b>Assunto:</b> \t$assunto<br />";
	$mensagem .= "<b>CNPJ:</b> \t$cnpj<br />";
	$mensagem .= "<b>Data Envio:</b> \t$data<br />";	
	$mensagem .= "<b>Hora Envio:</b> \t$hora<br />";
	
	$emailto = "rochett.tavares@gmail.com";
	$nameto = "Rochett";
    $attach_mail = 'n';
	include('config/header_mail.php');
	
	$data_cadastro = date("Y-m-d");
	$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
	$hora_cadastro = gmdate("H:i:s", $timestamp);
	
	$sql = "INSERT INTO revenda(nome, email, assunto, telefone, cnpj, data, hora)
	VALUES ('$nome', '$email', '$assunto', '$telefone', '$cnpj', '$data_cadastro', '$hora_cadastro')";
	
	$ResultLog = mysqli_query($conectar, $sql); 	
	echo "<script>alert('".$msg_envio."'); window.location=\"contatorevenda.php?var=".$contato_revenda."\"</script>";
?>