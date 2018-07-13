<?php
    include('config/function.php');

    $row_RecordsetConfig = montaQuery('', 'config_site', '', $conectar);
    $row_RecordsetLoja = montaQuery('', 'lojas', '', $conectar);
    $queryMarcas = montaListaQuery('', 'marcas', '','', $conectar);
    $row_RecordsetMarcas = mysqli_fetch_assoc($queryMarcas);

    $quem_somos="Quem Somos";
    $como_comprar="Como Comprar";
    $termos_uso="Termos de Uso";
    $entrega_retirada="Entrega e Retirada";
    $perguntas_frequentes="Perguntas Frequentes";
    $contato_fone = "Ligamos para";
    $dicas="Dicas";
    $tendencias=utf8_encode("Tendências");
    $newsletter="Newsletter";
    $cadastro="Cadastro";
    $parceiros = "Parceiros";
    $marcas = "Marcas";
    $info_espec = utf8_encode("Informações Especiais");
    $revenda = "Revenda";

    session_start();

    $_SESSION['lojasbuscadas'] = $row_RecordsetConfig['numero_loja'];
	$_SESSION['contatotelefone'] = $contato_fone;
	$_SESSION['contatonewsletter'] = $newsletter;
	$_SESSION['contatorevenda'] = $revenda;
?>
