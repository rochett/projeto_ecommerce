<?php
include("acesso.php");
include("config/base_lista.php");
include("config/functions_sys.php");
$id_loja = $_GET['var_loj'];
$row_Recordset = montaQuery($id_loja, 'lojas', $conectar);
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
                <h1>Edição de Loja</h1>
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
                    <a href="#">Lojas</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Edição de Loja</a>
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
                        <h3><i class="icon-th-list"></i> Dados da Loja</h3>
                        <div class="actions">
                            <a href="lista_loja.php" class="btn" rel="tooltip" title="Retornar"><i
                                        class="icon-undo"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <form action="altera_cad_loja.php?var_loj=<?php echo $id_loja ?>" method="POST"
                              class='form-horizontal form-striped'>
                            <div class="control-group">
                                <label for="password" class="control-label">Nome da Loja</label>
                                <div class="controls">
                                    <input name="nome_loja" type="text" class="input-xlarge" id="nome_loja"
                                           placeholder="Informe o nome da loja" title="Nome da Loja"
                                           value="<?php echo utf8_encode($row_Recordset['descricao']); ?>" rel="tooltip"
                                           required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="textarea" class="control-label">Texto Apresentação</label>
                                <div class="controls">
                                <textarea name="texto_loja" id="texto_loja" rows="5" class="input-block-level"
                                          placeholder="Informe o texto da apresentação" rel="tooltip"
                                          title="Texto da Apresentação"
                                          required><?php echo utf8_encode($row_Recordset['texto']); ?>
                                </textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">Link Video</label>
                                <div class="controls">
                                    <input type="text" name="video_loja" id="video_loja" class="input-xlarge"
                                           placeholder="Link do Video"
                                           value="<?php echo utf8_encode($row_Recordset['video_loja']); ?>"
                                           rel="tooltip" title="Link do Video" required>
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