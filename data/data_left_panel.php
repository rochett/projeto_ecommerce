<?php
    $queryCategoriasProdutos = montaListaQuery('', 'categoria', '','', $conectar);
    $row_RecordsetCategoriasProdutos  = mysqli_fetch_assoc($queryCategoriasProdutos);
    $totalRows_RecordsetCategoriasProdutos  = mysqli_num_rows($queryCategoriasProdutos);
    $queryOfertas = montaListaQueryEsp('produtos', 'exibir_produto', 'oferta', 'ORDER BY dat_cadastro DESC', $conectar);
    $row_RecordsetOfertas = mysqli_fetch_assoc($queryOfertas);
    $queryNovidades = montaListaQueryEsp('produtos', 'exibir_produto', 'novidade', 'ORDER BY dat_cadastro DESC', $conectar);
    $row_RecordsetNovidades = mysqli_fetch_assoc($queryNovidades);
?>
