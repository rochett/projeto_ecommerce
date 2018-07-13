<?php

require_once('Connections/conectar.php');

session_start();

$nome_status = utf8_decode($_POST['nome_status']);
$responsavel = utf8_decode($_SESSION['utiliza']);

$id_status = $_GET['var_sta'];

$sql = "UPDATE status SET descricao='$nome_status', responsavel='$responsavel' WHERE id=$id_status";
$Result = mysqli_query($conectar, $sql);

echo "<script>alert('Edição de Status realizada com sucesso!'); window.location=\"lista_status.php\"</script>";

?>