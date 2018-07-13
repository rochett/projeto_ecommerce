<?php

require_once('Connections/conectar.php');

session_start();

$nome_oferta = utf8_decode($_POST['nome_oferta']);
$texto = utf8_decode($_POST['texto_oferta']);
$imagem = $_POST['oferta_imagem'];
$exibir = $_POST['exibir_oferta'];
$posicao = $_POST['posicao_oferta'];
$responsavel = utf8_decode($_SESSION['utiliza']);

$id_oferta = $_GET['var_ofe'];

$sql = "UPDATE ofertas_site SET titulo='$nome_oferta', texto='$texto', imagem='$imagem', posicao='$posicao', exibir='$exibir', responsavel='$responsavel' WHERE id=$id_oferta";
$Result = mysqli_query($conectar, $sql);

echo "<script>alert('Edição de Oferta da Loja realizada com sucesso!'); window.location=\"lista_oferta.php\"</script>";

?>