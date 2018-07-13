<?php
require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$nome_categoria = utf8_decode($_POST['nome_categoria']);
$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel = utf8_decode($_SESSION['utiliza']);

$sql = "INSERT INTO categoria (descricao, dat_cadastro, hor_cadastro, responsavel)
VALUES ('$nome_categoria', '$data_cadastro', '$hora_cadastro', '$responsavel')";

$ResultLog = mysqli_query($conectar, $sql);

echo "<script>alert('Cadastro de Categoria de Produto realizado com sucesso!'); window.location=\"cad_categoria_produto.php\"</script>";

?>