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
                <h1>Log de Usuários</h1>
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
                    <a href="#">Usuários</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Log de Acesso</a>
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
                            Listagem de Logs
                        </h3>
                    </div>
                    <div class="box-content nopadding">
                        <table class="table table-hover table-nomargin dataTable table-bordered dataTable-scroll-x dataTable-nordering dataTable-buttonTools"
                               id="tabela" name="tabela">
                            <thead>
                            <tr>
                                <th>Usuário</th>
                                <th>Login</th>
                                <th>Ação</th>
                                <th>Data Log</th>
                                <th>Hora Log</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM log_usuarios_adm ORDER BY id DESC";
                            $res = mysqli_query($conectar, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                <tr>
                                    <td><?php echo utf8_encode($row['usuario']); ?></td>
                                    <td><?php echo utf8_encode($row['login']); ?></td>
                                    <td><?php echo utf8_encode($row['acao']); ?></td>
                                    <td><?php echo exibeData($row['dat_log']); ?></td>
                                    <td><?php echo $row['hor_log']; ?></td>
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