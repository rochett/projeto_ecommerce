<?php
include("acesso.php");
include("config/base_lista.php");
include("config/functions_sys.php");
$id_secoes = $_GET['var_sec'];
$row_Recordset = montaQuery($id_secoes, 'secoes_site', $conectar);
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
                <h1>Edição de Seções</h1>
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
                    <a href="#">Seções da Loja</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Edição de Seção</a>
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
                        <h3><i class="icon-th-list"></i> Dados da Seção</h3>
                        <div class="actions">
                            <a href="lista_secoes.php" class="btn" rel="tooltip" title="Retornar"><i
                                        class="icon-undo"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <form action="altera_cad_secoes.php?var_sec=<?php echo $id_secoes ?>" method="POST"
                              class='form-horizontal form-striped'>
                            <div class="control-group">
                                <label for="password" class="control-label">Seção</label>
                                <div class="controls">
                                    <input name="nome_secao" type="text" class="input-xlarge" id="nome_secao"
                                           placeholder="Informe a seção da loja" title="Seção"
                                           value="<?php echo utf8_encode($row_Recordset['titulo']); ?>" rel="tooltip"
                                           required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="textarea" class="control-label">Texto</label>
                                <div class="controls">
                                    <textarea name="texto_secao" id="texto_secao" rows="5" class="input-block-level"
                                              placeholder="Informe o texto da seção" rel="tooltip"
                                              title="Texto da Seção" required><?php echo utf8_encode($row_Recordset['texto']); ?></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">Imagem</label>
                                <div class="controls">
                                    <select name="secao_imagem" id="secao_imagem" class='select2-me input-xlarge'>
                                        <option value="">-- Selecione um Arquivo --</option>
                                        <?php
                                        $pasta = $_SESSION['pasta_secoes'];
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