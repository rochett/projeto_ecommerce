<?php
    include('data/data_conta_relacionados_produto.php');
?>
<div class="box" style="float:none">
    <div class="box-heading"><span>Produtos Relacionados(<?php echo $totalRows_RecordsetProdutosRelacionados; ?>)</span>
    </div>
    <div class="box-product">
        <div class="slider7">
            <?php do { ?>
                <div class="singleProduct">
                    <div class="btnImgWrap">
                        <div class="image">
                            <a href="produto.php?var=<?php echo $row_RecordsetProdutosRelacionados['id']; ?>">
                                <?php
                                    if ($row_RecordsetProdutosRelacionados['imagem_sobre_destaque'] <> '') {
                                        $imagem_sobre = " oversrc='image_produto/" . $row_RecordsetProdutosRelacionados['imagem_sobre_destaque'] . "' ";
                                    } else {
                                        $imagem_sobre = " ";
                                    }
                                ?>
                                <img<?php echo $imagem_sobre; ?>src="image_produto/<?php echo $row_RecordsetProdutosRelacionados['imagem_destaque']; ?>
                                "
                                title="<?php echo utf8_encode($row_RecordsetProdutosRelacionados['nome']); ?>"
                                style="border:none"/>
                            </a>
                        </div>
                        <ul class="btnGroup tooltip-title">
                            <li class="cartBt">
                                <form action="produto.php?var=<?php echo $row_RecordsetProdutosRelacionados['id']; ?>"
                                      method="post"><input type="submit" class="cartBtn" value="Comprar"/></form>
                            </li>
                            <li class="compareBt">
                                <form method="post"
                                      action="produto.php?var=<?php echo $row_RecordsetProdutosRelacionados['id']; ?>">
                                    <input type="submit" class="compare" data-toggle="tooltip"
                                           title="Detalhes do Produto"/>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="name"><a
                                href="produto.php?var=<?php echo $row_RecordsetProdutosRelacionados['id']; ?>"><?php echo utf8_encode($row_RecordsetProdutosRelacionados['nome']); ?></a>
                    </div>
                    <div class="price">
                        <?php
                            $ver_preco = "<span class='price-new'>" . $row_RecordsetProdutosRelacionados['preco_venda'] . "</span>";
                            if ($row_RecordsetProdutosRelacionados['exibir_preco_venda'] == 1 AND $row_RecordsetProdutosRelacionados['exibir_preco_promocional'] == 1 AND (strtotime(date('Y-m-d')) >= strtotime($row_RecordsetProdutosRelacionados['dat_comeco_promocao']) AND strtotime(date('Y-m-d')) <= strtotime($row_RecordsetProdutosRelacionados['dat_fim_promocao']))) {
                                $ver_preco = "<span class='price-old'> R$" . $row_RecordsetProdutosRelacionados['preco_venda'] . "</span> - <span class='price-new'> R$" . $row_RecordsetProdutosRelacionados['preco_promocional'] . "</span>";
                            }
                            echo $ver_preco;
                        ?>
                    </div>
                </div>
            <?php } while ($row_RecordsetProdutosRelacionados = mysqli_fetch_assoc($queryContaRelacionados)); ?>
        </div>
    </div>
</div>
