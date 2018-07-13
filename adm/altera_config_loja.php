<?php

require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$numero_loja = $_POST['numero_loja'];
$nome_empresa = utf8_decode($_POST['nome_empresa']);
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = utf8_decode($_POST['endereco']);
$cidade = utf8_decode($_POST['cidade']);
$estado = $_POST['estado'];
$pais = utf8_encode($_POST['pais']);
$cep = $_POST['cep'];
$mapa = $_POST['mapa'];
$video_entrada = $_POST['video_entrada'];
$banner = $_POST['banner'];
$link_facebook = $_POST['link_facebook'];
$link_twitter = $_POST['link_twitter'];
$link_googleplus = $_POST['link_googleplus'];
$link_pinterest = $_POST['link_pinterest'];
$link_instagram = $_POST['link_instagram'];
$link_youtube = $_POST['link_youtube'];
$atendimento = utf8_decode($_POST['atendimento']);
$titulo_apresentacao = utf8_decode($_POST['titulo_apresentacao']);
$apresentacao = utf8_decode($_POST['apresentacao']);
$responsavel = utf8_decode($_SESSION['utiliza']);

$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel = utf8_decode($_SESSION['utiliza']);

$id_config_loja = $_GET['var_confl'];

$sqlAltConfig = "UPDATE config_site SET numero_loja='$numero_loja', nome_empresa='$nome_empresa', email='$email', telefone='$telefone', endereco='$endereco', cidade='$cidade', estado='$estado', pais='$pais', cep='$cep', mapa='$mapa', video_entrada='$video_entrada', banner='$banner', link_facebook='$link_facebook', link_twitter='$link_twitter', link_googleplus='$link_googleplus', link_pinterest='$link_pinterest', link_instagram='$link_instagram', link_youtube='$link_youtube', atendimento='$atendimento', titulo_apresentacao='$titulo_apresentacao', apresentacao='$apresentacao', dat_cadastro='$data_cadastro', hor_cadastro='$hora_cadastro', responsavel='$responsavel' WHERE id=$id_config_loja";
$ResultAltConfig = mysqli_query($conectar, $sqlAltConfig);

echo "<script>alert('Edição de Ambiente realizada com sucesso!'); window.location=\"lista_config_loja.php\"</script>";
?>