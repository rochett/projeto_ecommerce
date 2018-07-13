<?php
    include('config/header.php');
	$tipo_lista = 'loja'; 
	$filtro_buscaproduto = "";
    $filtro_lojas = $_GET['var'];
    if (isset($_GET['quantidade'])){
        $filtro_limite=$_GET['quantidade'];
    }else{
        $filtro_limite=6;
    }
    if (isset($_GET['ordem'])){
        $filtro_ordem=$_GET['ordem'];
    }else{
        $filtro_ordem='`id` DESC';
    }
	include('data/data_left_panel.php');		
	include('data/data_loja.php');
    $sql="SELECT * FROM produtos WHERE loja=$filtro_produtoloja AND exibir_produto=1 ORDER BY $filtro_ordem";	
	include('config/paginator.php');    
    $sql2="SELECT * FROM produtos WHERE loja=$filtro_produtoloja AND exibir_produto=1 ORDER BY $filtro_ordem LIMIT $inicio,$maximo";
    $query2=$conectar->query($sql2);
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
                    <a href="./">Home</a>
                    &raquo; <?php echo $row_RecordsetLojaProduto['descricao'];?>
                </div>
                <h1><?php echo $row_RecordsetLojaProduto['descricao'];?></h1>
                <?php
                    list($pagina_busca, $resultado) = buscaLoja($tipo_lista, $filtro_buscaproduto, $filtro_lojas);
                    include('config/shop_modules/product_filter_list.php');
                ?>
                <div class="pav-pagination pagination">
                    <div class="links"></div>
                    <?php
                        include('config/pagination.php');
                        $sql3="SELECT * FROM produtos WHERE loja=$filtro_produtoloja AND exibir_produto=1 ORDER BY $filtro_ordem LIMIT $p_ini,$maximo";
                        $query3=$conectar->query($sql3);
                        $total3=$query3->num_rows;
                        if($menos > 0) {
                            $volta = $_GET['valor']-$maximo;
                            echo "<a href=\"loja.php?pagina=$menos&valor=$volta&var=$filtro_lojas\" class=\"button\">Anterior</a> ";
                        }
                        if($total3 > 0) {
                            echo "<a href=\"loja.php?pagina=$mais&valor=$valor&var=$filtro_lojas\" class=\"button\">Próxima</a>";
                        }
                    ?>
                    <div class="results">Página <b>
                        <?php echo $pagina;?></b> de <b><?php echo $Paginas; ?></b> - Mostrando Produto(s) <b><?php echo $inicio+1;?></b> a <b><?php echo min($total, ($inicio + $maximo))."   ";?></b> de <b><?php echo $total; ?></b></div></div>
                    </div>
                </div>
            </div>
        </div>
	    <script src='js/display_grid.js'></script>
    </div>
</div>
<?php include('config/footer.php'); ?>

