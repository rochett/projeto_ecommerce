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
                <h1>Cadastro de Cronograma de Evento</h1>
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
                    <a href="#">Cronogramas de Eventos</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Cadastro de Cronograma de Evento</a>
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
                        <h3><i class="icon-th-list"></i> Dados do Cronograma de Evento</h3>
                        <div class="actions">
                            <a href="lista_cronograma.php" class="btn" rel="tooltip" title="Retornar"><i
                                        class="icon-undo"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <form action="efetua_cad_cronograma.php" method="POST" class='form-horizontal form-striped'>
                            <div class="control-group">
                                <label for="textfield" class="control-label">Título</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" name="titulo_cronograma"
                                           id="titulo_cronograma" placeholder="Informe o título do cronograma"
                                           title="Título do Evento" rel="tooltip" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">Início</label>
                                <div class="controls">
                                    <input type="date" name="data_inicio" id="data_inicio" placeholder="dd/mm/aaaa"
                                           class="input-medium" rel="tooltip" title="Data Início do Cronograma"
                                           required>&nbsp;&nbsp;<input type="time" name="hora_inicio" id="hora_inicio"
                                                                       placeholder="00:00:00" step="10"
                                                                       class="input-small" rel="tooltip"
                                                                       title="Hora do Início do Cronograma" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">Final</label>
                                <div class="controls">
                                    <input type="date" name="data_fim" id="data_fim" placeholder="dd/mm/aaaa"
                                           class="input-medium" rel="tooltip" title="Data Final do Cronograma" required>&nbsp;&nbsp;<input
                                            type="time" name="hora_fim" id="hora_fim" placeholder="00:00:00" step="10"
                                            class="input-small" rel="tooltip" title="Hora do Fim do Cronograma"
                                            required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">Dia Inteiro?</label>
                                <div class="controls">
                                    <select name="dia_inteiro" id="dia_inteiro" class='select2-me input-xlarge'
                                            required>
                                        <option value="">-- Selecione uma Opção --</option>
                                        <option value="s">Sim</option>
                                        <option value="n">Não</option>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Loja</label>
                                <div class="controls">
                                    <select name="loja_cronograma" id="loja_cronograma" class='select2-me input-xlarge'
                                            required>
                                        <option value="">-- Selecione uma Loja --</option>
                                        <?php

                                        $sql = "SELECT id, descricao FROM lojas ORDER BY descricao";
                                        $res = mysqli_query($conectar, $sql);
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            echo '<option value="' . $row['id'] . '">' . utf8_encode($row['descricao']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Status do Cronograma</label>
                                <div class="controls">
                                    <select name="status_cronograma" id="status_cronograma"
                                            class='select2-me input-xlarge' required>
                                        <option value="">-- Selecione um Status --</option>
                                        <?php

                                        $sql = "SELECT id, descricao FROM status ORDER BY descricao";
                                        $res = mysqli_query($conectar, $sql);
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            echo '<option value="' . $row['id'] . '">' . utf8_encode($row['descricao']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Responsável pelo Cronograma</label>
                                <div class="controls">
                                    <select name="responsavel_cronograma" id="responsavel_cronograma"
                                            class='select2-me input-xlarge' required>
                                        <option value="">-- Selecione um Responsável --</option>
                                        <?php

                                        $sql = "SELECT id, usuario FROM usuarios_adm ORDER BY usuario";
                                        $res = mysqli_query($conectar, $sql);
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            echo '<option value="' . $row['id'] . '">' . utf8_encode($row['usuario']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textarea" class="control-label">Observação</label>
                                <div class="controls">
                                    <textarea rows="5" name="observacao_cronograma" id="observacao_cronograma"
                                              class="input-block-level"
                                              placeholder="Informações complementares sobre o cronograma" rel="tooltip"
                                              title="Informações complementares sobre o Cronograma"></textarea>
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