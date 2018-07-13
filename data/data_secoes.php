<?php
    $filtro_artigo = utf8_decode($_GET['var']);
    $sqlSecoes = "SELECT * FROM secoes_site WHERE titulo LIKE '%$filtro_artigo%'";
    $querySecoes = mysqli_query($conectar, $sqlSecoes);
    $row_RecordsetSecoes = mysqli_fetch_assoc($querySecoes);
    $totalRows_RecordsetSecoes = mysqli_num_rows($querySecoes);
?>
