<?php

require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$tipo_problema = utf8_decode($_POST['tipo_problema']);
$descricao_problema = utf8_decode($_POST['descricao_problema']);
$solucao_problema = utf8_decode($_POST['solucao_problema']);
$responsavel = utf8_decode($_SESSION['utiliza']);

$id_solucao = $_GET['var_sol'];

$sqlAltSol = "UPDATE solucoes SET tipo_problema='$tipo_problema', descricao='$descricao_problema', solucao='$solucao_problema', responsavel='$responsavel' WHERE id=$id_solucao";
$ResultAltSol = mysqli_query($conectar, $sqlAltSol);

echo "<script>alert('Edição de Banco de Solução realizada com sucesso!'); window.location=\"lista_solucao.php\"</script>";

?>