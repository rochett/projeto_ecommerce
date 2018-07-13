<?php
include("acesso.php");
$busca_solucao = utf8_decode($_GET['busca_chave']);
include("config/base_lista.php");
include("config/functions_sys.php");
?>

<body>
<?php
$_SESSION['opcao_menu'] = 0;
include("header.php");
?>
<div id="main">
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1>Resultados da Busca</h1>
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
                    <a href="#">Busca</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Resultados da Busca</a>
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
                            Resultados da Busca
                        </h3>
                    </div>
                    <div class="box-content nopadding">
                        <table class="table table-hover table-nomargin dataTable table-bordered dataTable-buttonTools">
                            <thead>
                            <tr>
                                <th>Problema</th>
                                <th>Descrição</th>
                                <th>Solução</th>
                                <th>Data Cadastro</th>
                                <th>Hora Cadastro</th>
                                <th>Responsável</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * from solucoes WHERE tipo_problema LIKE '%" . $busca_solucao . "%' OR descricao LIKE '%" . $busca_solucao . "%' OR solucao LIKE '%" . $busca_solucao . "%'";
                            $res = mysqli_query($conectar, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                <tr>
                                    <td><?php echo utf8_encode($row['tipo_problema']); ?></td>
                                    <td><?php echo utf8_encode($row['descricao']); ?></td>
                                    <td><?php echo utf8_encode($row['solucao']); ?></td>
                                    <td><?php echo exibeData($row['dat_cadastro']); ?></td>
                                    <td><?php echo $row['hor_cadastro']; ?></td>
                                    <td><?php echo utf8_encode($row['responsavel']); ?></td>
                                    <td>
                                        <a href="ver_solucao.php?var_sol=<?php echo $row['id']; ?>&busca_solucao=<?php echo utf8_encode($busca_solucao); ?>"
                                           class="btn" rel="tooltip" title="Ver Solução"><i
                                                    class="icon-eye-open"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br>
        <!--manter 4 </div>-->

    </div>
</div>
</div>
</div>

<?php include("footer.php"); ?>

</body>

</html>