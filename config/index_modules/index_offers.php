<div class="box-heading"><span>Ofertas</span></div>
<div class="box-content">
    <div class="box-product">
        <div class="slider6">
            <?php do { ?>
                <div class="singleProduct">
                    <div class="btnImgWrap">
                        <div class="image">
                            <a href="produto.php?var=<?php echo $row_RecordsetProdutos['id']; ?>">
                                <?php
                                if ($row_RecordsetProdutos['imagem_sobre_destaque'] <> '') {
                                    $imagem_sobre = " oversrc='image_produto/" . $row_RecordsetProdutos['imagem_sobre_destaque'] . "' ";
                                } else {
                                    $imagem_sobre = " ";

                                }
                                ?>
                                <img<?php echo $imagem_sobre; ?>src="image_produto/<?php echo $row_RecordsetProdutos['imagem_destaque']; ?>
                                " title="<?php echo utf8_encode($row_RecordsetProdutos['nome']); ?>"
                                style="border:none"/>
                            </a>
                        </div>
                        <ul class="btnGroup tooltip-title">
                            <li class="cartBt">
                                <form action="produto.php?var=<?php echo $row_RecordsetProdutos['id']; ?>"
                                      method="post"><input type="submit" class="cartBtn"
                                                           value="Comprar"/></form>
                            </li>
                            <li class="compareBt">
                                <form method="post"
                                      action="produto.php?var=<?php echo $row_RecordsetProdutos['id']; ?>">
                                    <input type="submit" class="compare" data-toggle="tooltip"
                                           title="Detalhes do Produto"/>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="name">
                        <a href="produto.php?var=<?php echo $row_RecordsetProdutos['id']; ?>"><?php echo utf8_encode($row_RecordsetProdutos['nome']); ?></a>
                    </div>
                    <div class="price">
                        <?php
                        $ver_preco = "<span class='price-new'>" . $row_RecordsetProdutos['preco_venda'] . "</span>";
                        if ($row_RecordsetProdutos['exibir_preco_venda'] == 1 AND $row_RecordsetProdutos['exibir_preco_promocional'] == 1 AND (strtotime(date('Y-m-d')) >= strtotime($row_RecordsetProdutos['dat_comeco_promocao']) AND strtotime(date('Y-m-d')) <= strtotime($row_RecordsetProdutos['dat_fim_promocao']))) {
                            $ver_preco = "<span class='price-old'> R$" . $row_RecordsetProdutos['preco_venda'] . "</span> - <span class='price-new'> R$" . $row_RecordsetProdutos['preco_promocional'] . "</span>";
                        }
                        echo $ver_preco;
                        ?>
                    </div>
                </div>
            <?php } while ($row_RecordsetProdutos = mysqli_fetch_assoc($queryProdutos)); ?>
        </div>
