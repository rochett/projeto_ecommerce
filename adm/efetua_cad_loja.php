<?php
require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$nome_loja = utf8_decode($_POST['nome_loja']);
$texto = utf8_decode($_POST['texto_loja']);
$video_loja = $_POST['video_loja'];
$responsavel = utf8_decode($_SESSION['utiliza']);
$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel = utf8_decode($_SESSION['utiliza']);

$sql = "INSERT INTO lojas (descricao, texto, video_loja,dat_cadastro, hor_cadastro, responsavel)
VALUES ('$nome_loja', '$texto', '$video_loja', '$data_cadastro', '$hora_cadastro', '$responsavel')";

$ResultLog = mysqli_query($conectar, $sql);

echo "<script>alert('Cadastro de Loja realizado com sucesso!'); window.location=\"cad_loja.php\"</script>";

?>