<?php
include("acesso.php");
include("config/base_lista.php");
include('config/functions_sys.php');
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
                <h1>Log de Backup</h1>
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
                    <a href="#">Log de Backup</a>
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
                            Listagem de Backup
                        </h3>
                        <div class="actions">
                            <a href="backup_data.php" class="btn" rel="tooltip" title="Efetuar Backup"><i
                                        class="icon-download-alt"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <table class="table table-hover table-nomargin dataTable table-bordered dataTable-nordering dataTable-buttonTools"
                               id="tabela" name="tabela">
                            <thead>
                            <tr>
                                <th>Arquivo</th>
                                <th>Data Cadastro</th>
                                <th>Hora Cadastro</th>
                                <th>Responsável</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM log_backup ORDER BY id DESC";
                            $res = mysqli_query($conectar, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo $_SESSION['pasta_backup'] . utf8_encode($row['arquivo']) ?>"><?php echo utf8_encode($row['arquivo']); ?></a>
                                    </td>
                                    <td><?php echo exibeData($row['dat_cadastro']); ?></td>
                                    <td><?php echo $row['hor_cadastro']; ?></td>
                                    <td><?php echo utf8_encode($row['responsavel']); ?></td>
                                    <td>
                                        <a href="exclui_backup.php?var_bck=<?php echo $row['id']; ?>&&var_arquivo=<?php echo $row['arquivo']; ?>"
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
        <br><br><br><br><br><br><br><br>
        <!--manter 4 </div>-->

    </div>
</div>

</div>
<?php include("footer.php"); ?>
</div>


</body>

</html>