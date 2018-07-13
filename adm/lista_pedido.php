<?php
include("acesso.php");
include("config/base_lista.php");
include("config/functions_sys.php");
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
                <h1>Listagem de Pedidos</h1>
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
                    <a href="#">Loja</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Listagem de Pedidos</a>
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
                            Pedidos
                        </h3>

                    </div>
                    <div class="box-content nopadding">
                        <table class="table table-hover table-nomargin dataTable table-bordered dataTable-scroll-x dataTable-buttonTools">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Cod.Produto</th>
                                <th>Descrição</th>
                                <th>Cor/Tamanho</th>
                                <th>CEP</th>
                                <th>Quant.</th>
                                <th>Tipo Ent.</th>
                                <th>Prazo Ent.</th>
                                <th>Frete</th>
                                <th>Val.Produto</th>
                                <th>Cadastro</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM pedidos ORDER BY id DESC";
                            $res = mysqli_query($conectar, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                <tr>
                                    <td><?php echo utf8_encode($row['nome']); ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['cod_produto']; ?></td>
                                    <td><?php echo utf8_encode($row['descricao']); ?></td>
                                    <td><?php echo utf8_encode($row['cor']).'/'.utf8_encode($row['tamanho']); ?></td>
                                    <td><?php echo $row['cep'];?></td>
                                    <td><?php echo $row['quantidade'];?></td>
                                    <td><?php echo $row['tipo_entrega'];?></td>
                                    <td><?php echo $row['prazo_entrega'];?></td>
                                    <td><?php echo formataMoeda($row['valor_frete']);?></td>
                                    <td><?php echo formataMoeda($row['valor_produto']);?></td>
                                    <td><?php echo exibeData($row['dat_cadastro']).'-'.$row['hor_cadastro']; ?></td>
                                    <td>
                                        <a href="ver_pedido.php?var_ped=<?php echo $row['id']; ?>" class="btn"
                                           rel="tooltip" title="Editar"><i class="icon-eye-open"></i></a>
                                        <a href="#"
                                           onClick="confirmDelete('exclui_pedido.php?var_ped=',<?php echo $row['id']; ?>)"
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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </div>
</div>

</div>

</div>
<?php include("footer.php"); ?>
</body>

</html>