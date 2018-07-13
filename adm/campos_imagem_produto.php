<?php
    $select = array();
    $select['sobre'] = 'sobre';
    $select['ofertas'] = 'oferta';
    $select['normal'] = 'normal';
    $select['ampliar'] = 'ampliar';
    $select['extra'] = 'extra';
    $select['destaque'] = 'destaque';
    foreach ($select as $nome) {
        echo montaCabecalhoSelectImagem($nome);
        $campo_imagem = 'imagem_'.$nome;
        include('lista_imagens_produto.php');
        echo montaRodapeSelectImagem($nome);
    }
?>
