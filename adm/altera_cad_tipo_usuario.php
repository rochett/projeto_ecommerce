<?php

require_once('Connections/conectar.php');

session_start();

$nome_tipo_usuario = utf8_decode($_POST['nome_tipo_usuario']);
$responsavel = utf8_decode($_SESSION['utiliza']);

$id_tipo_usuario = $_GET['var_tus'];

$sqlAltMar = "UPDATE tipo_usuario SET descricao='$nome_tipo_usuario', responsavel='$responsavel' WHERE id=$id_tipo_usuario";
$ResultAltMar = mysqli_query($conectar, $sqlAltMar);

echo "<script>alert('Edição de Tipo de Usuário realizada com sucesso!'); window.location=\"lista_tipo_usuario.php\"</script>";

?>