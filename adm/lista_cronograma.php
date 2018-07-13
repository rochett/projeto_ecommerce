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
                <h1>Listagem de Cronogramas de Eventos</h1>
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
                    <a href="#">Cronograma de Eventos</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Listagem de Cronogramas de Eventos</a>
                </li>
            </ul>
            <div class="close-bread">
                <a href="#"><i class="icon-remove"></i></a>
            </div>
        </div>


        <div class="row-fluid">
            <div class="span12">
                <div class="box box-color box-bordered">
                    <div class="box-title">
                        <h3>
                            <i class="icon-table"></i>
                            Cronogramas de Manutenção
                        </h3>
                        <div class="actions">
                            <a href="cad_cronograma.php" class="btn" rel="tooltip" title="Cadastrar Cronograma"><i
                                        class="icon-save"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <table class="table table-hover table-nomargin dataTable table-bordered dataTable-nordering"
                               id="tabela" name="tabela">
                            <thead>
                            <tr>
                                <th>Título</th>
                                <th>Loja</th>
                                <th>Data Início</th>
                                <th>Data Fim</th>
                                <th>Hor Ini</th>
                                <th>Hor Fim</th>
                                <th>Dia Int</th>
                                <th>Status</th>
                                <th>Resp</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM crono_eventos ORDER BY id DESC";
                            $res = mysqli_query($conectar, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {
                                $dia_inteiro = 'Sim';
                                if ($row['dia_inteiro'] == 'n') {
                                    $dia_inteiro = 'Não';
                                }
                                $row_RecordsetSta = montaQuery($row['status'], 'status', $conectar);
                                $row_RecordsetLja = montaQuery($row['loja'], 'lojas', $conectar);
                                ?>
                                <tr>
                                    <td><?php echo utf8_encode($row['titulo']); ?></td>
                                    <td><?php echo utf8_encode($row_RecordsetLja['descricao']); ?></td>
                                    <td><?php echo exibeData($row['dat_comeco']); ?></td>
                                    <td><?php echo exibeData($row['dat_final']); ?></td>
                                    <td><?php echo $row['hor_inicial']; ?></td>
                                    <td><?php echo $row['hor_final']; ?></td>
                                    <td><?php echo $dia_inteiro; ?></td>
                                    <td><?php echo utf8_encode($row_RecordsetSta['descricao']); ?></td>
                                    <td><?php echo utf8_encode($row['responsavel']); ?></td>
                                    <td>
                                        <a href="alt_cronograma.php?var_crm=<?php echo $row['id']; ?>" class="btn"
                                           rel="tooltip" title="Editar"><i class="icon-edit"></i></a>
                                        <a href="#"
                                           onClick="confirmDelete('exclui_cronograma.php?var_crm=',<?php echo $row['id']; ?>)"
                                           class="btn" rel="tooltip" title="Excluir"><i class="icon-remove"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--manter 4 </div>-->

    </div>
</div>

</div>
<?php include("footer.php"); ?>
</div>

</body>

</html>