<?php
include("acesso.php");
include("config/base_lista.php");
include("config/functions_sys.php");
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
                <h1>Configuração do Sistema</h1>
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
                    <a href="#">Configuração do Sistema</a>
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
                            Dados do Sistema
                        </h3>
                    </div>
                    <div class="box-content nopadding">
                        <table class="table table-hover table-nomargin dataTable table-bordered dataTable-scroll-x dataTable-buttonTools">
                            <thead>
                            <tr>
                                <th>Empresa</th>
                                <th>Site</th>
                                <th>Sigla</th>
                                <th>Pasta Img.Usuários</th>
                                <th>Pasta Img.Slider</th>
                                <th>Pasta Vídeos</th>
                                <th>Pasta Telas</th>
                                <th>Pasta Seções</th>
                                <th>Pasta Ofertas</th>
                                <th>Pasta Banner</th>
                                <th>Pasta Img.Produtos</th>
                                <th>Pasta Backup</th>
                                <th>Data Cadastro</th>
                                <th>Hora Cadastro</th>
                                <th>Responsável</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM config_sistema";
                            $res = mysqli_query($conectar, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                <tr>
                                    <td><?php echo utf8_encode($row['nome_empresa']); ?></td>
                                    <td><?php echo $row['site']; ?></td>
                                    <td><?php echo utf8_encode($row['define_sistema']); ?></td>
                                    <td><?php echo $row['pasta_imagens_user']; ?></td>
                                    <td><?php echo $row['pasta_imagens_slider']; ?></td>
                                    <td><?php echo $row['pasta_videos']; ?></td>
                                    <td><?php echo $row['pasta_telas']; ?></td>
                                    <td><?php echo $row['pasta_secoes']; ?></td>
                                    <td><?php echo $row['pasta_ofertas']; ?></td>
                                    <td><?php echo $row['pasta_banner']; ?></td>
                                    <td><?php echo $row['pasta_imagens_produto']; ?></td>
                                    <td><?php echo $row['pasta_backup']; ?></td>
                                    <td><?php echo exibeData($row['dat_cadastro']); ?></td>
                                    <td><?php echo $row['hor_cadastro']; ?></td>
                                    <td><?php echo utf8_encode($row['responsavel']); ?></td>
                                    <td>
                                        <a href="alt_config.php?var_conf=<?php echo $row['id']; ?>" class="btn"
                                           rel="tooltip" title="Editar"><i class="icon-edit"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!--manter 4 </div>-->

    </div>
</div>

</div>

</div>
<?php include("footer.php"); ?>
</body>

</html>