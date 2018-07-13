<?php
    $queryContaRelacionados = montaListaQuery($filtra_categoria, 'produtos', 'categoria','ORDER BY dat_cadastro DESC', $conectar);
    $row_RecordsetProdutosRelacionados  = mysqli_fetch_assoc($queryContaRelacionados);
    $totalRows_RecordsetProdutosRelacionados  = mysqli_num_rows($queryContaRelacionados);
?>
