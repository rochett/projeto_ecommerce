<?php
require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$nome_marca = utf8_decode($_POST['nome_marca']);
$link_site = $_POST['link_site'];
$imagem = $_POST['marca_imagem'];
$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel = utf8_decode($_SESSION['utiliza']);

$sql = "INSERT INTO marcas (nome, link_site, imagem, dat_cadastro, hor_cadastro, responsavel)
VALUES ('$nome_marca', '$link_site', '$imagem', '$data_cadastro', '$hora_cadastro', '$responsavel')";

$ResultLog = mysqli_query($conectar, $sql);

echo "<script>alert('Cadastro de Marca realizado com sucesso!'); window.location=\"cad_marca.php\"</script>";

?>