<?php
    $query=$conectar->query($sql);
    $total=$query->num_rows;
    $query->free();
    if(@$_GET['pagina']=="") {
        $pagina="1";
    } else {
        $pagina=$_GET['pagina'];
    }
    $maximo=$filtro_limite;
    if(@$pagina=="" || @$pagina=="1") {
        $valor = 0;
    } else {
        $valor = $_GET['valor'];
    }
    $inicio=$pagina-1;
    $inicio=$maximo*$inicio;
?>

