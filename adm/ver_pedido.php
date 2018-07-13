<?php
include("acesso.php");
include("config/base_lista.php");
include("config/functions_sys.php");
$id_pedido = $_GET['var_ped'];
$row_Recordset = montaQuery($id_pedido, 'pedidos', $conectar);
?>
<body>
<?php
$_SESSION['opcao_menu'] = 2;
include("header.php");
?>
<div id="main">
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1>Visualização de Pedido</h1>
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
                    <a href="#">Visualização de Pedido</a>
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
                        <h3><i class="icon-th-list"></i> Dados do Pedido</h3>
                        <div class="actions">
                            <a href="lista_pedido.php" class="btn" rel="tooltip" title="Retornar"><i
                                        class="icon-undo"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <form action="lista_pedido.php" method="POST"
                              class='form-horizontal form-striped'>
                            <div class="control-group">
                                <label for="password" class="control-label">Nome</label>
                                <div class="controls">
                                    <input name="nome_pedido" type="text" class="input-xlarge" id="nome_pedido"
                                           placeholder="Responsável pelo Pedido" title="Responsável pelo Pedido"
                                           value="<?php echo utf8_encode($row_Recordset['nome']); ?>" rel="tooltip"
                                           readonly>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">E-mail</label>
                                <div class="controls">
                                    <input name="email_pedido" type="text" class="input-xlarge" id="email_pedido"
                                           placeholder="E-mail do Responsável pelo Pedido"
                                           title="E-mail do Responsável pelo Pedido"
                                           value="<?php echo utf8_encode($row_Recordset['email']); ?>" rel="tooltip"
                                           readonly>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">Produto</label>
                                <div class="controls">
                                    <input name="cod_prod_pedido" type="text" class="input-mini" id="cod_prod_pedido"
                                           placeholder="Código do Produto" title="Código do Produto"
                                           value="<?php echo $row_Recordset['cod_produto']; ?>" rel="tooltip"
                                           readonly>&nbsp;
                                    <input name="prod_pedido" type="text" class="input-xlarge" id="prod_pedido"
                                           placeholder="Produto" title="Produto"
                                           value="<?php echo utf8_encode($row_Recordset['descricao']); ?>" rel="tooltip"
                                           readonly>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">Cor/Tamanho/Quant.</label>
                                <div class="controls">
                                    <input name="cor_pedido" type="text" class="input-medium" id="cor_pedido"
                                           placeholder="Cor" title="Cor"
                                           value="<?php echo utf8_encode($row_Recordset['cor']); ?>" rel="tooltip"
                                           readonly>&nbsp;
                                    <input name="tam_pedido" type="text" class="input-mini" id="tam_pedido"
                                           placeholder="Tamanho" title="Tamanho"
                                           value="<?php echo utf8_encode($row_Recordset['tamanho']); ?>" rel="tooltip"
                                           readonly>&nbsp;
                                    <input name="quant_pedido" type="text" class="input-mini" id="quant_pedido"
                                           placeholder="Quantidade" title="Quantidade"
                                           value="<?php echo utf8_encode($row_Recordset['quantidade']); ?>"
                                           rel="tooltip"
                                           readonly>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">Dados do Envio</label>
                                <div class="controls">
                                    <input name="cep_pedido" type="text" class="input-medium" id="cep_pedido"
                                           placeholder="CEP" title="CEP"
                                           value="<?php echo utf8_encode($row_Recordset['cep']); ?>" rel="tooltip"
                                           readonly>&nbsp;
                                    <input name="tipo_entrega_pedido" type="text" class="input-medium"
                                           id="tipo_entrega_pedido"
                                           placeholder="Tipo da Entrega" title="Tipo da Entrega"
                                           value="<?php echo utf8_encode($row_Recordset['tipo_entrega']); ?>"
                                           rel="tooltip"
                                           readonly>&nbsp;
                                    <input name="prazo_entrega_pedido" type="text" class="input-medium"
                                           id="prazo_entrega_pedido"
                                           placeholder="Prazo da Entrega" title="Prazo da Entrega"
                                           value="<?php echo utf8_encode($row_Recordset['prazo_entrega']); ?>"
                                           rel="tooltip"
                                           readonly>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password" class="control-label">Val. Frete/Produto</label>
                                <div class="controls">
                                    <input name="frete_pedido" type="text" class="input-medium" id="frete_pedido"
                                           placeholder="Valor do Frete" title="Valor do Frete"
                                           value="<?php echo formataMoeda($row_Recordset['valor_frete']); ?>"
                                           rel="tooltip"
                                           readonly>&nbsp;
                                    <input name="valor_produto_pedido" type="text" class="input-medium"
                                           id="valor_produto_pedido"
                                           placeholder="Valor do Produto" title="Valor do Produto"
                                           value="<?php echo formataMoeda($row_Recordset['valor_produto']); ?>"
                                           rel="tooltip"
                                           readonly>&nbsp;
                                    <input name="valor_total_pedido" type="text" class="input-medium"
                                           id="valor_total_pedido"
                                           placeholder="Valor Total do Pedido" title="Valor Total do Pedido"
                                           value="<?php echo formataMoeda(($row_Recordset['valor_produto']) + ($row_Recordset['valor_frete'])); ?>"
                                           rel="tooltip"
                                           readonly>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="textfield" class="control-label">Cadastro</label>
                                <div class="controls">
                                    <input type="text" class="input-medium" title="Data do Pedido"
                                           value="<?php echo exibeData($row_Recordset['dat_cadastro']); ?>"
                                           rel="tooltip" readonly>&nbsp;&nbsp;<input
                                            type="text" class="input-mini" title="Hora do Pedido"
                                            value="<?php echo $row_Recordset['hor_cadastro']; ?>" rel="tooltip" readonly>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Retornar</button>
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