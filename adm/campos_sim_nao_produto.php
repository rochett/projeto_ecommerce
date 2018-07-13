<?php
    $select = array();
    $select['produto'] = 'produto';
    $select['oferta'] = 'oferta';
    $select['destaque'] = 'destaque';
    $select['novidade'] = 'novidade';
    $select['frente'] = 'capa';
    $select['video'] = 'video';
    foreach ($select as $nome) {
        echo montaCabecalhoExibirSimNao($nome);
        $campo_imagem = $nome;
        include('lista_sim_nao_produto.php');
        echo montaRodapeExibirSimNao($nome);
    }
?>

