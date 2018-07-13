<?php
require_once('Connections/conectar.php');
include('config/base_local.php');
include('config/functions_sys.php');

session_start();

$nome_produto = utf8_decode($_POST['nome_produto']);
$descricao_produto = utf8_decode($_POST['descricao_produto']);
$marca_produto = $_POST['marca_produto'];
$detalhe_produto = utf8_decode($_POST['detalhe_produto']);
$peso_produto = $_POST['peso_produto'];
$largura = $_POST['largura_produto'];
$altura = $_POST['altura_produto'];
$comprimento = $_POST['comprimento_produto'];
$loja_produto = utf8_decode($_POST['loja_produto']);
$video_produto = $_POST['video_produto'];
$disponibilidade_produto = $_POST['disponibilidade_produto'];
$preco_venda = retiraMascaraMoeda($_POST['preco_venda']);
$exibir_preco_venda = $_POST['exibir_preco_venda'];
$preco_promocao = retiraMascaraMoeda($_POST['preco_promocao']);
$exibir_preco_promocao = $_POST['exibir_preco_promocao'];
$data_comeco_promocao = $_POST['data_comeco'];
$data_fim_promocao = $_POST['data_fim'];
$categoria_produto = $_POST['categoria_produto'];
$quant_produto = $_POST['quant_produto'];
$destaque_video = $_POST['video_destaque'];
$destaque_sobre = $_POST['sobre_imagem'];
$destaque_oferta = $_POST['oferta_imagem'];
$destaque_normal = $_POST['normal_imagem'];
$destaque_ampliar = $_POST['ampliar_imagem'];
$destaque_extra = $_POST['extra_imagem'];
$destaque_imagem = $_POST['destaque_imagem'];
$exibir_produto = utf8_decode($_POST['exibir_produto']);
$exibir_oferta = utf8_decode($_POST['exibir_oferta']);
$exibir_destaque = utf8_decode($_POST['exibir_destaque']);
$exibir_novidade = utf8_decode($_POST['exibir_novidade']);
$exibir_capa = utf8_decode($_POST['exibir_capa']);
$exibir_video = utf8_decode($_POST['exibir_video']);

$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H") - 2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel = utf8_decode($_SESSION['utiliza']);

$sql = "INSERT INTO produtos (nome, descricao, marca, detalhes, peso, largura, altura, comprimento, loja, quantidade, link_video, link_video_capa, video_produto, disponibilidade, preco_venda, preco_promocional, exibir_preco_venda, exibir_preco_promocional, dat_comeco_promocao, dat_fim_promocao, categoria, imagem_destaque, imagem_sobre_destaque, imagem_oferta, imagem_normal, imagem_ampliar, imagem_extra, exibir_produto, oferta, destaque, novidade, capa_site, dat_cadastro, hor_cadastro, responsavel)
VALUES ('$nome_produto', '$descricao_produto', '$marca_produto', '$detalhe_produto', '$peso_produto', '$largura', '$altura', '$comprimento', '$loja_produto','$quant_produto' , '$video_produto', '$destaque_video', '$exibir_video', '$disponibilidade_produto', '$preco_venda', '$preco_promocao', '$exibir_preco_venda', '$exibir_preco_promocao', '$data_comeco_promocao', '$data_fim_promocao', '$categoria_produto', '$destaque_imagem', '$destaque_sobre', '$destaque_oferta', '$destaque_normal', '$destaque_ampliar', '$destaque_extra', '$exibir_produto', '$exibir_oferta', '$exibir_destaque', '$exibir_novidade', '$exibir_capa', '$data_cadastro', '$hora_cadastro', '$responsavel')";

$ResultLog = mysqli_query($conectar, $sql);

echo "<script>alert('Cadastro de Produto realizado com sucesso!'); window.location=\"cad_produto.php\"</script>";
?>