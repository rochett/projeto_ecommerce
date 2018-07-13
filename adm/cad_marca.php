<?php
include("acesso.php");
include("config/base_lista.php");
include("config/functions_sys.php");
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
                <h1>Cadastro de Marca</h1>
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
                    <a href="#">Cadastro de Marca</a>
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
                        <form action="efetua_cad_marca.php" method="POST" class='form-horizontal form-striped'>
                            <div class="control-group">
                                <label for="password" class="control-label">Descrição</label>
                                <div class="controls">
                                    <input type="text" name="nome_marca" id="nome_marca" class="input-xlarge"
                                           placeholder="Informe a descrição da marca" rel="tooltip"
                                           title="Descrição da Marca" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">Link Site</label>
                                <div class="controls">
                                    <input type="text" name="link_site" id="link_site" class="input-xlarge"
                                           placeholder="Informe o link para o site da marca" rel="tooltip"
                                           title="Link para o Site da Marca" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">Logo</label>
                                <div class="controls">
                                    <select name="marca_imagem" id="marca_imagem"
                                            class='select2-me input-xlarge telaAtendimento' required>
                                        <option value="">-- Selecione um Arquivo --</option>
                                        <?php
                                        $pasta = $_SESSION['pasta_telas'];
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


                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Efetuar Cadastro</button>
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