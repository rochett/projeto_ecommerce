<?php
require_once('Connections/conectar.php');
include('config/base_local.php');
include("config/function.php");

session_start();

$compra = explode(',', $_GET['dados_pedido']);
$nome = $nameto = utf8_encode($_POST['nome_cliente']);
$emailto = $_POST['email_cliente'];
$attach_mail = 'n';

$assunto = 'Compra na Loja';
$data = date("d/m/Y");
$hora = date("H:i:s");

$mensagem = "<b>Nome:</b> \t$nameto<br />";
$mensagem .= "<b>E-mail:</b> \t$emailto<br />";
$mensagem .= "<b>Assunto:</b> \t$assunto<br />";

$mensagem .= "<b>Cod.Produto:</b> \t$compra[0]<br />";
$mensagem .= "<b>Descrição:</b> \t$compra[1]<br />";
$mensagem .= "<b>Cor:</b> \t$compra[8]<br />";
$mensagem .= "<b>Tamanho:</b> \t$compra[9]<br />";
$mensagem .= "<b>Cep:</b> \t$compra[2]<br />";
$mensagem .= "<b>Quantidade:</b> \t$compra[3]<br />";
$mensagem .= "<b>Tipo do envio:</b> \t$compra[4]<br />";
$mensagem .= "<b>Prazo de entrega:</b> \t$compra[5]<br />";
$mensagem .= "<b>Frete:</b> \t".formataMoeda($compra[6])."<br />";
$mensagem .= "<b>Valor dos Produtos:</b> \t".formataMoeda($compra[7])."<br />";

$mensagem .= "<b>Data Envio:</b> \t$data<br />";
$mensagem .= "<b>Hora Envio:</b> \t$hora<br />";

include('config/header_mail.php');

$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);

$sql = "INSERT INTO pedidos (nome, email, cod_produto, descricao, cor, tamanho, cep, quantidade, tipo_entrega, prazo_entrega, valor_frete, valor_produto, dat_cadastro, hor_cadastro) 
VALUES ('$nome', '$emailto', '$compra[0]', '$compra[1]', '$compra[8]', '$compra[9]', '$compra[2]', '$compra[3]', '$compra[4]', '$compra[5]', '$compra[6]', '$compra[7]', '$data_cadastro', '$hora_cadastro')";
$ResultLog = mysqli_query($conectar, $sql);

$id_produto = $compra[0];

$sqlAtProd = "UPDATE produtos SET quantidade=quantidade-$compra[3] WHERE id=$id_produto";
$ResultAtProd = mysqli_query($conectar, $sqlAtProd);

echo "<script>alert('Compra realizada com sucesso'); window.location=\"loja.php?var=".$compra[10]."\"</script>";
?>
