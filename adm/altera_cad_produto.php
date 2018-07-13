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

$id_produto = $_GET['var_pro'];

$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H") - 2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel = utf8_decode($_SESSION['utiliza']);

$sql = "UPDATE produtos SET nome='$nome_produto', descricao='$descricao_produto', marca='$marca_produto', detalhes='$detalhe_produto', peso='$peso_produto', largura='$largura', altura='$altura', comprimento='$comprimento', loja='$loja_produto', quantidade='$quant_produto', link_video='$video_produto', link_video_capa='$destaque_video', video_produto='$exibir_video', disponibilidade='$disponibilidade_produto', preco_venda='$preco_venda', preco_promocional='$preco_promocao', exibir_preco_venda='$exibir_preco_venda', exibir_preco_promocional='$exibir_preco_promocao', dat_comeco_promocao='$data_comeco_promocao', dat_fim_promocao='$data_fim_promocao', categoria='$categoria_produto', imagem_destaque='$destaque_imagem', imagem_sobre_destaque='$destaque_sobre', imagem_oferta='$destaque_oferta', imagem_normal='$destaque_normal', imagem_ampliar='$destaque_ampliar', imagem_extra='$destaque_extra', exibir_produto='$exibir_produto', oferta='$exibir_oferta', destaque='$exibir_destaque', novidade='$exibir_novidade', capa_site='$exibir_capa', dat_cadastro='$data_cadastro', hor_cadastro='$hora_cadastro' WHERE id=$id_produto";
$ResultLog = mysqli_query($conectar, $sql);

echo "<script>alert('Edição de Produto realizada com sucesso!'); window.location=\"lista_produto.php\"</script>";
?>