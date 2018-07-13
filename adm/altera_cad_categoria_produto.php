<?php

require_once('Connections/conectar.php');

session_start();

$nome_categoria = utf8_decode($_POST['nome_categoria']);
$responsavel = utf8_decode($_SESSION['utiliza']);

$id_categoria = $_GET['var_cat'];

$sql = "UPDATE categoria SET descricao='$nome_categoria', responsavel='$responsavel' WHERE ID=$id_categoria";
$Result = mysqli_query($conectar, $sql);

echo "<script>alert('Edição de Categoria de Produto realizada com sucesso!'); window.location=\"lista_categoria_produto.php\"</script>";

?>