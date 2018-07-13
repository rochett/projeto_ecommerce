<?php

include('config/function.php');

session_start();

$link_retorna = 'produto.php';
$pag_retorno = $_GET['pag_retorno'];
$filtra_produto = $_GET['produto'];
$codigo = $_POST['id_prod'];
$nome = $_POST['nome_prod'];
$cor = $_POST['cor'];
$tamanho = $_POST['tamanho'];
$quantidade = $_POST['itemQuantity'];
$valor = $_POST['preco_prod'];
$peso = ($_POST['peso_prod'] / 1000);
$marca = $_POST['marca_prod'];
$cep_destino = $_POST['cep_destino'];
$tipo_servico = $_POST['tipo_servico'];
$largura = $_POST['largura_prod'];
$altura = $_POST['altura_prod'];
$comprimento = $_POST['comprimento_prod'];

if( $tipo_servico == 40010 ) $servico = 'SEDEX' ;
if( $tipo_servico == 41106 ) $servico = 'PAC' ;

$peso_final = number_format(($peso * $quantidade), 3, ".", ",");
$valor_final = number_format(($valor * $quantidade), 2, ",", ".");

$_resultado = calculaFrete(
    $tipo_servico,
    '20081902',
    $cep_destino,
    $peso_final,
    15, 22, 32, 0);


if ($pag_retorno==2){
    $link_retorna = 'produto_imagem.php';
}

header("Location: ".$link_retorna."?var=".$filtra_produto."&cor=".$cor."&tamanho=".$tamanho."&servico=".$servico."&codigo=" . $_resultado['codigo'] . "&valor=" . $_resultado['valor'] . "&prazo=" . $_resultado['prazo'] . "&preco_total=" . $valor_final."&cep=".$cep_destino."&quantidade=".$quantidade);
?>

