<?php
include('config/header.php');
$filtra_produto = $_GET['var'];
include('data/data_left_panel.php');
include('data/data_produto.php');
if (isset($_GET['servico'])) {
    $servico = $_GET['servico'];
} else {
    $servico = '';
}
if (isset($_GET['codigo'])) {
    $codigo_servico = $_GET['codigo'];
} else {
    $codigo_servico = '40010';
}
if (isset($_GET['valor'])) {
    $valor_servico = $_GET['valor'];
} else {
    $valor_servico = 0.00;
}
if (isset($_GET['prazo'])) {
    $prazo_servico = $_GET['prazo'];
} else {
    $prazo_servico = '';
}
if (isset($_GET['preco_total'])) {
    $valor_produto = $_GET['preco_total'];
} else {
    $valor_produto = 0.00;
}
if (isset($_GET['cep'])) {
    $cep_destino = $_GET['cep'];
} else {
    $cep_destino = '';
}
if (isset($_GET['quantidade'])) {
    $quantidade = $_GET['quantidade'];
} else {
    $quantidade = "1";
}
if (isset($_GET['cor'])) {
    $cor = $_GET['cor'];
} else {
    $cor = "";
}
if (isset($_GET['tamanho'])) {
    $tamanho = $_GET['tamanho'];
} else {
    $tamanho = "";
}
?>
    <div class="span12">
        <div id="notification"></div>
    </div>
    <div class="span3">
        <div id="column-left">
            <div class="box">
                <?php
                include('config/shop_modules/product_filter.php');
                include('config/shop_modules/categories.php');
                include('config/shop_modules/offers.php');
                include('config/shop_modules/brand_new.php');
                ?>
                <div class="span9">
                    <div id="content">
                        <div class="breadcrumb">
                            <a href="index.php">Home</a> &raquo; <?php echo utf8_encode($row_RecordsetProduto['nome']); ?>
                        </div>
                        <h1><?php echo utf8_encode($row_RecordsetProduto['nome']); ?></h1>
                        <div class="product-info">
                            <div class="left">
                                <div class="image">
                                    <span class="zoom"></span>
                                    <a href="image_produto/<?php echo $row_RecordsetProduto['imagem_extra']; ?>"
                                       class='cloud-zoom' id='zoom1' rel="">
                                        <img src="image_produto/<?php echo $row_RecordsetProduto['imagem_extra']; ?>"
                                             title="<?php echo $row_RecordsetProduto['nome']; ?>" id="image"/>
                                    </a>
                                </div>
                                <div class="image-additional">
                                    <a href="produto.php?var=<?php echo $filtra_produto; ?>"
                                       title="<?php echo utf8_encode($row_RecordsetProduto['nome']); ?>" target="_self">
                                        <img src="image_produto/<?php echo $row_RecordsetProduto['imagem_normal']; ?>"
                                             title="<?php echo utf8_encode($row_RecordsetProduto['nome']); ?>"/>
                                    </a>
                                </div>
                                <a id="mapa" href="amplia_produto_extra.php?var=<?php echo $row_RecordsetProduto['id']; ?>"
                                   class="contact"><img src="image/ampliar.png" width="30" height="30" border="0"></a>&nbsp;<a
                                        id="mapa2"
                                        href="amplia_produto.php?var=<?php echo $row_RecordsetProduto['id']; ?>&pagina=extra"
                                        class="contact">Ampliar Imagem</a>
                            </div>
                            <div class="right">
                                <div class="description">
                                    <?php
                                    include('data/data_detalhe_produto.php');
                                    ?>
                                    <form action="calcular_frete.php?produto=<?php echo $filtra_produto; ?>&pag_retorno=2" method="post"
                                          accept-charset="iso-8859-1,utf-8">
                                        <span>Fabricante:</span> <a href="<?php echo $row_RecordsetMarcas['link_site']; ?>"
                                                                    target="_blank"><?php echo $row_RecordsetMarcas['nome']; ?></a><br/>
                                        <span>Cor:</span>
                                        <label>
                                            <div class="styled-select">
                                                <select name="cor" id="cor">
                                                    <?php do { ?>
                                                        <option value="<?php echo utf8_encode($row_RecordsetCor['descricao']); ?>" <?php if($cor==$row_RecordsetCor['descricao']){ echo ' selected'; } ?>><?php echo utf8_encode($row_RecordsetCor['descricao']); ?></option>
                                                    <?php } while ($row_RecordsetCor = mysqli_fetch_assoc($queryCor)); ?>
                                                </select>
                                            </div>
                                        </label>
                                        <span>Tamanho:</span>
                                        <label>
                                            <div class="styled-select">
                                                <select name="tamanho" id="tamanho">
                                                    <?php do { ?>
                                                        <option value="<?php echo utf8_encode($row_RecordsetTamanho['descricao']) ?>" <?php if($tamanho==utf8_encode($row_RecordsetTamanho['descricao'])){ echo ' selected'; } ?>><?php echo utf8_encode($row_RecordsetTamanho['descricao']) ?></option>
                                                    <?php } while ($row_RecordsetTamanho = mysqli_fetch_assoc($queryTamanho)); ?>
                                                </select>
                                            </div>
                                        </label>
                                        <span>Disponibilidade:</span> <?php echo utf8_encode($row_RecordsetDisponibilidade['descricao']); ?>
                                        <br/>
                                        <span>Loja:</span> <?php echo utf8_encode($row_RecordsetLojaProduto['descricao']); ?>
                                </div>
                                <div class="price">
                                    <?php
                                    $ver_preco = "<span class='price-new'>" . $row_RecordsetProduto['preco_venda'] . "</span>";
                                    $preco_vender = $row_RecordsetProduto['preco_venda'];
                                    if ($row_RecordsetProduto['exibir_preco_venda'] == 1 AND $row_RecordsetProduto['exibir_preco_promocional'] == 1 AND (strtotime(date('Y-m-d')) >= strtotime($row_RecordsetProduto['dat_comeco_promocao']) AND strtotime(date('Y-m-d')) <= strtotime($row_RecordsetProduto['dat_fim_promocao']))) {
                                        $ver_preco = "<span class='price-old'>" . $row_RecordsetProduto['preco_venda'] . "</span> - <span class='price-new'>" . $row_RecordsetProduto['preco_promocional'] . "</span>";
                                        $preco_vender = $row_RecordsetProduto['preco_promocional'];
                                    }
                                    ?>
                                    Preço: R$ <?php echo $ver_preco; ?>
                                    <br/>
                                </div>
                                <div class="review">
                                    <div>
                                        <div class="revLinks">
                                        </div>
                                    </div>
                                    <div class="share">
                                        <div class="addthis_default_style"><a class="addthis_button_compact">Compartilhe</a>
                                            <a class="addthis_button_email"></a><a class="addthis_button_print"></a> <a
                                                    class="addthis_button_facebook"></a> <a
                                                    class="addthis_button_twitter"></a></div>
                                        <script type="text/javascript"
                                                src="s7.addthis.com/js/250/addthis_widget.js"></script>
                                    </div>
                                </div>
                                <div class="cart">
                                    <div>
                                        <input type="hidden" name="product_id" size="2" value="64"/>
                                        <div class="quantity-adder">
                                            Qtd:
                                            <div class="quantityWrap">
                                                <input type="text" name="itemQuantity" id="itemQuantity" class="quantity"
                                                       size="2" value="<?php echo $quantidade; ?>"/>
                                                <span class="add-up add-action">+</span> <span class="add-down add-action">ــ</span>
                                            </div>
                                        </div>
                                        <input type="hidden" id="id_prod" name="id_prod"
                                               value="<?php echo $filtra_produto; ?>">
                                        <input type="hidden" id="nome_prod" name="nome_prod"
                                               value="<?php echo utf8_encode($row_RecordsetProduto['nome']); ?>">
                                        <input type="hidden" id="marca_prod" name="marca_prod"
                                               value="<?php echo utf8_encode($row_RecordsetMarcas['nome']); ?>">
                                        <input type="hidden" id="largura_prod" name="largura_prod"
                                               value="<?php echo utf8_encode($row_RecordsetProduto['largura']); ?>">
                                        <input type="hidden" id="altura_prod" name="altura_prod"
                                               value="<?php echo utf8_encode($row_RecordsetProduto['altura']); ?>">
                                        <input type="hidden" id="comprimento_prod" name="comprimento_prod"
                                               value="<?php echo utf8_encode($row_RecordsetProduto['comprimento']); ?>">
                                        <input type="hidden" id="peso_prod" name="peso_prod"
                                               value="<?php echo $row_RecordsetProduto['peso']; ?>">
                                        <input type="hidden" id="preco_prod" name="preco_prod"
                                               value="<?php echo $preco_vender; ?>">

                                        <input type="number" id="cep_destino" name="cep_destino" placeholder="CEP"
                                               class="input-small" onkeyup="limitarInput(this)" onkeypress='return SomenteNumero(event)'
                                            <?php
                                            if (isset($_GET['codigo'])) {
                                                echo 'value="' . $cep_destino . '"';
                                            }

                                            ?>
                                               required>
                                        <span class="styled-select">
                                                <select name="tipo_servico" id="tipo_servico" required>
                                                    <option value="40010" <?php if($servico=='SEDEX'){ echo ' selected'; }; ?>>SEDEX</option>
                                                    <option value="41106" <?php if($servico=='PAC'){ echo ' selected'; }; ?>>PAC</option>
                                                </select>
                                            </span>
                                        <div class="right">
                                            <input type="submit" value="Calcular Frete" class="button" />
                                        </div>

                                        </form>
                                        <?php
                                        if (isset($_GET['codigo'])) {
                                        ?>
                                        <br>
                                        <br>
                                        <div>
                                            Envio escolhido:<?php echo ' ' . $servico; ?><br>
                                            Prazo de entrega:<?php echo ' ' . $prazo_servico; ?><br>
                                            Valor do Frete:<?php echo ' R$ ' . $valor_servico; ?><br>
                                            Valor do Produto:<?php echo ' R$ ' . $valor_produto; ?><br>
                                            <?php
                                            $valor_produto = str_replace(',', '.', $valor_produto);
                                            $valor_servico = str_replace(',', '.', $valor_servico);
                                            ?>
                                            Valor Total
                                            (frete+produto):<?php echo ' R$ ' . number_format(((floatval($valor_produto) + floatval($valor_servico))), 2, ",", "."); ?>
                                            <br><br>
                                            <?php $compra = array($filtra_produto, utf8_encode($row_RecordsetProduto['nome']), $cep_destino, $quantidade, $servico, $prazo_servico, $valor_servico,  $valor_produto, $cor, $tamanho); ?>
                                            <a href="#" class="button" data-toggle="modal"
                                               data-target="#finalizarCompra" rel="tooltip" title="Finalizar Compra" data-id="<?php
                                            echo $compra; ?>" name="fecha_compra" id="fecha_compra">Finalizar Compra</a></div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <span class="productPage">
                    <div id="tabs" class="htabs">
  		                <a href="#tab-description">Descrição</a>
                        <a href="#tab-attribute">Detalhes</a>
                        <?php if ($row_RecordsetProduto['video_produto'] == 1) { ?> <a
                                href="#tab-product-tab1">Vídeo</a> <?php } ?>
                    </div>
                    <div id="tab-description" class="tab-content"><div>
  	                    <p><?php echo nl2br($row_RecordsetProduto['descricao']); ?></p>
                    </div>
                    </div>
                    <div id="tab-attribute" class="tab-content">
                        <p><?php echo nl2br($row_RecordsetProduto['detalhes']); ?></p>
                    </div>
                        <?php if ($row_RecordsetProduto['video_produto'] == 1) { ?>
                            <div id="tab-product-tab1" class="tab-content"><p><iframe allowfullscreen="" frameborder="0"
                                                                                      height="315"
                                                                                      src="<?php echo $row_RecordsetProduto['link_video']; ?>"
                                                                                      width="560"></iframe></p></div>
                        <?php } ?>
                </span>
                    <div class="tags"><b>Categoria(s):</b>
                        <?php
                        include('data/data_detalhe_categoria_produto.php');
                        ?>
                        <a href="busca_categoria_produto.php?var=<?php echo utf8_encode($row_RecordsetProduto['categoria']); ?>&loja=<?php echo $row_RecordsetLojadoProduto['id']; ?>"><?php echo utf8_encode($row_RecordsetCategoria['descricao']); ?></a>
                        <a href="loja.php?var=<?php echo $row_RecordsetLojadoProduto['id']; ?>"><?php echo utf8_encode($row_RecordsetLojadoProduto['descricao']); ?></a>
                    </div>
                    <?php include('config/shop_modules/related.php'); ?>
                </div>
            </div>
            <script src='js/product.js'></script>
        </div>
    </div>
<?php include('config/footer.php'); ?>


<?php if (isset($_GET['codigo'])) { ?>
    <!-- Modal -->
    <div id="finalizarCompra" class="modal fade" role="dialog">
        <?php
        list($a, $b, $c, $d, $e, $f, $g, $h, $i, $j) = $compra;
        $dados_pedido = urlencode(implode(',', $compra));
        ?>
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Finalizar Compra - <?php echo $b; ?></h4>
                </div>
                <div class="modal-body">
                    <form action="efetua_compra.php?dados_pedido=<?php echo $dados_pedido; ?>" method="post" accept-charset="iso-8859-1,utf-8">
                        <div class="content">
                            <b>Nome:</b><br />
                            <input type="tel" required name="nome_cliente" id="nome_cliente" pattern="[a-zçáéíóúãõA-ZÇÁÉÍÓÚÃÕ\s]+$" required />
                            <br />
                            <br />
                            <b>E-Mail:</b><br />
                            <input type="email" required class="input-text" name="email_cliente" id="email_cliente" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required />
                            <div id='preview_oferta'></div>
                        </div>

                        <div class="buttons">
                            <div class="right"><input type="submit" value="Comprar" class="button" />&nbsp;&nbsp;<input type="reset" value="Limpar" class="button" /></div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#" class="button" data-dismiss="modal">Fechar</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>