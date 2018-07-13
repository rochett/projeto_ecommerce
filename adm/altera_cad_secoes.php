<?php
require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$nome_secao = utf8_decode($_POST['nome_secao']);
$texto = utf8_decode($_POST['texto_secao']);
$imagem = $_POST['secao_imagem'];
$responsavel = utf8_decode($_SESSION['utiliza']);

$id_secoes = $_GET['var_sec'];

$sql = "UPDATE secoes_site SET titulo='$nome_secao', texto='$texto', imagem='$imagem', responsavel='$responsavel' WHERE id=$id_secoes";
$Result = mysqli_query($conectar, $sql);

echo "<script>alert('Edição de Seção do Site realizada com sucesso!'); window.location=\"lista_secoes.php\"</script>";

?>