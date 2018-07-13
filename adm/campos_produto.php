<?php

if (isset($_GET['var_pro'])) {
    $value_nome_produto = utf8_encode($row_Recordset['nome']);
    $value_desc_produto = utf8_encode($row_Recordset['descricao']);
    $value_det_produto = utf8_encode($row_Recordset['detalhes']);
    $value_quant_produto = $row_Recordset['quantidade'];
    $value_link_video_produto = utf8_encode($row_Recordset['link_video']);
    $value_peso_produto = $row_Recordset['peso'];
	$value_altura_produto = $row_Recordset['altura'];
	$value_largura_produto = $row_Recordset['largura'];
	$value_comprimento_produto = $row_Recordset['comprimento'];
    $value_preco_venda_produto = $row_Recordset['preco_venda'];
    $value_preco_promocional_produto = $row_Recordset['preco_promocional'];
    if (date("Y-m-d", strtotime($row_Recordset['dat_comeco_promocao'])) != '1970-01-01') {
        $data_inicio_promocao_produto = date("Y-m-d", strtotime($row_Recordset['dat_comeco_promocao']));
    }else{
        $data_inicio_promocao_produto = '';
    }
    if (date("Y-m-d", strtotime($row_Recordset['dat_fim_promocao'])) != '1970-01-01') {
        $data_fim_promocao_produto = date("Y-m-d", strtotime($row_Recordset['dat_fim_promocao']));
    }else{
        $data_fim_promocao_produto = '';
    }
} else {
    $value_nome_produto = '';
    $value_desc_produto = '';
    $value_det_produto = '';
    $value_quant_produto = 0;
    $value_link_video_produto = '';
    $value_peso_produto = 0;
	$value_altura_produto = 0;
	$value_largura_produto = 0;
	$value_comprimento_produto = 0;
    $value_preco_venda_produto = 0;
    $value_preco_promocional_produto = 0;
    $data_inicio_promocao_produto = '';
    $data_fim_promocao_produto = '';
    $row['id'] = '';
    $row_Recordset['marca'] = '';
    $row_Recordset['loja'] = '';
    $row_Recordset['disponibilidade'] = '';
    $row_Recordset['categoria'] = '';
    $row_Recordset['disponibilidade'] = '';
    $row_Recordset['link_video_capa'] = '';
    $row_Recordset['imagem_sobre_destaque'] = '';
    $row_Recordset['imagem_oferta'] = '';
    $row_Recordset['imagem_normal'] = '';
    $row_Recordset['imagem_ampliar'] = '';
    $row_Recordset['imagem_extra'] = '';
    $row_Recordset['imagem_destaque'] = '';
    $row_Recordset['exibir_produto'] = '';
    $row_Recordset['oferta'] = '';
    $row_Recordset['destaque'] = '';
    $row_Recordset['novidade'] = '';
    $row_Recordset['capa_site'] = '';
    $row_Recordset['video_produto'] = '';
    $row_Recordset['exibir_preco_venda'] = '';
    $row_Recordset['exibir_preco_promocional'] = '';
}

?>
<div class="control-group">
    <label for="textfield" class="control-label">Nome</label>
    <div class="controls">
        <input type="text" name="nome_produto" id="nome_produto" class="input-xlarge"
               placeholder="Informe o nome do produto" rel="tooltip"
               title="Nome do Produto" value="<?php echo $value_nome_produto ?>" required>
    </div>
</div>
<div class="control-group">
    <label for="textarea" class="control-label">Descrição</label>
    <div class="controls">
                                    <textarea rows="5" name="descricao_produto" id="descricao_produto"
                                              class="input-block-level" placeholder="Informe a descrição do produto"
                                              rel="tooltip" title="Descrição do Produto"
                                              required><?php echo $value_desc_produto ?></textarea>
    </div>
</div>
<div class="control-group">
    <label for="password" class="control-label">Marca</label>
    <div class="controls">
        <select name="marca_produto" id="marca_produto" class='select2-me input-xlarge'
                required>
            <option value="">-- Selecione um Marca --</option>
            <?php

            $sql = "SELECT id, nome FROM marcas ORDER BY nome";
            $res = mysqli_query($conectar, $sql);
            while ($row = mysqli_fetch_assoc($res)) {
                if ($row_Recordset['marca'] == $row['id']) {
                    $selected = 'selected';
                }else{
                    $selected = '';
                }
                echo '<option value="'.$row['id'].'" '.$selected.'>'.utf8_encode($row['nome']).'</option>';
            }
            ?>
        </select>
    </div>
