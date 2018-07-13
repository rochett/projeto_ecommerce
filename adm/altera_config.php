<?php

require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$nome_empresa = utf8_decode($_POST['nome_empresa']);
$site_empresa = utf8_decode($_POST['site_empresa']);
$sigla_empresa = utf8_decode($_POST['sigla_empresa']);
$pasta_img_usuarios = $_POST['pasta_img_usuarios'];
$pasta_img_slider = $_POST['pasta_img_slider'];
$pasta_videos = $_POST['pasta_videos'];
$pasta_img_marcas = $_POST['pasta_img_marcas'];
$pasta_img_secoes = $_POST['pasta_img_secoes'];
$pasta_img_ofertas = $_POST['pasta_img_ofertas'];
$pasta_img_banner = $_POST['pasta_img_banner'];
$pasta_img_produtos = $_POST['pasta_img_produtos'];
$pasta_backup = $_POST['pasta_backup'];
$responsavel = utf8_decode($_SESSION['utiliza']);

$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel = utf8_decode($_SESSION['utiliza']);

$id_config_sistema = $_GET['var_conf'];

$sqlAltConfig = "UPDATE config_sistema SET nome_empresa='$nome_empresa', site='$site_empresa', define_sistema='$sigla_empresa', pasta_imagens_user='$pasta_img_usuarios', pasta_imagens_slider='$pasta_img_slider', pasta_videos='$pasta_videos', pasta_telas='$pasta_img_marcas', pasta_secoes='$pasta_img_secoes', pasta_ofertas='$pasta_img_ofertas', pasta_banner='$pasta_img_banner', pasta_imagens_produto='$pasta_img_produtos', pasta_backup='$pasta_backup', dat_cadastro='$data_cadastro', hor_cadastro='$hora_cadastro', responsavel='$responsavel' WHERE id=$id_config_sistema";
$ResultAltConfig = mysqli_query($conectar, $sqlAltConfig);

echo "<script>alert('Edição de Ambiente realizada com sucesso!'); window.location=\"valida_logoutacesso.php\"</script>";
?>