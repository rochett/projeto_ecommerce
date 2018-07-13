<div class="box-heading"><span>Categorias</span></div>
<div class="box-content">
    <div class="box-category">
        <ul class="accordion" id="accordion-1">
            <?php do{
                include('data/data_categorias_produto.php');
            ?>
            <li class="dcjq-current-parent">
                <a href="#" title="<?php echo utf8_encode($row_RecordsetCategoriasProdutos['descricao']);?>"><?php echo utf8_encode($row_RecordsetCategoriasProdutos['descricao']);?>&nbsp;(<?php echo $totalRows_RecordsetContagemProdutos;?>)</a>
                    <ul>
                        <?php do{?>
                            <li>
                                <a href="produto.php?var=<?php echo $row_RecordsetContagemProdutos['id'];?>"> <?php echo utf8_encode($row_RecordsetContagemProdutos['nome']);?></a>
                            </li>
                        <?php } while ($row_RecordsetContagemProdutos = mysqli_fetch_assoc($queryContagemProdutos)); ?>
                    </ul>
                </li>
            <?php } while ($row_RecordsetCategoriasProdutos = mysqli_fetch_assoc($queryCategoriasProdutos)); ?>
        </ul>
    </div>
</div>
</div>
