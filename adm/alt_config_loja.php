<?php
include("acesso.php");
include("config/base_lista.php");
include("config/functions_sys.php");
$id_config_loja = $_GET['var_confl'];
$row_RecordsetAltConfig = montaQuery($id_config_loja, 'config_site', $conectar);
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
                    <a href="#">Loja</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Ambiente</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Edição de Configurações da Loja</a>
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
                            <a href="lista_config_loja.php" class="btn" rel="tooltip" title="Retornar"><i
                                        class="icon-undo"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <form action="altera_config_loja.php?var_confl=<?php echo $id_config_loja ?>" method="POST"
                              class='form-horizontal form-striped'>
                        	<div class="control-group">
    							<label for="textfield" class="control-label">NºLoja</label>
								    <div class="controls">
								        <div class="input-prepend">
								            <input type="text" class='input-small form-control spenumeric' name="numero_loja"
								                   id="numero_loja" placeholder="0" min="0" dir="rtl" rel="tooltip" 
								                   title="Informe o Número da Loja" value="<?php echo $row_RecordsetAltConfig['numero_loja']; ?>" required>
								        </div>
								    </div>
							</div>
                              
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
                                <label for="emailfield" class="control-label">Email</label>
                                <div class="controls">
                                    <input type="text" name="email" id="email" placeholder="Informe o e-mail da empresa" 
                                    title="E-mail da Empresa" class="input-xlarge"
                                           data-rule-email="true" data-rule-required="true" rel="tooltip" 
                                           value="<?php echo $row_RecordsetAltConfig['email']; ?>" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">Telefone</label>
                                <div class="controls">
                                    <input name="telefone" type="text" class="input-xlarge" id="telefone"
                                           placeholder="Informe o telefone da empresa" title="Telefone da Empresa"
                                           value="<?php echo $row_RecordsetAltConfig['telefone']; ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">Endereço</label>
                                <div class="controls">
                                    <input name="endereco" type="text" class="input-xlarge" id="endereco"
                                           placeholder="Informe o endereço da empresa" title="Endereço da Empresa"
                                           value="<?php echo $row_RecordsetAltConfig['endereco']; ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>  
                            <div class="control-group">
                                <label for="password" class="control-label">Cidade</label>
                                <div class="controls">
                                    <input name="cidade" type="text" class="input-xlarge" id="cidade"
                                           placeholder="Informe a cidade da empresa" title="Cidade da Empresa"
                                           value="<?php echo $row_RecordsetAltConfig['cidade']; ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>
                            <div class="control-group">
    							<label for="password" class="control-label">UF</label>
								    <div class="controls">
								        <select name="estado" id="estado" class='select2-me input-xlarge' required>
            								<option value="">-- Selecione um Estado --</option>
            								<?php
												$estados = array('AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO');
												foreach ($estados as $estado) {
													if ($row_RecordsetAltConfig['estado'] == $estado) {
									                    $selected = 'selected';
									                }else{
									                    $selected = '';
									                }
													echo '<option value="'.$estado.'" '.$selected.'>'.$estado.'</option>';
												}
            								?>
								        </select>
								    </div>
							</div>  
							<div class="control-group">
                                <label for="password" class="control-label">País</label>
                                <div class="controls">
                                    <input name="pais" type="text" class="input-xlarge" id="pais"
                                           placeholder="Informe o país da empresa" title="País da Empresa"
                                           value="<?php echo $row_RecordsetAltConfig['pais']; ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">CEP</label>
                                <div class="controls">
                                    <input name="cep" type="text" class="input-xlarge" id="cep"
                                           placeholder="Informe o cep da empresa" title="CEP da Empresa"
                                           value="<?php echo $row_RecordsetAltConfig['cep']; ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>
                            <div class="control-group">
    							<label for="textarea" class="control-label">Mapa</label>
							    <div class="controls">
                                    <textarea rows="5" name="mapa" id="mapa"
                                              class="input-block-level" placeholder="Informe a localização da empresa"
                                              rel="tooltip" title="Localização da Empresa"
                                              required><?php echo $row_RecordsetAltConfig['mapa']; ?></textarea>
							    </div>
							</div>
                             <div class="control-group">
                                <label for="password" class="control-label">Video Entrada</label>
                                <div class="controls">
                                    <input name="video_entrada" type="text" class="input-xlarge" id="video_entrada"
                                           placeholder="Informe o link do video" title="Link do Video"
                                           value="<?php echo $row_RecordsetAltConfig['video_entrada']; ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">Banner</label>
                                <div class="controls">
                                    <select name="banner" id="banner" class='select2-me input-xlarge'
                                            required>
                                        <option value="">-- Selecione um Arquivo --</option>
                                        <?php
                                        $pasta = $_SESSION['pasta_banner'];
                                        $diretorio = dir($pasta);
                                        while (($arquivo = $diretorio->read()) !== false) {
                                            if ($arquivo != '.' and $arquivo != '..') {
                                                if (utf8_encode($row_RecordsetAltConfig['banner']) == $arquivo) {
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
                                <label for="password" class="control-label">Link Facebook</label>
                                <div class="controls">
                                    <input name="link_facebook" type="text" class="input-xlarge" id="link_facebook"
                                           placeholder="Informe link do facebook da empresa" title="Link Facebook"
                                           value="<?php echo $row_RecordsetAltConfig['link_facebook']; ?>"
                                           rel="tooltip">
                                </div>
                            </div>      
							
                            <div class="control-group">
                                <label for="password" class="control-label">Link Twitter</label>
                                <div class="controls">
                                    <input name="link_twitter" type="text" class="input-xlarge" id="link_twitter"
                                           placeholder="Informe link do twitter" title="Link Twitter"
                                           value="<?php echo $row_RecordsetAltConfig['link_twitter']; ?>"
                                           rel="tooltip">
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label for="password" class="control-label">Link Googleplus</label>
                                <div class="controls">
                                    <input name="link_googleplus" type="text" class="input-xlarge" id="link_googleplus"
                                           placeholder="Informe o link do googleplus" title="Link GooglePlus"
                                           value="<?php echo $row_RecordsetAltConfig['link_googleplus']; ?>"
                                           rel="tooltip">
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label for="password" class="control-label">Link Pinterest</label>
                                <div class="controls">
                                    <input name="link_pinterest" type="text" class="input-xlarge" id="link_pinterest"
                                           placeholder="Informe o link do pinterest" title="Link Pinterest"
                                           value="<?php echo $row_RecordsetAltConfig['link_pinterest']; ?>"
                                           rel="tooltip">
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label for="password" class="control-label">Link Instagram</label>
                                <div class="controls">
                                    <input name="link_instagram" type="text" class="input-xlarge" id="link_instagram"
                                           placeholder="Informe o link do instagram" title="Link Instagram"
                                           value="<?php echo $row_RecordsetAltConfig['link_instagram']; ?>"
                                           rel="tooltip">
                                </div>
                            </div>                            
                            <div class="control-group">
                                <label for="password" class="control-label">Link YouTube</label>
                                <div class="controls">
                                    <input name="link_youtube" type="text" class="input-xlarge" id="link_youtube"
                                           placeholder="Informe o link do youtube" title="Link Youtube"
                                           value="<?php echo $row_RecordsetAltConfig['link_youtube']; ?>"
                                           rel="tooltip">
                                </div>
                            </div>
                            <div class="control-group">
    							<label for="textarea" class="control-label">Atendimento</label>
							    <div class="controls">
                                    <textarea rows="5" name="atendimento" id="atendimento"
                                              class="input-block-level" placeholder="Informe o horário de atendimento"
                                              rel="tooltip" title="´Horário de Atendimento"
                                              required><?php echo utf8_encode($row_RecordsetAltConfig['atendimento']); ?></textarea>
							    </div>
							</div>
                            <div class="control-group">
                                <label for="password" class="control-label">Tit.Apresentação</label>
                                <div class="controls">
                                    <input name="titulo_apresentacao" type="text" class="input-xlarge" id="titulo_apresentacao"
                                           placeholder="Informe o título da apresentação" title="Título da Apresentação"
                                           value="<?php echo utf8_encode($row_RecordsetAltConfig['titulo_apresentacao']); ?>"
                                           rel="tooltip" required>
                                </div>
                            </div>
                            <div class="control-group">
    							<label for="textarea" class="control-label">Apresentação</label>
							    <div class="controls">
                                    <textarea rows="5" name="apresentacao" id="apresentacao"
                                              class="input-block-level" placeholder="Informe o texto de apresentação"
                                              rel="tooltip" title="Texto de Apresentação"
                                              required><?php echo utf8_encode($row_RecordsetAltConfig['apresentacao']); ?></textarea>
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