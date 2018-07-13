<?php
require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$nome_disponibilidade = utf8_decode($_POST['nome_disponibilidade']);
$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel = utf8_decode($_SESSION['utiliza']);

$sql = "INSERT INTO disponibilidade (descricao, dat_cadastro, hor_cadastro, responsavel)
VALUES ('$nome_disponibilidade', '$data_cadastro', '$hora_cadastro', '$responsavel')";

$ResultLog = mysqli_query($conectar, $sql);

echo "<script>alert('Cadastro de Disponibilidade realizado com sucesso!'); window.location=\"cad_disp.php\"</script>";

?>