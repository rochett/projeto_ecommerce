<?php
require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$nome_tipo_usuario = utf8_decode($_POST['nome_tipo_usuario']);
$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel = utf8_decode($_SESSION['utiliza']);

$sql = "INSERT INTO tipo_usuario (descricao, dat_cadastro, hor_cadastro, responsavel)
VALUES ('$nome_tipo_usuario', '$data_cadastro', '$hora_cadastro', '$responsavel')";

$ResultLog = mysqli_query($conectar, $sql);

echo "<script>alert('Cadastro de Tipo de Usuário realizado com sucesso!'); window.location=\"cad_tipo_usuario.php\"</script>";	

?>