<?php
include("acesso.php");
$titulo_pagina = 'Relatório de Log de Acesso';
include("config/base_lista.php");
if (isset($_SESSION['result_rel_log'])) {
    $sqlRelLog = $_SESSION['result_rel_log'];
} else {
    $sqlRelLog = "SELECT * from log_usuarios_adm WHERE id=0";
}
if (isset($_SESSION['usu_rel_log'])) {
    $usu_rel_log = $_SESSION['usu_rel_log'];
} else {
    $usu_rel_log = "";
}
if (isset($_SESSION['data_inicio_rel_log'])) {
    $data_inicio_rel_log = $_SESSION['data_inicio_rel_log'];
} else {
    $data_inicio_rel_log = NULL;
}
if (isset($_SESSION['data_termino_rel_log'])) {
    $data_termino_rel_log = $_SESSION['data_termino_rel_log'];
} else {
    $data_termino_rel_log = NULL;
}
?>

<body>
<?php
$_SESSION['opcao_menu'] = 5;
include("header.php");
?>
<div id="main">
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1>Relatório de Log de Acesso</h1>
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
                    <a href="#">Usuários</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Log de Acesso</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Relatório de Log de Acesso</a>
                </li>
            </ul>
            <div class="close-bread">
                <a href="#"><i class="icon-remove"></i></a>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span12">
                <div class="box box-bordered">
                    <div class="box-title">
                        <h3><i class="icon-th-list"></i> Filtro</h3>
                        <div class="actions">
                            <a href="log_usuarios.php" class="btn" rel="tooltip" title="Retornar"><i
                                        class="icon-undo"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <form action="busca_rel_log.php" method="POST" class='form-horizontal form-striped'>
                            <div class="control-group">
                                <label for="password" class="control-label">Usuário</label>
                                <div class="controls">
                                    <select name="usuario_filtro" id="usuario_filtro" class='select2-me input-xlarge'>
                                        <option value="">-- Selecione um Usuário --</option>
                                        <?php

                                        $sql = "SELECT id, usuario FROM usuarios_adm ORDER BY usuario";
                                        $res = mysqli_query($conectar, $sql);
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            if ($row['usuario'] == $usu_rel_log) {
                                                $selected = 'selected';
                                            } else {
                                                $selected = '';
                                            }
                                            echo '<option value="' . $row['id'] . '" ' . $selected . '>' . utf8_encode($row['usuario']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="textfield" class="control-label">Período</label>
                                <div class="controls">
                                    <input type="date" name="data_inicio_filtro" id="data_inicio_filtro"
                                           placeholder="dd/mm/aaaa" class="input-medium" rel="tooltip"
                                           title="Data do Início do Período"
                                           value="<?php echo $data_inicio_rel_log; ?>">&nbsp;a&nbsp;<input type="date"
                                                                                                           name="data_termino_filtro"
                                                                                                           id="data_termino_filtro"
                                                                                                           placeholder="dd/mm/aaaa"
                                                                                                           class="input-medium"
                                                                                                           rel="tooltip"
                                                                                                           title="Data do Término do Período"
                                                                                                           value="<?php echo $data_termino_rel_log; ?>">
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Filtrar Dados</button>
                                <button type="button" class="btn" id="limpar_filtros" name="limpar_filtros">Limpar
                                    Filtro
                                </button>
                            </div>
                        </form>


                        <div class="box box-color box-bordered">
                            <div class="box-title">
                                <h3>
                                    <i class="icon-table"></i>
                                    Log de Acesso
                                </h3>
                            </div>
                            <div class="box-content nopadding">
                                <table class="table table-hover table-nomargin dataTable table-bordered dataTable-nordering dataTable-buttonTools"
                                       id="tabela" name="tabela">
                                    <thead>
                                    <tr>
                                        <th>NºLog</th>
                                        <th>Usuário</th>
                                        <th>Login</th>
                                        <th>Ação</th>
                                        <th>Data</th>
                                        <th>Hora</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $res = mysqli_query($conectar, $sqlRelLog);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        ?>
                                        <tr>
                                            <td><?php echo str_pad($row['id'], 5, '0', STR_PAD_LEFT); ?></td>
                                            <td><?php echo utf8_encode($row['usuario']); ?></td>
                                            <td><?php echo $row['login']; ?></td>
                                            <td><?php echo utf8_encode($row['acao']); ?></td>
                                            <td><?php echo date("d/m/Y", strtotime($row['dat_log'])); ?></td>
                                            <td><?php echo $row['hor_log']; ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br>


    <!--manter 4 </div>-->

</div>
</div>
</div>
</div>

<?php include("footer.php"); ?>

</body>

</html>
                    
  