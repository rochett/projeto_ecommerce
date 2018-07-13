<?php
    $queryProdutos = montaListaQueryEsp('produtos', 'exibir_produto', 'destaque', 'ORDER BY dat_cadastro DESC', $conectar);
    $row_RecordsetProdutos = mysqli_fetch_assoc($queryProdutos);
    $queryOfertas = montaListaQueryEsp('produtos', 'exibir_produto', 'oferta', 'ORDER BY dat_cadastro DESC', $conectar);
    $row_RecordsetOfertas = mysqli_fetch_assoc($queryOfertas);
    $queryCapaSite = montaListaQueryEsp('produtos', 'exibir_produto', 'capa_site', 'ORDER BY dat_cadastro DESC', $conectar);
    $row_RecordsetCapaSite = mysqli_fetch_assoc($queryCapaSite);
?>

