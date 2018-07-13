<?php
include("acesso.php");
include("config/base_lista.php");
include('config/functions_sys.php');
$id_evento = $_GET['var_even'];
$row = montaQuery($id_evento, 'crono_eventos', $conectar);
$id_status = $row['status'];
$row_RecordsetSta = montaQuery($id_status, 'status', $conectar);
$id_loja = $row['loja'];
$row_RecordsetLja = montaQuery($id_loja, 'lojas', $conectar);
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
                <h1>Visualização de Evento</h1>
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
                    <a href="#">Cronograma de Eventos</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Visualização de Evento</a>
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
                        <h3><i class="icon-th-list"></i> Dados do Evento</h3>
                    </div>
                    <div class="box-content nopadding">
                        <form action="administrador.php" method="POST" class='form-horizontal form-striped'>

                            <div class="control-group">
                                <label for="textfield" class="control-label">Título</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" title="Título do Evento"
                                           value="<?php echo utf8_encode($row['titulo']); ?>" rel="tooltip" readonly>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="textfield" class="control-label">Início</label>
                                <div class="controls">
                                    <input type="text" class="input-medium" title="Data Inicial do Evento"
                                           value="<?php echo date('d/m/Y', strtotime($row['dat_comeco'])); ?>"
                                           rel="tooltip" readonly>&nbsp;&nbsp;<input
                                            type="text" class="input-mini" title="Hora Inicial do Evento"
                                            value="<?php echo $row['hor_inicial']; ?>" rel="tooltip" readonly>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="textfield" class="control-label">Final</label>
                                <div class="controls">
                                    <input type="text" class="input-medium" title="Data Final do Evento"
                                           value="<?php echo date('d/m/Y', strtotime($row['dat_final'])); ?>"
                                           rel="tooltip"
                                           readonly>&nbsp;&nbsp;<input type="text" class="input-mini"
                                                                       title="Hora Final do Evento"
                                                                       value="<?php echo $row['hor_final']; ?>"
                                                                       rel="tooltip" readonly>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">Dia Inteiro?</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" title="Duração do Evento" value="<?php
                                    $dia_inteiro = 'Sim';
                                    if ($row['dia_inteiro'] == 'n') {
                                        $dia_inteiro = 'Não';
                                    }
                                    echo $dia_inteiro; ?>" rel="tooltip" readonly>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">Loja</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" title="Loja do Evento"
                                           value="<?php echo utf8_encode($row_RecordsetLja['descricao']); ?>"
                                           rel="tooltip" readonly>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">Status</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" title="Status do Evento"
                                           value="<?php echo utf8_encode($row_RecordsetSta['descricao']); ?>"
                                           rel="tooltip" readonly>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textarea" class="control-label">Observação</label>
                                <div class="controls">
                                    <textarea rows="5" class="input-block-level"
                                              placeholder="Informações complementares sobre o evento" rel="tooltip"
                                              title="Informações complementares sobre o Evento"
                                              readonly><?php echo utf8_encode($row['observacao']); ?></textarea>
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
        <br><br><br><br>

        <!--manter 4 </div>-->

    </div>
</div>
</div>
</div>

<?php include("footer.php"); ?>

</body>

</html>