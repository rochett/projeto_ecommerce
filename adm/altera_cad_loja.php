<?php

require_once('Connections/conectar.php');

session_start();

$nome_loja = utf8_decode($_POST['nome_loja']);
$texto = utf8_decode($_POST['texto_loja']);
$video_loja = $_POST['video_loja'];
$responsavel = utf8_decode($_SESSION['utiliza']);

$id_loja = $_GET['var_loj'];

$sql = "UPDATE lojas SET descricao='$nome_loja', texto='$texto_loja', video_loja='$video_loja', responsavel='$responsavel' WHERE id=$id_loja";
$Result = mysqli_query($conectar, $sql);

echo "<script>alert('Edição de Loja realizada com sucesso!'); window.location=\"lista_loja.php\"</script>";

?>