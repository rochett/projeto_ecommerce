<?php
include("acesso.php");
include("config/base_lista.php");
include("config/functions_sys.php");
$id_produto = $_GET['var_pro'];
$row_Recordset = montaQuery($id_produto, 'produtos', $conectar);
?>

<body>
<?php
$_SESSION['opcao_menu'] = 3;
include("header.php");
?>
<div id="main">
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1>Edição de Produto</h1>
            </div>
            <div class="pull-right">
                <ul class="stats">
                    <li class='lightred'>
                        <i class="icon-calendar"></i>
                        <div class="details">
                            <span class="big">February 22, 2013</span>
                            <span>Wednesday, 13:56</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="breadcrumbs">
            <ul>
                <li>
                    <a href="administrador.php">Painel Inicial</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Loja</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Produtos</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Edição de Produto</a>
                </li>
            </ul>
            <div class="close-bread">
                <a href="#"><i class="icon-remove"></i></a>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span12">
                <div class="box box-bordered">
                    <div class="box-title">
                        <h3><i class="icon-th-list"></i> Dados do Produto</h3>
                        <div class="actions">
                            <a href="lista_produto.php" class="btn" rel="tooltip" title="Retornar"><i
                                        class="icon-undo"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <form action="altera_cad_produto.php?var_pro=<?php echo $id_produto; ?>" method="POST"
                              class='form-horizontal form-striped'>
                            <?php include('campos_produto.php'); ?>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Efetuar Cadastro</button>
                                <button type="reset" class="btn">Desfazer Alterações</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <!--manter 4 </div>-->

    </div>
</div>

</div>
</div>

<?php include("footer.php"); ?>

</body>

</html>
