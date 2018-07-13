<?php

require_once('Connections/conectar.php');

session_start();

$nome_slider = utf8_decode($_POST['nome_slider']);
$texto = utf8_decode($_POST['texto_slider']);
$imagem = $_POST['slider_imagem'];
$exibir = $_POST['exibir_slider'];
$responsavel = utf8_decode($_SESSION['utiliza']);

$id_slider = $_GET['var_sli'];

$sql = "UPDATE slider_site SET titulo='$nome_slider', texto='$texto', imagem='$imagem', exibir='$exibir', responsavel='$responsavel' WHERE id=$id_slider";
$Result = mysqli_query($conectar, $sql);

echo "<script>alert('Edição de Slider da Loja realizada com sucesso!'); window.location=\"lista_slider.php\"</script>";

?>