<?php
require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$nome_slider = utf8_decode($_POST['nome_slider']);
$texto = utf8_decode($_POST['texto_slider']);
$imagem = $_POST['slider_imagem'];
$exibir = $_POST['exibir_slider'];
$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel = utf8_decode($_SESSION['utiliza']);

$sql = "INSERT INTO slider_site (titulo, texto, imagem, exibir, dat_cadastro, hor_cadastro, responsavel)
VALUES ('$nome_slider', '$texto', '$imagem', '$exibir', '$data_cadastro', '$hora_cadastro', '$responsavel')";

$ResultLog = mysqli_query($conectar, $sql);

echo "<script>alert('Cadastro de Slider da Loja realizado com sucesso!'); window.location=\"cad_slider.php\"</script>";

?>