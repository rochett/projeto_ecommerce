<?php

require_once('Connections/conectar.php');

session_start();

$nome_cor = utf8_decode($_POST['nome_cor']);
$responsavel = utf8_decode($_SESSION['utiliza']);

$id_cor = $_GET['var_cor'];

$sql = "UPDATE cor SET descricao='$nome_cor', responsavel='$responsavel' WHERE ID=$id_cor";
$Result = mysqli_query($conectar, $sql);

echo "<script>alert('Edição de Cor realizada com sucesso!'); window.location=\"lista_cor.php\"</script>";

?>