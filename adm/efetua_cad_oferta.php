<?php
require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$nome_oferta = utf8_decode($_POST['nome_oferta']);
$texto = utf8_decode($_POST['texto_oferta']);
$imagem = $_POST['oferta_imagem'];
$exibir = $_POST['exibir_oferta'];
$posicao = $_POST['posicao_oferta'];
$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel = utf8_decode($_SESSION['utiliza']);

$sql = "INSERT INTO ofertas_site (titulo, texto, imagem, posicao, exibir, dat_cadastro, hor_cadastro, responsavel)
VALUES ('$nome_oferta', '$texto', '$imagem', '$posicao', '$exibir', '$data_cadastro', '$hora_cadastro', '$responsavel')";

$ResultLog = mysqli_query($conectar, $sql);

echo "<script>alert('Cadastro de Oferta da Loja realizado com sucesso!'); window.location=\"cad_oferta.php\"</script>";

?>