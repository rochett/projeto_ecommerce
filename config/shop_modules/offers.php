<div class="box marLeft30">
    <div class="box-heading">
        <span>Ofertas Especiais</span></div>
    <div class="box-content">
        <div class="box-product">
            <div class="noSlide">
                <?php do { ?>
                    <div class="singleProduct">
                        <div class="btnImgWrap">
                            <div class="image">
                                <a href="produto.php?var=<?php echo $row_RecordsetOfertas['id']; ?>">
                                    <?php
                                        if ($row_RecordsetOfertas['imagem_sobre_destaque'] <> '') {
                                            $imagem_sobre_ofertas = " oversrc='image_produto/" . $row_RecordsetOfertas['imagem_sobre_destaque'] . "' ";
                                        } else {
                                            $imagem_sobre_ofertas = " ";
                                        }
                                    ?>
                                    <img<?php echo $imagem_sobre_ofertas; ?>src="image_produto/<?php echo $row_RecordsetOfertas['imagem_destaque']; ?>
                                    " title="<?php echo $row_RecordsetOfertas['nome']; ?>" style="border:none"/>
                                </a>
                            </div>
                            <ul class="btnGroup tooltip-title">
                                <li class="cartBt">
                                    <form action="<?php echo $row_RecordsetOfertas['link_pagseguro']; ?>" method="post">
                                        <input type="hidden" name="itemCode"
                                               value="<?php echo $row_RecordsetOfertas['id_pagseguro']; ?>"/>
                                    </form>
                                </li>
                                <li class="wishBt">
                                    <form method="post"
                                          action="produto.php?var=<?php echo $row_RecordsetOfertas['id']; ?>"><input
                                                type="submit" class="compare" data-toggle="tooltip"
                                                title="Detalhes do Produto"/>
                                    </form>
                                </li>
                                <li class="compareBt"><input type="button" class="compare" onClick="addToCompare('59');"
                                                             data-toggle="tooltip" title="Add to Compare"/>
                                </li>
                            </ul>
                        </div>
                        <div class="name"><a
                                    href="produto.php?var=<?php echo $row_RecordsetOfertas['id']; ?>"><?php echo utf8_encode($row_RecordsetOfertas['nome']); ?> </a>
                        </div>
                        <div class="price">
                            <?php
                                $ver_preco_ofertas = "<span class='price-new'>" . $row_RecordsetOfertas['preco_venda'] . "</span>";
                                if ($row_RecordsetOfertas['exibir_preco_venda'] == 1 AND $row_RecordsetOfertas['exibir_preco_promocional'] == 1 AND (strtotime(date('Y-m-d')) >= strtotime($row_RecordsetOfertas['dat_comeco_promocao']) AND strtotime(date('Y-m-d')) <= strtotime($row_RecordsetOfertas['dat_fim_promocao']))) {
                                    $ver_preco_ofertas = "<span class='price-old'> R$" . $row_RecordsetOfertas['preco_venda'] . "</span> - <span class='price-new'> R$" . $row_RecordsetOfertas['preco_promocional'] . "</span>";
                                }
                                echo $ver_preco_ofertas;
                            ?>
                        </div>
                    </div>
                <?php } while ($row_RecordsetOfertas = mysqli_fetch_assoc($queryOfertas)); ?>
            </div>
        </div>
    </div>
</div>
