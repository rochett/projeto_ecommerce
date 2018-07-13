<?php

require_once('Connections/conectar.php');

session_start();

$nome_tamanho = utf8_decode($_POST['nome_tamanho']);
$responsavel = utf8_decode($_SESSION['utiliza']);

$id_tamanho = $_GET['var_tam'];

$sql = "UPDATE tamanho SET descricao='$nome_tamanho', responsavel='$responsavel' WHERE id=$id_tamanho";
$Result = mysqli_query($conectar, $sql);

echo "<script>alert('Edição de Tamanho realizada com sucesso!'); window.location=\"lista_tamanho.php\"</script>";

?>