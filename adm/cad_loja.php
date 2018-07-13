<?php
include("acesso.php");
include("config/base_lista.php");
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
                <h1>Cadastro de Lojas</h1>
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
                    <a href="#">Cadastro de Lojas</a>
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
                        <form action="efetua_cad_loja.php" method="POST"
                              class='form-horizontal form-striped'>
                            <div class="control-group">
                                <label for="password" class="control-label">Nome da Loja</label>
                                <div class="controls">
                                    <input type="text" name="nome_loja" id="nome_loja" class="input-xlarge"
                                           placeholder="Informe o nome da loja" rel="tooltip" title="Nome da Loja"
                                           required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="textarea" class="control-label">Texto Apresentação</label>
                                <div class="controls">
                                <textarea name="texto_loja" id="texto_loja" rows="5" class="input-block-level"
                                          placeholder="Informe o texto da apresentação" rel="tooltip"
                                          title="Texto da Apresentação" required></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">Link Video</label>
                                <div class="controls">
                                    <input type="text" name="video_loja" id="video_loja" class="input-xlarge"
                                           placeholder="Link do Video" rel="tooltip" title="Link do Video" required>
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