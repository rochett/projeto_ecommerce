<?php
include("acesso.php");
include("config/base_lista.php");
?>

<body>

<?php
$_SESSION['opcao_menu'] = 7;
include("header.php");
?>

<div id="main">
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1>Contato</h1>
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
                    <a href="administrador.php">Home</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Ajuda</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="contato.php">Contato</a>
                </li>
            </ul>
            <div class="close-bread">
                <a href="#"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="box">
                    <div class="box-title">
                        <h3>
                            <i class="icon-ok"></i>
                            Fale Conosco
                        </h3>
                    </div>
                    <div class="box-content">
                        <form action="envia_contato.php" method="POST" class='form-horizontal form-validate' id="bb">
                            <div class="control-group">
                                <label for="textfield" class="control-label">Usuário</label>
                                <div class="controls">
                                    <input type="text" name="textfield" id="textfield" class="input-xlarge"
                                           data-rule-required="true" data-rule-minlength="2"
                                           value="<?php echo $_SESSION['utiliza']; ?>" readonly>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="emailfield" class="control-label">Email</label>
                                <div class="controls">
                                    <input type="text" name="emailfield" id="emailfield" class="input-xlarge"
                                           data-rule-email="true" data-rule-required="true"
                                           value="<?php echo $_SESSION['usuarios']; ?>" readonly>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="textfield" class="control-label">Assunto</label>
                                <div class="controls">
                                    <select name="assunto" id="assunto" class="select2-me input-xlarge"
                                            data-rule-required="true">
                                        <option value="">-- Selecione o Assunto --</option>
                                        <option value="1">Dúvidas</option>
                                        <option value="2">Sugestões</option>
                                        <option value="3">Reclamações</option>
                                        <option value="4">Atendimento</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="textfield" class="control-label">Mensagem</label>
                                <div class="controls">
                                    <textarea name="mensagem" rows="10" class="input-xlarge" id="mensagem"
                                              data-rule-required="true" data-rule-minlength="2"></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" class="btn btn-primary" value="Enviar">
                                <input type="reset" class='btn' value="Limpar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12"></div>
        </div>
    </div>
</div>
</div>

<?php include("footer.php"); ?>

</body>
</html>