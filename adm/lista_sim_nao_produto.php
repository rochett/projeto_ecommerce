<?php
    if($nome == 'produto'){
        $nome = 'exibir_'.$nome;
    }
    if($nome == 'capa'){
        $nome = $nome.'_site';
    }
    if($nome == 'video'){
        $nome = $nome.'_produto';
    }
    $selected = '';
    if ($row_Recordset[$nome] == '1') {
        $selected = 'selected';
    }
?>
    <option value="">-- Selecione uma Opção --</option>
    <option value="1" <?php echo $selected ?>>Sim</option>
    <?php
    $selected = '';
    if ($row_Recordset[$nome] == '0') {
        $selected = 'selected';
    }
    ?>
    <option value="0" <?php echo $selected ?>>Não</option>