<?php
include("acesso.php");
include("config/base_lista.php");
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
                <h1>Cadastro de Tipos de Usuário</h1>
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
                    <a href="#">Cadastro de Tipos de Usuário</a>
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
                        <h3><i class="icon-th-list"></i> Dados do Tipo de Usuário</h3>
                        <div class="actions">
                            <a href="lista_tipo_usuario.php" class="btn" rel="tooltip" title="Retornar"><i
                                        class="icon-undo"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <form action="efetua_cad_tipo_usuario.php" method="POST" class='form-horizontal form-striped'>
                            <div class="control-group">
                                <label for="password" class="control-label">Tipo de Usuário</label>
                                <div class="controls">
                                    <input type="text" name="nome_tipo_usuario" id="nome_tipo_usuario"
                                           class="input-xlarge" placeholder="Informe o tipo de usuário" rel="tooltip"
                                           title="Tipo de Usuário" required>
                                </div>
                            </div>


                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Efetuar Cadastro</button>
                                <button type="reset" class="btn">Desfazer Alterações</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--manter 4 </div>-->

</div>
</div>
</div>
</div>

<?php include("footer.php"); ?>

</body>

</html>