</div>
<div class="control-group">
    <label for="textarea" class="control-label">Detalhe</label>
    <div class="controls">
                                    <textarea rows="5" name="detalhe_produto" id="detalhe_produto"
                                              class="input-block-level" placeholder="Informe os detalhes do produto"
                                              rel="tooltip" title="Informações sobre o Produto"
                                              required><?php echo $value_det_produto ?></textarea>
    </div>
</div>
<div class="control-group">
    <label for="textfield" class="control-label">Peso</label>
    <div class="controls">
        <div class="input-prepend">
            <span class="add-on">Gr</span>
            <input type="text" class='input-small form-control weight' name="peso_produto"
                   id="peso_produto" placeholder="Peso" dir="rtl" rel="tooltip"
                   title="Informe o peso (em gramas) do produto" value="<?php echo $value_peso_produto; ?>" required>
        </div>
    </div>
</div>
<div class="control-group">
    <label for="textfield" class="control-label">Dimensões</label>
    <div class="controls">
        <div class="input-prepend">
            <span class="add-on">Al</span>
            <input type="text" class='input-small form-control spenumeric' name="altura_produto"
                   id="altura_produto" placeholder="Altura" dir="rtl" rel="tooltip"
                   title="Informe a altura (cm) do produto" value="<?php echo $value_altura_produto; ?>" required>&nbsp;
        </div>       
        <div class="input-prepend">
           	<span class="add-on">La</span>
           		<input type="text" class='input-small form-control spenumeric' name="largura_produto"
              		   id="largura_produto" placeholder="Largura" dir="rtl" rel="tooltip"
                   	   title="Informe a largura (cm) do produto" value="<?php echo $value_largura_produto; ?>" required>&nbsp;
        </div>
        <div class="input-prepend">
            <span class="add-on">Co</span>
        	    <input type="text" class='input-small form-control spenumeric' name="comprimento_produto"
            	       id="comprimento_produto" placeholder="Comprimento" dir="rtl" rel="tooltip"
                	   title="Informe o comprimento (cm) do produto" value="<?php echo $value_comprimento_produto; ?>" required>
        </div>               
    </div>    
</div>
<div class="control-group">
    <label for="password" class="control-label">Loja</label>
    <div class="controls">
        <select name="loja_produto" id="loja_produto" class='select2-me input-xlarge'
                required>
            <option value="">-- Selecione uma Loja --</option>
            <?php

            $sql = "SELECT id, descricao FROM lojas ORDER BY descricao";
            $res = mysqli_query($conectar, $sql);
            while ($row = mysqli_fetch_assoc($res)) {
                if ($row_Recordset['loja'] == $row['id']) {
                    $selected = 'selected';
                }else{
                    $selected = '';
                }
                echo '<option value="'.$row['id'].'" '.$selected.'>'.utf8_encode($row['descricao']).'</option>';
            }
            ?>
        </select>
    </div>
</div>
<div class="control-group">
    <label for="textfield" class="control-label">Link Video</label>
    <div class="controls">
        <input type="text" name="video_produto" id="video_produto" class="input-xlarge"
               placeholder="Informe o video do produto" rel="tooltip"
               title="Video do Produto" value="<?php echo $value_link_video_produto; ?>" required>
    </div>
</div>

<div class="control-group">
    <label for="password" class="control-label">Disponibilidade</label>
    <div class="controls">
        <select name="disponibilidade_produto" id="disponibilidade_produto"
                class='select2-me input-xlarge' required>
            <option value="">-- Selecione uma Disponibilidade --</option>
            <?php

            $sql = "SELECT id, descricao FROM disponibilidade ORDER BY descricao";
            $res = mysqli_query($conectar, $sql);
            while ($row = mysqli_fetch_assoc($res)) {
                if ($row_Recordset['disponibilidade'] == $row['id']) {
                    $selected = 'selected';
                }else{
                    $selected = '';
                }
                echo '<option value="'.$row['id'].'" '.$selected.'>'.utf8_encode($row['descricao']).'</option>';
            }
            ?>
        </select>
    </div>
