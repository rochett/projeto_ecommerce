<?php
    $filtra_ampliar = $_GET['var'];
    $sqlAmpliaProduto = "SELECT * FROM produtos WHERE id=$filtra_ampliar";
    $queryAmpliaProduto = mysqli_query($conectar, $sqlAmpliaProduto);
    $row_RecordsetAmpliaProduto = mysqli_fetch_assoc($queryAmpliaProduto);
    $totalRows_RecordsetAmpliaProduto = mysqli_num_rows($queryAmpliaProduto);

    $tipo_imagem_ampliar = $_GET['pagina'];
    $imagem = $row_RecordsetAmpliaProduto['imagem_extra'];

    if ($tipo_imagem_ampliar == 'normal')
    {
        $imagem = $row_RecordsetAmpliaProduto['imagem_ampliar'];
    }
?>
