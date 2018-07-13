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
                <h1>Listagem de Marcas</h1>
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
                    <a href="#">Marcas</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Listagem de Marcas</a>
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
                            Marcas
                        </h3>
                        <div class="actions">
                            <a href="cad_marca.php" class="btn" rel="tooltip" title="Cadastrar Marca"><i
                                        class="icon-save"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <table class="table table-hover table-nomargin dataTable table-bordered dataTable-buttonTools">
                            <thead>
                            <tr>
                                <th>Descrição</th>
                                <th>Link Site</th>
                                <th>Imagem</th>
                                <th>Data Cadastro</th>
                                <th>Hora Cadastro</th>
                                <th>Responsável</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM marcas ORDER BY nome";
                            $res = mysqli_query($conectar, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                <tr>
                                    <td><?php echo utf8_encode($row['nome']); ?></td>
                                    <td><a href="<?php echo $row['link_site']; ?>"
                                           target="_blank"><?php echo $row['link_site']; ?></a></td>
                                    <td><?php echo exibeImagem(80, 80, $_SESSION['pasta_telas'], $row['imagem']) ?></td>
                                    <td><?php echo exibeData($row['dat_cadastro']); ?></td>
                                    <td><?php echo $row['hor_cadastro']; ?></td>
                                    <td><?php echo utf8_encode($row['responsavel']); ?></td>
                                    <td>
                                        <a href="alt_marca.php?var_mar=<?php echo $row['id']; ?>" class="btn"
                                           rel="tooltip" title="Editar"><i class="icon-edit"></i></a>
                                        <a href="#"
                                           onClick="confirmDelete('exclui_marca.php?var_mar=',<?php echo $row['id']; ?>)"
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

    </div>
</div>

</div>
<?php include("footer.php"); ?>
</div>

</body>

</html>