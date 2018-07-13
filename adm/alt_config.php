<?php
include("acesso.php");
include("config/base_lista.php");
include("config/functions_sys.php");
$id_config_sistema = $_GET['var_conf'];
$row_RecordsetAltConfig = montaQuery($id_config_sistema, 'config_sistema', $conectar);
?>

<body>
<?php
$_SESSION['opcao_menu'] = 6;
include("header.php");
?>
<div id="main">
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1>Edição de Ambiente</h1>
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
                    <a href="#">Configuração</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Sistema</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Ambiente</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Edição de Configurações do Sistema</a>
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
                        <h3><i class="icon-th-list"></i> Dados do Ambiente</h3>
                        <div class="actions">
                            <a href="lista_config.php" class="btn" rel="tooltip" title="Retornar"><i
                                        class="icon-undo"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <form action="altera_config.php?var_conf=<?php echo $id_config_sistema ?>" method="POST"
                              class='form-horizontal form-striped'>
                            <div class="control-group">
                                <label for="password" class="control-label">Empresa</label>
                                <div class="controls">
                                    <input name="nome_empresa" type="text" class="input-xlarge" id="nome_empresa"
                                           placeholder="Informe o nome da empresa" title="Nome da Empresa"
                                           value="<?php echo utf8_encode($row_RecordsetAltConfig['nome_empresa']); ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Site</label>
                                <div class="controls">
                                    <input name="site_empresa" type="text" class="input-xlarge" id="site_empresa"
                                           placeholder="Informe o nome da marca" title="Nome da Marca"
                                           value="<?php echo utf8_encode($row_RecordsetAltConfig['site']); ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Sigla</label>
                                <div class="controls">
                                    <input name="sigla_empresa" type="text" class="input-xlarge" id="sigla_empresa"
                                           placeholder="Informe a sigla da empresa" title="Sigla da Empresa"
                                           value="<?php echo utf8_encode($row_RecordsetAltConfig['define_sistema']); ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Pasta Img.Usuários</label>
                                <div class="controls">
                                    <input name="pasta_img_usuarios" type="text" class="input-xlarge"
                                           id="pasta_img_usuarios" placeholder="Informe a pasta de imagens de usuários"
                                           title="Pasta de Imagens de Usuários"
                                           value="<?php echo utf8_encode($row_RecordsetAltConfig['pasta_imagens_user']); ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Pasta Img.Slider</label>
                                <div class="controls">
                                    <input name="pasta_img_slider" type="text" class="input-xlarge"
                                           id="pasta_img_slider" placeholder="Informe a pasta de imagens do slider"
                                           title="Pasta de Imagens do Slider"
                                           value="<?php echo utf8_encode($row_RecordsetAltConfig['pasta_imagens_slider']); ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Pasta Vídeos</label>
                                <div class="controls">
                                    <input name="pasta_videos" type="text" class="input-xlarge" id="pasta_videos"
                                           placeholder="Informe a pasta de vídeos" title="Pasta de Vídeos"
                                           value="<?php echo utf8_encode($row_RecordsetAltConfig['pasta_videos']); ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Pasta Img.Marcas</label>
                                <div class="controls">
                                    <input name="pasta_img_marcas" type="text" class="input-xlarge" id="pasta_img_marcas"
                                           placeholder="Informe a pasta de imagem de marcas"
                                           title="Pasta Img. de Marcas"
                                           value="<?php echo utf8_encode($row_RecordsetAltConfig['pasta_telas']); ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Pasta Img.Seções da Loja</label>
                                <div class="controls">
                                    <input name="pasta_img_secoes" type="text" class="input-xlarge" id="pasta_img_secoes"
                                           placeholder="Informe a pasta imagens das seções da loja"
                                           title="Pasta Img. Seções da Loja"
                                           value="<?php echo utf8_encode($row_RecordsetAltConfig['pasta_secoes']); ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Pasta Img.Ofertas da Loja</label>
                                <div class="controls">
                                    <input name="pasta_img_ofertas" type="text" class="input-xlarge" id="pasta_img_ofertas"
                                           placeholder="Informe a pasta de imagens das ofertas da loja"
                                           title="Pasta Img. Ofertas da Loja"
                                           value="<?php echo utf8_encode($row_RecordsetAltConfig['pasta_ofertas']); ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Pasta Img.Banner da Loja</label>
                                <div class="controls">
                                    <input name="pasta_img_banner" type="text" class="input-xlarge" id="pasta_img_banner"
                                           placeholder="Informe a pasta de imagens do banner da loja"
                                           title="Pasta Img. Banner da Loja"
                                           value="<?php echo utf8_encode($row_RecordsetAltConfig['pasta_banner']); ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Pasta Img.Produtos</label>
                                <div class="controls">
                                    <input name="pasta_img_produtos" type="text" class="input-xlarge"
                                           id="pasta_img_produtos" placeholder="Informe a pasta de imagens de produtos"
                                           title="Pasta de Imagens de Produtos"
                                           value="<?php echo utf8_encode($row_RecordsetAltConfig['pasta_imagens_produto']); ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Pasta de Backup</label>
                                <div class="controls">
                                    <input name="pasta_backup" type="text" class="input-xlarge" id="pasta_backup"
                                           placeholder="Informe a pasta de backup" title="Pasta de Backup"
                                           value="<?php echo utf8_encode($row_RecordsetAltConfig['pasta_backup']); ?>"
                                           rel="tooltip" required>
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