</div>
<div class="control-group">
    <label for="textfield" class="control-label">Preço de Venda</label>
    <div class="controls">
        <div class="input-prepend">
            <span class="add-on">R$</span>
            <input type="text" class='input-small form-control money2' name="preco_venda"
                   id="preco_venda" placeholder="Preço" dir="rtl" rel="tooltip"
                   title="Informe o valor do produto" value="<?php echo $value_preco_venda_produto; ?>" required>
        </div>
        <select name="exibir_preco_venda" id="exibir_preco_venda"
                class='select2-me input-xlarge' required>
            <option value="">-- Exibir Preço de Venda? --</option>
            <?php
                $selected = '';
                if ($row_Recordset['exibir_preco_venda'] == '1') {
                    $selected = 'selected';
                }
            ?>
            <option value="1" <?php echo $selected ?>>Sim</option>
            <?php
                $selected = '';
                if ($row_Recordset['exibir_preco_venda'] == '0') {
                    $selected = 'selected';
                }
            ?>
            <option value="0" <?php echo $selected ?>>Não</option>
        </select>
    </div>
</div>
<div class="control-group">
    <label for="textfield" class="control-label">Preço Promocional</label>
    <div class="controls">
        <div class="input-prepend">
            <span class="add-on">R$</span>
            <input type="text" class='input-small form-control money2' name="preco_promocao"
                   id="preco_promocao" placeholder="Preço" dir="rtl" rel="tooltip"
                   title="Informe o valor promocional do produto" value="<?php echo $value_preco_promocional_produto; ?>" required>
        </div>
        <select name="exibir_preco_promocao" id="exibir_preco_promocao"
                class='select2-me input-xlarge' required>
            <option value="">-- Exibir Preço Promocional? --</option>
            <?php
                $selected = '';
                if ($row_Recordset['exibir_preco_promocional'] == '1') {
                    $selected = 'selected';
                }
            ?>
            <option value="1" <?php echo $selected ?>>Sim</option>
            <?php
                $selected = '';
                if ($row_Recordset['exibir_preco_promocional'] == '0') {
                    $selected = 'selected';
                }
            ?>
            <option value="0" <?php echo $selected ?>>Não</option>
        </select>
    </div>
</div>
<div class="control-group">
    <label for="textfield" class="control-label">Início/Fim Prom.</label>
    <div class="controls">
        <input type="date" name="data_comeco" id="data_comeco" placeholder="dd/mm/aaaa"
               class="input-medium" rel="tooltip" title="Data de Início da Promoção"
               value="<?php echo $data_inicio_promocao_produto; ?>">&nbsp;&nbsp;
        <input type="date" name="data_fim" id="data_fim" placeholder="dd/mm/aaaa"
               class="input-medium" rel="tooltip" title="Data do Fim da Promoção"
               value="<?php echo $data_fim_promocao_produto; ?>">
    </div>
</div>

<div class="control-group">
    <label for="password" class="control-label">Categoria</label>
    <div class="controls">
        <select name="categoria_produto" id="categoria_produto"
                class='select2-me input-xlarge' required>
            <option value="">-- Selecione uma Categoria --</option>
            <?php

            $sql = "SELECT id, descricao FROM categoria ORDER BY descricao";
            $res = mysqli_query($conectar, $sql);
            while ($row = mysqli_fetch_assoc($res)) {
                if ($row_Recordset['categoria'] == $row['id']) {
                    $selected = 'selected';
                }else{
                    $selected = '';
                }
                echo '<option value="'.$row['id'].'" '.$selected.'>'.utf8_encode($row['descricao']).'</option>';
            }
            ?>
        </select>
    </div>
</div>
<div class="control-group">
    <label for="textfield" class="control-label">Quantidade</label>
    <div class="controls">
        <div class="input-prepend">
            <input type="text" class='input-small form-control spenumeric' name="quant_produto"
                   id="quant_produto" placeholder="0" min="0" dir="rtl" rel="tooltip" 
                   title="Informe a quantidade do produto" value="<?php echo $value_quant_produto; ?>" required>
        </div>
    </div>
</div>
<div class="control-group">
    <label for="password" class="control-label">Destaque</label>
    <div class="controls">
        <select name="video_destaque" id="video_destaque" class='select2-me input-xlarge'>
            <option value="">-- Selecione um Arquivo --</option>
            <?php
            $pasta = $_SESSION['pasta_videos'];
            $diretorio = dir($pasta);
            while(($arquivo = $diretorio->read()) !== false) {
                if ($arquivo != '.' and $arquivo != '..') {
                    if (utf8_encode($row_Recordset['link_video_capa']) == $arquivo) {
                        $selected = 'selected';
                    }else{
                        $selected = '';
                    }
                    echo '<option value="'.$arquivo.'" '.$selected.'>'.$arquivo.'</option>';
                }
            }
            $diretorio->close();
            ?>
        </select>
    </div>
</div>

<?php
include('campos_imagem_produto.php');
include('campos_sim_nao_produto.php');
?>
