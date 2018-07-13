<?php
include("acesso.php");
include("config/base_lista.php");
include("config/functions_sys.php");
$id_oferta = $_GET['var_ofe'];
$row_Recordset = montaQuery($id_oferta, 'ofertas_site', $conectar);
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
                <h1>Edição de Ofertas da Loja</h1>
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
                    <a href="#">Loja</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Edição de Ofertas da Loja</a>
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
                        <h3><i class="icon-th-list"></i> Dados da Oferta</h3>
                        <div class="actions">
                            <a href="lista_oferta.php" class="btn" rel="tooltip" title="Retornar"><i
                                        class="icon-undo"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <form action="altera_cad_oferta.php?var_ofe=<?php echo $id_oferta ?>" method="POST"
                              class='form-horizontal form-striped'>
                            <div class="control-group">
                                <label for="password" class="control-label">Título</label>
                                <div class="controls">
                                    <input name="nome_oferta" type="text" class="input-xlarge" id="nome_oferta"
                                           placeholder="Informe o título da oferta" title="Título da Oferta"
                                           value="<?php echo utf8_encode($row_Recordset['titulo']); ?>" rel="tooltip"
                                           required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">Texto</label>
                                <div class="controls">
                                    <input type="text" name="texto_oferta" id="texto_oferta" class="input-xlarge"
                                           placeholder="Informe o texto para a oferta" rel="tooltip"
                                           title="Texto para a Oferta"
                                           value="<?php echo utf8_encode($row_Recordset['texto']); ?>" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">Imagem</label>
                                <div class="controls">
                                    <select name="oferta_imagem" id="oferta_imagem" class='select2-me input-xlarge'
                                            required>
                                        <option value="">-- Selecione um Arquivo --</option>
                                        <?php
                                        $pasta = $_SESSION['pasta_ofertas'];
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

                            <div class="control-group">
                                <label for="password" class="control-label">Exibir?</label>
                                <div class="controls">
                                    <select name="exibir_oferta" id="exibir_oferta" class='select2-me input-xlarge'
                                            required>
                                        <option value="">-- Selecione uma Opção --</option>
                                        <?php
                                        $selected = '';
                                        if ($row_Recordset['exibir'] == '1') {
                                            $selected = 'selected';
                                        } ?>
                                        <option value="1" <?php echo $selected ?>>Sim</option>
                                        <?php
                                        $selected = '';
                                        if ($row_Recordset['exibir'] == '0') {
                                            $selected = 'selected';
                                        } ?>
                                        <option value="0" <?php echo $selected ?>>Não</option>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Posição</label>
                                <div class="controls">
                                    <select name="posicao_oferta" id="posicao_oferta" class='select2-me input-xlarge'
                                            required>
                                        <option value="">-- Selecione uma Opção --</option>
                                        <?php
                                        $selected = '';
                                        if ($row_Recordset['posicao'] == 'banner1') {
                                            $selected = 'selected';
                                        } ?>
                                        <option value="banner1" <?php echo $selected ?>>Primeira Oferta</option>
                                        <?php
                                        $selected = '';
                                        if ($row_Recordset['posicao'] == 'banner2') {
                                            $selected = 'selected';
                                        } ?>
                                        <option value="banner2" <?php echo $selected ?>>Segunda Oferta</option>
                                        <?php
                                        $selected = '';
                                        if ($row_Recordset['posicao'] == 'banner3') {
                                            $selected = 'selected';
                                        } ?>
                                        <option value="banner3" <?php echo $selected ?>>Terceira Oferta</option>
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

        <br><br>

        <!--manter 4 </div>-->

    </div>
</div>

</div>
</div>
<?php include("footer.php"); ?>

</body>

</html>