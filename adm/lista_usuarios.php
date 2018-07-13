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
                <h1>Listagem de Usuários</h1>
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
                    <a href="#">Usuário</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Listagem de Usuários</a>
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
                            Usuários
                        </h3>
                        <div class="actions">
                            <a href="cad_usuario.php" class="btn" rel="tooltip" title="Cadastrar Usuário"><i
                                        class="icon-save"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <table class="table table-hover table-nomargin dataTable table-bordered dataTable-buttonTools">
                            <thead>
                            <tr>
                                <th>Usuário</th>
                                <th>Login</th>
                                <th>Senha</th>
                                <th>Loja</th>
                                <th>Img.Avatar</th>
                                <th>Img.Foto</th>
                                <th>Tipo Usu.</th>
                                <th>Cadastro</th>
                                <th>Resp.</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM usuarios_adm ORDER BY usuario ASC";
                            $res = mysqli_query($conectar, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {
                                $row_RecordsetLojUsu = montaQuery($row['loja'], 'lojas', $conectar);
                                $row_RecordsetTipUsu = montaQuery($row['tipo_usuario'], 'tipo_usuario', $conectar);
                                ?>
                                <tr>
                                    <td><?php echo utf8_encode($row['usuario']); ?></td>
                                    <td><?php echo utf8_encode($row['login']); ?></td>
                                    <td><?php echo utf8_encode($row['senha']); ?></td>
                                    <td><?php echo utf8_encode($row_RecordsetLojUsu['descricao']); ?></td>
                                    <td><?php echo exibeImagem(27, 27, $_SESSION['pasta_imagens_user'], $row['avatar']) ?></td>
                                    <td><?php echo exibeImagem(60, 60, $_SESSION['pasta_imagens_user'], $row['foto']) ?></td>
                                    <td><?php echo utf8_encode($row_RecordsetTipUsu['descricao']); ?></td>
                                    <td><?php echo exibeData($row['dat_cadastro']) . '-' . $row['hor_cadastro']; ?></td>
                                    <td><?php echo utf8_encode($row['responsavel']); ?></td>
                                    <td>
                                        <a href="alt_usuario.php?var_usu=<?php echo $row['id']; ?>" class="btn"
                                           rel="tooltip" title="Editar"><i class="icon-edit"></i></a>
                                        <a href="#"
                                           onClick="confirmDelete('exclui_usuario.php?var_usu=',<?php echo $row['id']; ?>)"
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