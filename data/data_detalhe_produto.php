<?php
    $filtra_marca=$row_RecordsetProduto['marca'];
    $filtra_disponibilidade=$row_RecordsetProduto['disponibilidade'];
    $filtra_loja=$row_RecordsetProduto['loja'];

    $queryCor = montaListaQuery('', 'cor', '','ORDER BY descricao ASC', $conectar);
    $row_RecordsetCor = mysqli_fetch_assoc($queryCor);
    $queryTamanho = montaListaQuery('', 'tamanho', '','ORDER BY descricao ASC', $conectar);
    $row_RecordsetTamanho = mysqli_fetch_assoc($queryTamanho);
    $row_RecordsetMarcas = montaQuery($filtra_marca, 'marcas', '', $conectar);
    $row_RecordsetDisponibilidade = montaQuery($filtra_disponibilidade, 'disponibilidade', '', $conectar);
    $row_RecordsetLojaProduto = montaQuery($filtra_loja, 'lojas', '', $conectar);
?>
