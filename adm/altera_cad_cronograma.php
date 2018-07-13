<?php

require_once('Connections/conectar.php');

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
$responsavel = utf8_decode($_SESSION['utiliza']);

$id_cronograma = $_GET['var_crm'];

$sql = "UPDATE crono_eventos SET titulo='$titulo_cronograma', dat_comeco='$data_inicio', dat_final='$data_fim', hor_inicial='$hora_inicio', hor_final='$hora_fim', dia_inteiro='$dia_inteiro', loja='$loja_cronograma', observacao='$observacao_cronograma', status='$status_cronograma', responsavel='$responsavel' WHERE id=$id_cronograma";
$Result = mysqli_query($conectar, $sql);

echo "<script>alert('Edição de Cronograma de Manutenção realizada com sucesso!'); window.location=\"lista_cronograma.php\"</script>";

?>