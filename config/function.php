<?php
    function buscaLoja($tipo_lista, $filtro_buscaproduto, $filtro_lojas)
    {
        $result_busca = "&var=".$filtro_lojas."";
        $page_busca = "loja.php?";
        if ($tipo_lista == 'busca')
        {
            $result_busca = "&pega_produto=".utf8_encode($filtro_buscaproduto)."";
            $page_busca = "busca_produto.php?";
        }
        return array($page_busca, $result_busca);
    }

    function buscaCategoriaProduto($filtro_busca_categorias, $filtro_lojas)
    {
        $page_busca = "busca_categoria_produto.php?";
        $result_busca = "&loja=".$filtro_lojas."&var=".$filtro_busca_categorias."";
        return array($page_busca, $result_busca, $result_busca);
    }

    function calculaFrete(
        $cod_servico, /* codigo do servico desejado */
        $cep_origem,  /* cep de origem, apenas numeros */
        $cep_destino, /* cep de destino, apenas numeros */
        $peso,        /* valor dado em Kg incluindo a embalagem. 0.1, 0.3, 1, 2 ,3 , 4 */
        $altura,      /* altura do produto em cm incluindo a embalagem */
        $largura,     /* altura do produto em cm incluindo a embalagem */
        $comprimento, /* comprimento do produto incluindo embalagem em cm */
        $valor_declarado='0' /* indicar 0 caso nao queira o valor declarado */
    ){

        $cod_servico = strtoupper( $cod_servico );
        if( $cod_servico == 'SEDEX10' ) $cod_servico = 40215 ;
        if( $cod_servico == 'SEDEXACOBRAR' ) $cod_servico = 40045 ;
        if( $cod_servico == 'SEDEX' ) $cod_servico = 40010 ;
        if( $cod_servico == 'PAC' ) $cod_servico = 41106 ;

        # ###########################################
        # Código dos Principais Serviços dos Correios
        # 41106 PAC sem contrato
        # 40010 SEDEX sem contrato
        # 40045 SEDEX a Cobrar, sem contrato
        # 40215 SEDEX 10, sem contrato
        # ###########################################

        $correios = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=&sDsSenha=&sCepOrigem=".$cep_origem."&sCepDestino=".$cep_destino."&nVlPeso=".$peso."&nCdFormato=1&nVlComprimento=".$comprimento."&nVlAltura=".$altura."&nVlLargura=".$largura."&sCdMaoPropria=n&nVlValorDeclarado=".$valor_declarado."&sCdAvisoRecebimento=n&nCdServico=".$cod_servico."&nVlDiametro=0&StrRetorno=xml";

        $xml = simplexml_load_file($correios);

        $_arr_ = array();
        if($xml->cServico->Erro == '0'):
            $_arr_['codigo'] = $xml -> cServico -> Codigo ;
            $_arr_['valor'] = $xml -> cServico -> Valor ;
            $_arr_['prazo'] = $xml -> cServico -> PrazoEntrega .' Dias' ;
            // return $xml->cServico->Valor;
            return $_arr_ ;
        else:
            return false;
        endif;
    }

    function montaQuery($field, $table, $ordem, $conexao)
    {
        $id_resultado = $field;
        if ($id_resultado==''){
            $sqlRes = "SELECT * from $table $ordem";
        }else{
            $sqlRes = "SELECT * from $table WHERE id='$id_resultado'";
        }
        $queryRes = mysqli_query($conexao, $sqlRes);
        $row_resultado = mysqli_fetch_assoc($queryRes);
        return $row_resultado;
    }

    function montaListaQuery($field, $table, $data_field, $ordem, $conexao)
    {
        $id_resultado = $field;
        if ($id_resultado==''){
            $sqlRes = "SELECT * from $table $ordem";
        }else{
            $sqlRes = "SELECT * from $table WHERE $data_field='$id_resultado'";
        }
        $queryRes = mysqli_query($conexao, $sqlRes);
        return $queryRes;
    }

    function montaListaQueryEsp($table, $data_field_1, $data_field_2, $ordem, $conexao)
    {
        if ($data_field_1=='' AND $data_field_2==''){
            $sqlRes = "SELECT * from $table $ordem";
        }else{
			if ($data_field_2=='capa_site' OR $data_field_1=='capa_site'){
				$sqlRes = "SELECT * from $table WHERE $data_field_1='1' AND $data_field_2=1 $ordem LIMIT 4";
			}else{			
            	$sqlRes = "SELECT * from $table WHERE $data_field_1='1' AND $data_field_2=1 $ordem";
			}
        }
        $queryRes = mysqli_query($conexao, $sqlRes);
        return $queryRes;
    }

    function formataMoeda($valor_puro)
    {
        $valor_tratado = 'R$ ' . number_format($valor_puro, 2, ',', '.');
        return $valor_tratado;
    }

?>
