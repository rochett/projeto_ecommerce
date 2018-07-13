<?php
include("acesso.php");
include("config/base_lista.php");
include('config/functions_sys.php');
?>

<body>
<?php
$_SESSION['opcao_menu'] = 2;
include("header.php");
?>
<div id="main">
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1>Listagem de Contatos</h1>
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
                    <a href="#">Atendimento</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Contato</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Listagem de Contatos</a>
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
                            Contatos
                        </h3>
                        <div class="actions"></div>
                    </div>
                    <div class="box-content nopadding">
                        <table class="table table-hover table-nomargin dataTable table-bordered dataTable-buttonTools">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Assunto</th>
                                <th>Telefone</th>
                                <th>Mensagem</th>
                                <th>Data Cadastro</th>
                                <th>Hora Cadastro</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM contato ORDER BY data DESC";
                            $res = mysqli_query($conectar, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                <tr>
                                    <td><?php echo utf8_encode($row['nome']); ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo utf8_encode($row['assunto']); ?></td>
                                    <td><?php echo $row['telefone']; ?></td>
                                    <td><?php echo utf8_encode($row['mensagem']); ?></td>
                                    <td><?php echo exibeData($row['data']); ?></td>
                                    <td><?php echo $row['hora']; ?></td>
                                    <td>
                                        <a href="#"
                                           onClick="confirmDelete('exclui_contato.php?var_con=',<?php echo $row['id']; ?>)"
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
        <br><br><br><br>

    </div>
</div>

</div>
<?php include("footer.php"); ?>
</div>

</body>

</html>