<?php
require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$nome_tamanho = utf8_decode($_POST['nome_tamanho']);
$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel = utf8_decode($_SESSION['utiliza']);

$sql = "INSERT INTO tamanho (descricao, dat_cadastro, hor_cadastro, responsavel)
VALUES ('$nome_tamanho', '$data_cadastro', '$hora_cadastro', '$responsavel')";

$ResultLog = mysqli_query($conectar, $sql);

echo "<script>alert('Cadastro de Tamanho realizado com sucesso!'); window.location=\"cad_tamanho.php\"</script>";

?>