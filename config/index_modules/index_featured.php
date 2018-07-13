<div class="box-heading"><span>Destaques</span></div>
<div class="box-content">
    <div class="box-product">
        <table width="100%" border="0" bgcolor="#000000">
            <tr>
                <?php do { ?>
                    <td width="25%" align="left">
                        <div class="singleProduct">                        
                            <video controls autoplay loop width="100%" height="480">
                                <source src="video_produto/<?php echo $row_RecordsetCapaSite['link_video_capa']; ?>" type="video/mp4" id="myVideo<?php echo $row_RecordsetCapaSite['id']; ?>" />
                            </video>
                            <ul class="btnGroup tooltip-title">
                                <li class="cartBt">
                                    <form action="produto.php?var=<?php echo $row_RecordsetCapaSite['id']; ?>"
                                          method="post"><input type="submit" class="cartBtn"
                                                               value="Comprar"/>
                                    </form>
                                </li>
                                <li class="compareBt">
                                    <form method="post"
                                          action="produto.php?var=<?php echo $row_RecordsetCapaSite['id']; ?>">
                                        <input type="submit" class="compare" data-toggle="tooltip"
                                               title="Detalhes do Produto"/>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="name">
                            <a href="produto.php?var=<?php echo $row_RecordsetCapaSite['id']; ?>"><?php echo utf8_encode($row_RecordsetCapaSite['nome']); ?></a>
                        </div>
                        <div class="price">
                            <?php
                                $ver_preco = "<span class='price-new'>" . $row_RecordsetProdutos['preco_venda'] . "</span>";
                                if ($row_RecordsetCapaSite['exibir_preco_venda'] == 1 AND $row_RecordsetCapaSite['exibir_preco_promocional'] == 1  AND (strtotime(date('Y-m-d')) >= strtotime($row_RecordsetCapaSite['dat_comeco_promocao']) AND strtotime(date('Y-m-d')) <= strtotime($row_RecordsetCapaSite['dat_fim_promocao']))) {
                                    $ver_preco = "<span class='price-old'> R$" . $row_RecordsetCapaSite['preco_venda'] . "</span> - <span class='price-new'> R$" . $row_RecordsetCapaSite['preco_promocional'] . "</span>";
                                }
                                echo $ver_preco;
                            ?>
                        </div>
                    </td>
                <?php } while ($row_RecordsetCapaSite = mysqli_fetch_assoc($queryCapaSite)); ?>
            </tr>
        </table>
    </div>
</div>
