<?php
require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$tipo_problema = utf8_decode($_POST['tipo_problema']);
$descricao_problema = utf8_decode($_POST['descricao_problema']);
$solucao_problema = utf8_decode($_POST['solucao_problema']);
$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel = utf8_decode($_SESSION['utiliza']);

$sql = "INSERT INTO solucoes (tipo_problema, descricao, solucao, dat_cadastro, hor_cadastro, responsavel)
VALUES ('$tipo_problema', '$descricao_problema', '$solucao_problema', '$data_cadastro', '$hora_cadastro', '$responsavel')";

$ResultLog = mysqli_query($conectar, $sql);

echo "<script>alert('Cadastro de Banco de Solução realizado com sucesso!'); window.location=\"cad_solucao.php\"</script>";

?>