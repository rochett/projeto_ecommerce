<?php

require_once('Connections/conectar.php');

session_start();

$nome_marca = utf8_decode($_POST['nome_marca']);
$link_site = $_POST['link_site'];
$imagem = $_POST['marca_imagem'];
$responsavel = utf8_decode($_SESSION['utiliza']);

$id_marca = $_GET['var_mar'];

$sql = "UPDATE marcas SET nome='$nome_marca', link_site='$link_site', imagem='$imagem', responsavel='$responsavel' WHERE id=$id_marca";
$Result = mysqli_query($conectar, $sql);

echo "<script>alert('Edição de Marca realizada com sucesso!'); window.location=\"lista_marca.php\"</script>";

?>