<?php
    $filtra_categoria=$row_RecordsetProduto['categoria'];
    $filtra_lojadoproduto=$row_RecordsetProduto['loja'];
    $row_RecordsetCategoria = montaQuery($filtra_categoria, 'categoria', '', $conectar);
    $row_RecordsetLojadoProduto = montaQuery($filtra_lojadoproduto, 'lojas', '', $conectar);
?>
