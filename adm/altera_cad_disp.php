<?php

require_once('Connections/conectar.php');

session_start();

$nome_disponibilidade = utf8_decode($_POST['nome_disponibilidade']);
$responsavel = utf8_decode($_SESSION['utiliza']);

$id_disponibilidade = $_GET['var_disp'];

$sql = "UPDATE disponibilidade SET descricao='$nome_disponibilidade', responsavel='$responsavel' WHERE id=$id_disponibilidade";
$Result = mysqli_query($conectar, $sql);

echo "<script>alert('Edição de Disponibilidade realizada com sucesso!'); window.location=\"lista_disp.php\"</script>";

?>