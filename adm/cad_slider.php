<?php
include("acesso.php");
include("config/base_lista.php");
include("config/functions_sys.php");
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
                <h1>Cadastro de Slider</h1>
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
                    <a href="#">Slider</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Cadastro de Slider</a>
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
                        <h3><i class="icon-th-list"></i> Dados do Slider</h3>
                        <div class="actions">
                            <a href="lista_slider.php" class="btn" rel="tooltip" title="Retornar"><i
                                        class="icon-undo"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <form action="efetua_cad_slider.php" method="POST" class='form-horizontal form-striped'>
                            <div class="control-group">
                                <label for="textfield" class="control-label">Título</label>
                                <div class="controls">
                                    <input type="text" name="nome_slider" id="nome_slider" class="input-xlarge"
                                           placeholder="Informe a descrição do slider" rel="tooltip"
                                           title="Descrição do Slider" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="textarea" class="control-label">Descrição</label>
                                <div class="controls">
                                    <textarea rows="2" name="texto_slider" id="texto_slider"
                                              class="input-block-level" placeholder="Informe o texto do slider"
                                              rel="tooltip" title="Texto do Slider"
                                              required></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="textfield" class="control-label">Imagem</label>
                                <div class="controls">
                                    <select name="slider_imagem" id="slider_imagem"
                                            class='select2-me input-xlarge telaAtendimento' required>
                                        <option value="">-- Selecione um Arquivo --</option>
                                        <?php
                                        $pasta = $_SESSION['pasta_imagens_slider'];
                                        $diretorio = dir($pasta);
                                        while (($arquivo = $diretorio->read()) !== false) {
                                            if ($arquivo != '.' and $arquivo != '..') {
                                                echo '<option value="' . $arquivo . '">' . $arquivo . '</option>';
                                            }
                                        }
                                        $diretorio->close();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">Exibir?</label>
                                <div class="controls">
                                    <select name="exibir_slider" id="exibir_slider"
                                            class='select2-me input-xlarge' required>
                                        <option value="">-- Selecione uma Opção --</option>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Efetuar Cadastro</button>
                                <button type="reset" class="btn">Desfazer Alterações</button>
                            </div>
                        </form>
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