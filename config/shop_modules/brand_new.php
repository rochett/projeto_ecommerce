<div class="box marLeft30">
    <div class="box-heading"><span>Novidades</span></div>
    <div class="box-content">
        <div class="box-product">
            <div class="slider7">
                <?php do{?>
                    <div class="singleProduct">
                        <div class="btnImgWrap">
                            <div class="image">
                                <a href="produto.php?var=<?php echo $row_RecordsetNovidades['id'];?>">
                                    <?php
                                        if ($row_RecordsetNovidades['imagem_sobre_destaque']<>''){
                                            $imagem_sobre_novidades=" oversrc='image_produto/".$row_RecordsetNovidades['imagem_sobre_destaque']."' ";
                                        }else{
                                            $imagem_sobre_novidades=" ";
                                        }
                                    ?>
                                    <img<?php echo $imagem_sobre_novidades;?>src="image_produto/<?php echo $row_RecordsetNovidades['imagem_destaque'];?>" title="<?php $row_RecordsetNovidades['nome'];?>" style="border:none"/>
                                </a>
                            </div>
                            <ul class="btnGroup tooltip-title">
                                <li class="cartBt"><form action="produto.php?var=<?php echo $row_RecordsetNovidades['id'];?>" method="post"><input type="submit" class="cartBtn" value="Comprar"  /></form></li>
                                <li class="wishBt"><form method="post" action="produto.php?var=<?php echo $row_RecordsetNovidades['id'];?>"><input type="submit" class="compare" data-toggle="tooltip" title="Detalhes do Produto" /></form></li>
                                <li class="compareBt"><input type="button" class="compare" onClick="addToCompare('77');" data-toggle="tooltip" title="Add to Compare" /></li>
                            </ul>
                        </div>
                        <div class="name"><a href="produto.php?var=<?php echo $row_RecordsetNovidades['id'];?>"><?php echo utf8_encode($row_RecordsetNovidades['nome']);?></a></div>
                        <div class="price">
                            <?php
                                $ver_preco_novidades = "<span class='price-new'>" . $row_RecordsetNovidades['preco_venda'] . "</span>";
                                if ($row_RecordsetNovidades['exibir_preco_venda']==1 AND $row_RecordsetNovidades['exibir_preco_promocional']==1 AND (strtotime(date('Y-m-d')) >= strtotime($row_RecordsetNovidades['dat_comeco_promocao']) AND strtotime(date('Y-m-d')) <= strtotime($row_RecordsetNovidades['dat_fim_promocao']))) {
                                    $ver_preco_novidades="<span class='price-old'> R$".$row_RecordsetNovidades['preco_venda']."</span> - <span class='price-new'> R$".$row_RecordsetNovidades['preco_promocional']."</span>";
                                }
                                echo $ver_preco_novidades;
                            ?>
                        </div>
                    </div>
                <?php } while ($row_RecordsetNovidades = mysqli_fetch_assoc($queryNovidades)); ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
