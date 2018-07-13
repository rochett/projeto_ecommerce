<?php
include("acesso.php");
include("config/base_lista.php");
?>

<body>
<?php
$_SESSION['opcao_menu'] = 0;
include("user_header.php");
?>
<div id="main">
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1>Alterar dados</h1>
            </div>
            <div class="pull-right">
                </ul>
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
                    <a href="administrador.php">Home</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="user_dados.php">Alterar Senha</a>
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
                            <i class="icon-user"></i>
                            Alteração/Verificação de Senha - <?php echo utf8_encode($_SESSION['utiliza']); ?>
                        </h3>
                    </div>
                    <div class="box-content nopadding">
                        <ul class="tabs tabs-inline tabs-top">
                            <div class="tab-content padding tab-content-inline tab-content-bottom">
                                <div class="tab-pane active" id="profile">
                                    <form action="efetua_senha.php" class="form-horizontal" method="post">
                                        <div class="span10">
                                            <div class="control-group">
                                                <label for="pw" class="control-label right"></label>
                                                <div class="controls">
                                                    <p align="center">Após a confirmação da NOVA SENHA, o sistema
                                                        retornará à tela inicial<br>
                                                        para que o usuário faça o LOGIN com a NOVA SENHA cadastrada.</p>
                                                </div>
                                                <br>

                                                <label for="pw" class="control-label right">Senha Atual:</label>
                                                <div class="controls">
                                                    <input type="text" name="senha_antiga" id="senha_antiga"
                                                           class='input-xlarge'
                                                           value="<?php echo $_SESSION['senha_acesso']; ?>" readonly>

                                                </div>
                                                <br>
                                                <label for="pw" class="control-label right">Nova Senha:</label>
                                                <div class="controls">
                                                    <input type="text" name="nova_senha" id="nova_senha"
                                                           class='input-xlarge' value="" rel="tooltip"
                                                           title="Informe uma nova senha"
                                                           placeholder="Informe uma nova senha">
                                                </div>
                                            </div>

                                            <div class="row-fluid">
                                                <div class="span2"></div>

                                                <div class="form-actions">
                                                    <input type="submit" class='btn btn-primary' value="Salvar">
                                                    <input type="reset" class='btn' value="Desfazer Alterações">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12"></div>
</div>
</div>
</div></div>

<?php include("footer.php"); ?>

</body>
</html>