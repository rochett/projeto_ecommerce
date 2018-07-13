<?php
require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$titulo_cronograma = utf8_decode($_POST['titulo_cronograma']);
$data_inicio = date("Y-m-d", strtotime($_POST['data_inicio']));
$data_fim = date("Y-m-d", strtotime($_POST['data_fim']));
$hora_inicio = $_POST['hora_inicio'];
$hora_fim = $_POST['hora_fim'];
$dia_inteiro = $_POST['dia_inteiro'];
$observacao_cronograma = utf8_decode($_POST['observacao_cronograma']);
$responsavel_cronograma = $_POST['responsavel_cronograma'];
$status_cronograma = $_POST['status_cronograma'];
$loja_cronograma = $_POST['loja_cronograma'];
$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H") - 2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel = utf8_decode($_SESSION['utiliza']);

$sql = "INSERT INTO crono_eventos (titulo, dat_comeco, dat_final, hor_inicial, hor_final, dia_inteiro, loja, dat_cadastro, hor_cadastro, observacao, status, responsavel)
VALUES ('$titulo_cronograma', '$data_inicio', '$data_fim', '$hora_inicio', '$hora_fim', '$dia_inteiro', '$loja_cronograma', '$data_cadastro', '$hora_cadastro', '$observacao_cronograma', '$status_cronograma', '$responsavel')";

$ResultLog = mysqli_query($conectar, $sql);

echo "<script>alert('Cadastro de Cronograma de Evento realizado com sucesso!'); window.location=\"cad_cronograma.php\"</script>";

?>