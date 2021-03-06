<?php
include("acesso.php");
include("config/base_lista.php");
include("config/functions_sys.php");
$id_tamanho = $_GET['var_tam'];
$row_Recordset = montaQuery($id_tamanho, 'tamanho', $conectar);
?>
<body>
<?php
$_SESSION['opcao_menu'] = 1;
include("header.php");
?>
<div id="main">
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1>Edição de Tamanho</h1>
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
                    <a href="#">Cadastros</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Tamanho</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Edição de Tamanho</a>
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
                        <h3><i class="icon-th-list"></i> Dados do Tamanho</h3>
                        <div class="actions">
                            <a href="lista_tamanho.php" class="btn" rel="tooltip" title="Retornar"><i
                                        class="icon-undo"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <form action="altera_cad_tamanho.php?var_tam=<?php echo $id_tamanho ?>" method="POST"
                              class='form-horizontal form-striped'>
                            <div class="control-group">
                                <label for="password" class="control-label">Descrição</label>
                                <div class="controls">
                                    <input name="nome_tamanho" type="text" class="input-xlarge" id="nome_tamanho"
                                           placeholder="Informe o tamanho" title="Tamanho"
                                           value="<?php echo utf8_encode($row_Recordset['descricao']); ?>" rel="tooltip"
                                           required>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Efetuar Alteração</button>
                                <button type="reset" class="btn">Desfazer Alterações</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--manter 4 </div>-->

</div>
</div>
</div>
</div>

<?php include("footer.php"); ?>

</body>

</html>