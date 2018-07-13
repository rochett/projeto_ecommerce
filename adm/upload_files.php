<?php
include("acesso.php");
include("config/base_lista.php");
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
                <h1>Upload de Arquivos</h1>
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
                    <a href="#">Upload de Arquivos</a>
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
                        <h3><i class="icon-th-list"></i> Dados do Arquivo</h3>
                        <div class="actions">
                            <a href="administrador.php" class="btn" rel="tooltip" title="Retornar"><i
                                        class="icon-undo"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <form action="uploader_files.php" method="POST" class='form-horizontal form-striped'
                              enctype="multipart/form-data">
                            <div class="control-group">
                                <label for="textfield" class="control-label"></label>
                                <div class="input-group">
                                    <select name="pasta_destino" id="pasta_destino" class="select2-me input-xlarge"
                                            required>
                                        <option value="">-- Selecione um Tipo de Arquivo --</option>
                                        <option value="produto_img">Imagem Produto</option>
                                        <option value="secao_img">Imagem Seção da Loja</option>
                                        <option value="marca_img">Imagem Marca</option>
                                        <option value="oferta_img">Imagem Oferta</option>
                                        <option value="slider_img">Imagem Slider</option>
                                        <option value="usuarios_img">Imagem Usuários</option>
                                        <option value="banner_img">Imagem Banner</option>
                                        <option value="destaque_vid">Video Destaque</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group input-file" name="fileToUpload" id="fileToUpload">
											<span class="input-group-btn">
            									<div class="input-prepend"> 
                                            		<label for="textfield" class="control-label"></label>
        											<button class="btn btn-primary btn-choose" type="button"><i
                                                                class="icon-copy"></i>&nbsp;Selecionar o Arquivo</button><input
                                                            type="text" rel="tooltip" title="Arquivo a ser enviado"
                                                            class="form-control input-xlarge"
                                                            placeholder='Nenhum Arquivo Selecionado' required/><button
                                                            class="btn btn-danger btn-reset" type="button"><i
                                                                class="icon-trash"></i>&nbsp;Remover</button><button
                                                            type="submit" class="btn btn-primary"><i
                                                                class="icon-upload-alt"></i>&nbsp;Efetuar Upload</button>

                                            	</div>    
    										</span>
                                </div>
                            </div>

                            <div class="tab-content padding tab-content-inline tab-content-bottom">
                                <div class="tab-pane active" id="profile">
                                    <div class="span9">
                                        <div class="form-group">
                                            <div class="controls">
                                                <p align="center">Apenas arquivos do tipo jpg, png, gif (imagens) ou mp4
                                                    e mpeg (videos) são permitidos.<br>
                                                    Verifique a extensão do mesmo antes de enviá-lo. O tamanho do
                                                    arquivo é limitado a 10Mb</p>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                        </div>
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