<?php
include("acesso.php");
include("config/base_lista.php");
include("config/functions_sys.php");
$id_solucao = $_GET['var_sol'];
$rowAltSol = montaQuery($id_solucao, 'solucoes', $conectar);
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
                <h1>Edição de Solução</h1>
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
                    <a href="#">Soluções</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Edição de Solução</a>
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
                        <h3><i class="icon-th-list"></i> Dados da Solução</h3>
                        <div class="actions">
                            <a href="lista_solucao.php" class="btn" rel="tooltip" title="Retornar"><i
                                        class="icon-undo"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <form action="altera_cad_solucao.php?var_sol=<?php echo $id_solucao; ?>" method="POST"
                              class='form-horizontal form-striped'>

                            <div class="control-group">
                                <label for="textarea" class="control-label">Tipo do Problema</label>
                                <div class="controls">
                                    <textarea rows="5" name="tipo_problema" id="tipo_problema" class="input-block-level"
                                              placeholder="Informações sobre o problema" rel="tooltip"
                                              title="Informações sobre o Problema"
                                              required><?php echo utf8_encode($rowAltSol['tipo_problema']); ?></textarea>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textarea" class="control-label">Descrição do Problema</label>
                                <div class="controls">
                                    <textarea rows="5" name="descricao_problema" id="descricao_problema"
                                              class="input-block-level" placeholder="Informe a descrição do problema"
                                              rel="tooltip" title="Informações sobre a Descrição do Problema"
                                              required><?php echo utf8_encode($rowAltSol['descricao']); ?></textarea>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textarea" class="control-label">Solução do Problema</label>
                                <div class="controls">
                                    <textarea rows="5" name="solucao_problema" id="solucao_problema"
                                              class="input-block-level" placeholder="Informe a solução do problema"
                                              rel="tooltip" title="Informações sobre a Solução do Problema"
                                              required><?php echo utf8_encode($rowAltSol['solucao']); ?></textarea>
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