<div class="product-filter">
    <div class="limit">Orgazinar por:
        <form action="loja.php" method="post" name="form1">
            <select name="jmpMenu1" onChange="MM_jumpMenu('parent',this,0)">
                <option value='<?php echo $pagina_busca; ?>ordem="id DESC"&<?php echo $resultado; ?>'></option>
                <option value='<?php echo $pagina_busca; ?>ordem="id DESC"&<?php echo $resultado; ?>'>Padrão</option>
                <option value='<?php echo $pagina_busca; ?>ordem="`nome` ASC"&<?php echo $resultado; ?>'>Nome (A - Z)
                </option>
                <option value='<?php echo $pagina_busca; ?>ordem="`nome` DESC"&<?php echo $resultado; ?>'>Nome (Z - A)
                </option>
                <option value='<?php echo $pagina_busca; ?>ordem="`preco_venda` ASC"&<?php echo $resultado; ?>'>Preço
                    (Menor &gt; Maior)
                </option>
                <option value='<?php echo $pagina_busca; ?>ordem="`preco_venda` DESC"&<?php echo $resultado; ?>'>Preço
                    (Maior &gt; Menor)
                </option>
            </select>
        </form>
    </div>
    <div class="limit">Mostrar:
        <form action="loja.php" method="post" name="form2">
            <select name="jmpMenu2" onChange="MM_jumpMenu('parent',this,0)">
                <option value="<?php echo $pagina_busca; ?>quantidade=6&<?php echo $resultado; ?>"></option>
                <option value="<?php echo $pagina_busca; ?>quantidade=6&<?php echo $resultado; ?>">6</option>
                <option value="<?php echo $pagina_busca; ?>quantidade=9&<?php echo $resultado; ?>">9</option>
                <option value="<?php echo $pagina_busca; ?>quantidade=21&<?php echo $resultado; ?>">21</option>
                <option value="<?php echo $pagina_busca; ?>quantidade=72&<?php echo $resultado; ?>">72</option>
                <option value="<?php echo $pagina_busca; ?>quantidade=99&<?php echo $resultado; ?>">99</option>
            </select>
        </form>
    </div>
    <div class="product-compare">&nbsp;</div>
    <div class="display">Exibir:Lista / <a onClick="display('grid');">Grade</a></div>
</div>
<div class="row">
    <div class="product-list">
        <?php
            while ($colunas = $query2->fetch_assoc())
            {
                extract($colunas);
        ?>
        <div class="ifList">
            <div class="btnImgWrap">
                <div class="image">
                    <a href="produto.php?var=<?php echo $id; ?>">
                        <?php
                            if ($imagem_sobre_destaque <> '') {
                                $imagem_sobre = " oversrc='image_produto/" . $imagem_sobre_destaque . "' ";
                            } else {
                                $imagem_sobre = " ";
                            }
                        ?>
                        <img<?php echo $imagem_sobre; ?>src="image_produto/<?php echo $imagem_normal; ?>"
                        title="<?php $nome; ?>" style="border:none"/>
                    </a>
                </div>
                <ul class="btnGroup tooltip-title">
                    <li class="cartBt">
                        <form action="produto.php?var=<?php echo $id; ?>" method="post"><input type="submit"
                                                                                                   class="cartBtn"
                                                                                                   value="Comprar"/>
                        </form>
                    </li>
                    <li class="wishBt"><a class="wish" title="Detalhes do produto" data-toggle="tooltip"
                                          href="produto.php?var=<?php echo $id; ?>"></a></li>
                    <li class="compareBt"><a class="compare" onClick="addToCompare('61');" title="Add to Compare"
                                             data-toggle="tooltip"></a></li>
                </ul>
            </div>
            <div class="name"><a href="produto.php?var=<?php echo $id; ?>"><?php echo utf8_encode($nome); ?> </a></div>
                <div class="description">
                    <?php echo $descricao; ?>
                </div>
                <div class="price">
                    <?php
                        $ver_preco = "<span class='price-new'>" . $preco_venda . "</span>";
                        if ($exibir_preco_venda == 1 AND $exibir_preco_promocional == 1  AND (strtotime(date('Y-m-d')) >= strtotime($dat_comeco_promocao) AND strtotime(date('Y-m-d')) <= strtotime($dat_fim_promocao))) {
                            $ver_preco = "<span class='price-old'> R$" . $preco_venda . "</span> - <span class='price-new'> R$" . $preco_promocional . "</span>";
                        } else {
                            if ($exibir_preco_venda == 1 AND $exibir_preco_promocional == 0) {
                                $ver_preco = "<span class='price-new'> R$" . $preco_venda . "</span>";
                            }
                        }
                        echo $ver_preco;
                    ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
