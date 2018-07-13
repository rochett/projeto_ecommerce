<?php
include("acesso.php");
include("config/base_lista.php");
include("config/functions_sys.php");
$id_marca = $_GET['var_mar'];
$row_Recordset = montaQuery($id_marca, 'marcas', $conectar);
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
                <h1>Edição de Marca</h1>
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
                    <a href="#">Marca</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Edição de Marca</a>
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
                        <h3><i class="icon-th-list"></i> Dados da Marca</h3>
                        <div class="actions">
                            <a href="lista_marca.php" class="btn" rel="tooltip" title="Retornar"><i
                                        class="icon-undo"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <form action="altera_cad_marca.php?var_mar=<?php echo $id_marca ?>" method="POST"
                              class='form-horizontal form-striped'>
                            <div class="control-group">
                                <label for="password" class="control-label">Nome da marca</label>
                                <div class="controls">
                                    <input name="nome_marca" type="text" class="input-xlarge" id="nome_marca"
                                           placeholder="Informe o nome da marca" title="Nome da marca"
                                           value="<?php echo utf8_encode($row_Recordset['nome']); ?>" rel="tooltip"
                                           required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">Link Site</label>
                                <div class="controls">
                                    <input type="text" name="link_site" id="link_site" class="input-xlarge"
                                           placeholder="Informe o link para o site da marca" rel="tooltip"
                                           value="<?php echo utf8_encode($row_Recordset['link_site']); ?>"
                                           title="Link para o Site da Marca" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">Imagem</label>
                                <div class="controls">
                                    <select name="marca_imagem" id="marca_imagem" class='select2-me input-xlarge'
                                            required>
                                        <option value="">-- Selecione um Arquivo --</option>
                                        <?php
                                        $pasta = $_SESSION['pasta_telas'];
                                        $diretorio = dir($pasta);
                                        while (($arquivo = $diretorio->read()) !== false) {
                                            if ($arquivo != '.' and $arquivo != '..') {
                                                if (utf8_encode($row_Recordset['imagem']) == $arquivo) {
                                                    $selected = 'selected';
                                                } else {
                                                    $selected = '';
                                                }
                                                echo '<option value="' . $arquivo . '" ' . $selected . '>' . $arquivo . '</option>';
                                            }
                                        }
                                        $diretorio->close();
                                        ?>
                                    </select>
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