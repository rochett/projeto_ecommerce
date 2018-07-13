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
                <h1>Configuração da Loja</h1>
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
                    <a href="#">Configuração da Loja</a>
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
                            Dados da Loja
                        </h3>
                    </div>
                    <div class="box-content nopadding">
                        <table class="table table-hover table-nomargin dataTable table-bordered dataTable-scroll-x dataTable-buttonTools">
                            <thead>
                            <tr>
                                <th>NºLoja</th>
                                <th>Empresa</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th>Endereço</th>
                                <th>Mapa</th>
                                <th>Video Entrada</th>
                                <th>Banner</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                                <th>GooglePlus</th>
                                <th>Pinterest</th>
                                <th>Instagram</th>
                                <th>YouTube</th>
                                <th>Atendimento</th>
                                <th>Tit.Apres.</th>
                                <th>Apres.</th>
                                <th>Data Cadastro</th>
                                <th>Hora Cadastro</th>
                                <th>Responsável</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM config_site";
                            $res = mysqli_query($conectar, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['numero_loja']; ?></td>
                                    <td><?php echo utf8_encode($row['nome_empresa']); ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['telefone']; ?></td>
                                    <td><?php echo utf8_encode($row['endereco']).', '.utf8_encode($row['cidade']).'-'.utf8_encode($row['estado']).' '.utf8_encode($row['cep']).' '.utf8_encode($row['pais']); ?></td>
                                    <td><?php echo $row['mapa']; ?></td>
                                    <td><?php echo exibeVideo(180, 120, $row['video_entrada']); ?></td>
                                    <td><?php echo exibeImagem(180, 120, $_SESSION['pasta_banner'], $row['banner']); ?></td>
                                    <td><?php echo $row['link_facebook']; ?></td>
                                    <td><?php echo $row['link_twitter']; ?></td>
                                    <td><?php echo $row['link_googleplus']; ?></td>
                                    <td><?php echo $row['link_pinterest']; ?></td>
                                    <td><?php echo $row['link_instagram']; ?></td>
                                    <td><?php echo $row['link_youtube']; ?></td>
                                    <td><?php echo reduzTexto($row['atendimento']); ?></td>
                                    <td><?php echo utf8_encode($row['titulo_apresentacao']); ?></td>
                                    <td><?php echo reduzTexto($row['apresentacao']); ?></td>
                                    <td><?php echo exibeData($row['dat_cadastro']); ?></td>
                                    <td><?php echo $row['hor_cadastro']; ?></td>
                                    <td><?php echo utf8_encode($row['responsavel']); ?></td>
                                    <td>
                                        <a href="alt_config_loja.php?var_confl=<?php echo $row['id']; ?>" class="btn"
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