<?php
	$filtro_contagemprodutos=$row_RecordsetCategoriasProdutos['id'];
	$queryContagemProdutos = montaListaQuery($filtro_contagemprodutos, 'produtos', 'categoria','ORDER BY dat_cadastro DESC', $conectar);
	$row_RecordsetContagemProdutos = mysqli_fetch_assoc($queryContagemProdutos);
	$totalRows_RecordsetContagemProdutos = mysqli_num_rows($queryContagemProdutos);
?>

