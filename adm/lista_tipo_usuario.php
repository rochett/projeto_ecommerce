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
                <h1>Listagem de Tipos de Usuário</h1>
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
                    <a href="#">Tipos de Usuário</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Listagem de Tipos de Usuário</a>
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
                            Tipos de Usuário
                        </h3>
                        <div class="actions">
                            <a href="cad_tipo_usuario.php" class="btn" rel="tooltip"
                               title="Cadastrar Tipo de Usuário"><i class="icon-save"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <table class="table table-hover table-nomargin dataTable table-bordered dataTable-buttonTools">
                            <thead>
                            <tr>
                                <th>Descrição</th>
                                <th>Data Cadastro</th>
                                <th>Hora Cadastro</th>
                                <th>Responsável</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM tipo_usuario ORDER BY descricao";
                            $res = mysqli_query($conectar, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                <tr>
                                    <td><?php echo utf8_encode($row['descricao']); ?></td>
                                    <td><?php echo exibeData($row['dat_cadastro']); ?></td>
                                    <td><?php echo $row['hor_cadastro']; ?></td>
                                    <td><?php echo utf8_encode($row['responsavel']); ?></td>
                                    <td>
                                        <a href="alt_tipo_usuario.php?var_tus=<?php echo $row['id']; ?>" class="btn"
                                           rel="tooltip" title="Editar"><i class="icon-edit"></i></a>
                                        <a href="#"
                                           onClick="confirmDelete('exclui_tipo_usuario.php?var_tus=',<?php echo $row['id']; ?>)"
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