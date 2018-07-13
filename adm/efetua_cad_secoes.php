<?php
require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$nome_secao = utf8_decode($_POST['nome_secao']);
$texto = utf8_decode($_POST['texto_secao']);
$imagem = $_POST['secao_imagem'];
$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel = utf8_decode($_SESSION['utiliza']);

$sql = "INSERT INTO secoes_site (titulo, texto, imagem, dat_cadastro, hor_cadastro, responsavel)
VALUES ('$nome_secao', '$texto', '$imagem', '$data_cadastro', '$hora_cadastro', '$responsavel')";

$ResultLog = mysqli_query($conectar, $sql);

echo "<script>alert('Cadastro de Seção do Site realizado com sucesso!'); window.location=\"cad_secoes.php\"</script>";

?>