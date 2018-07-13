<?php
include("../Connections/conectar.php");

function telaAudio($tela)
{
    $tela_popover = $tela;
    return array($tela_popover);
}

function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false)
{
    $lmin = 'abcdefghijklmnopqrstuvwxyz';
    $lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $num = '1234567890';
    $simb = '!@#$%*-';
    $retorno = '';
    $caracteres = '';
    $caracteres .= $lmin;
    if ($maiusculas) $caracteres .= $lmai;
    if ($numeros) $caracteres .= $num;
    if ($simbolos) $caracteres .= $simb;
    $len = strlen($caracteres);
    for ($n = 1; $n <= $tamanho; $n++) {
        $rand = mt_rand(1, $len);
        $retorno .= $caracteres[$rand - 1];
    }
    return $retorno;
}

function removeAcentos($texto)
{
    $trocarIsso = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'não', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'não', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú', 'Ÿ',);
    $porIsso = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U', 'Y',);
    $titletext = str_replace($trocarIsso, $porIsso, $texto);
    $titletext = strtolower(str_replace(" ", "_", $titletext));
    return $titletext;
}

function montaQuery($field, $table, $conexao)
{
    $id_resultado = $field;
    $sqlRes = "SELECT * from $table WHERE id='$id_resultado'";
    if($field==''){
        $sqlRes = "SELECT * from $table";
    }
    $queryRes = mysqli_query($conexao, $sqlRes);
    $row_resultado = mysqli_fetch_assoc($queryRes);
    return $row_resultado;
}

function montaListaQuery($field, $table, $conexao)
{
    $id_resultado = $field;
    $sqlRes = "SELECT * from $table WHERE id='$id_resultado'";
    if ($field == '') {
        $sqlRes = "SELECT * from $table";
    }
    $queryRes = mysqli_query($conexao, $sqlRes);
    return $queryRes;
}

function montaQueryEsp($field, $table, $data_field, $conexao)
{
    $sqlRes = "SELECT * from $table WHERE $data_field='$field'";
    $queryRes = mysqli_query($conexao, $sqlRes);
    $row_resultado = mysqli_fetch_assoc($queryRes);
    return $row_resultado;
}

function exibeValor($valor)
{
    if ($valor == '1') {
        $exibe_resultado = 'Sim';
    } else {
        $exibe_resultado = 'Não';
    }
    return $exibe_resultado;
}

function formataMoeda($valor_puro)
{
    $valor_tratado = 'R$ ' . number_format($valor_puro, 2, ',', '.');
    return $valor_tratado;
}

function retiraMascaraMoeda($valor_puro)
{
    $valor_tratado = str_replace(',','.',str_replace('.','',$valor_puro));
    return $valor_tratado;
}

function formataPeso($peso)
{
    $peso_tratado = number_format(($peso / 1000), 3, ",", ".");
    return $peso_tratado;
}

function reduzTexto($texto)
{
    $desc_resumo = substr(utf8_encode(wordwrap($texto, 80, "<BR>", 1)), 0, 150) . '...';
    return $desc_resumo;
}

function exibeImagem($largura, $altura, $pasta, $imagem)
{
    $monta_imagem = '';
    if ($imagem != '') {
        $monta_imagem = '<a href="'.$pasta.$imagem.'" rel="tooltip" title="Imagem" target="_blank"><img src="'.$pasta.$imagem.'" width="'.$largura.'" height="'.$altura.'"></a>';
    }
    return $monta_imagem;
}

function exibeDestaque($largura, $altura, $pasta, $destaque, $id)
{
    $monta_destaque = '';
    if ($destaque != '') {
        $monta_destaque = '<video controls width="'.$largura.'" height="'.$altura.'"><source src="'.$pasta.$destaque.'" id="myVideo'.$id.'" type="video/mp4"></video>';
    }
    return $monta_destaque;
}

function exibeVideo($largura, $altura, $video)
{
    $monta_video = '<iframe width="'.$largura.'" height="'.$altura.'" src="'.$video.'" frameborder="0" scrolling="no" allowfullscreen></iframe>';
    return $monta_video;
}

function exibeData($data)
{
    if ($data == NULL or date("d/m/Y", strtotime($data)) == '01/01/1970'){
        $data_tratada = '';
    }else{
        $data_tratada = date("d/m/Y", strtotime($data));
    }
    return $data_tratada;
}

function montaCabecalhoSelectImagem($nome)
{
    $cabecalho_select = '    
    <div class="control-group">
    <label for="textfield" class="control-label">Imagem '.ucfirst($nome).'</label>
    <div class="controls">
        <select name="'.$nome.'_imagem" id="'.$nome.'_imagem"
                class="select2-me input-xlarge telaAtendimento">
            <option value="">-- Selecione um Arquivo --</option>
    
    ';
    return $cabecalho_select;
}
function montaRodapeSelectImagem($nome)
{
    $rodape_select = '    
        </select>        
    </div>
</div>
    ';
    return $rodape_select;
}

function montaExibirSimNao($nome)
{
    $texto = 'como';
    if ($nome=='produto'){
        $texto = '';
    }
    if ($nome=='video'){
        $texto = '';
    }
    $exibir = '
        <div class="control-group">
    <label for="textfield" class="control-label">Exibir '.$texto.' '.ucfirst($nome).'?</label>
    <div class="controls">
        <select name="exibir_ '.($nome).'" id=" '.$nome.'"
                class=\'select2-me input-xlarge\' required>
            <option value="">-- Selecione uma Opção --</option>
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>
    </div>
</div>
    ';
    return $exibir;
}

function montaCabecalhoExibirSimNao($nome)
{
    $texto = 'como';
    if ($nome=='produto'){
        $texto = '';
    }
    if ($nome=='video'){
        $texto = '';
    }
    $exibir = '
        <div class="control-group">
    <label for="textfield" class="control-label">Exibir '.$texto.' '.ucfirst($nome).'?</label>
    <div class="controls">
        <select name="exibir_'.($nome).'" id="exibir_'.($nome).'"
                class=\'select2-me input-xlarge\' required>                
    ';
    return $exibir;
}

function montaRodapeExibirSimNao($nome)
{
    $rodape_select = '    
       </select>
    </div>
</div>
    ';
    return $rodape_select;
}
?>

