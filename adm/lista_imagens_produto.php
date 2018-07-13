<?php
    if($campo_imagem == 'imagem_sobre')
    {
        $campo_imagem = 'imagem_sobre_destaque';
    }
    $pasta = $_SESSION['pasta_imagens_produto'];
    $diretorio = dir($pasta);
    while (($arquivo = $diretorio->read()) !== false) {
        if ($arquivo != '.' and $arquivo != '..') {
            if (utf8_encode($row_Recordset[$campo_imagem]) == $arquivo) {
                $selected = 'selected';
            }else{
                $selected = '';
            }
            echo '<option value="'.$arquivo.'" '.$selected.'>'.$arquivo.'</option>';
        }
    }
    $diretorio->close();
?>

