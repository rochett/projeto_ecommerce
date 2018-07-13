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
                <h1>Cadastro de Usuários</h1>
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
                    <a href="#">Cadastro de Usuários</a>
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
                        <h3><i class="icon-th-list"></i> Dados do Usuário</h3>
                        <div class="actions">
                            <a href="lista_usuarios.php" class="btn" rel="tooltip" title="Retornar"><i
                                        class="icon-undo"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <form action="efetua_cad_usuario.php" method="POST" class='form-horizontal form-striped'>
                            <div class="control-group">
                                <label for="password" class="control-label">Usuário</label>
                                <div class="controls">
                                    <input type="text" name="nome_usuario_usu" id="nome_usuario_usu"
                                           class="input-xlarge" placeholder="Informe o nome do usuário" rel="tooltip"
                                           title="Nome do Usuário" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Login</label>
                                <div class="controls">
                                    <input type="text" name="login_usuario_usu" id="login_usuario_usu"
                                           class="input-xlarge" placeholder="Informe o login do usuário" rel="tooltip"
                                           title="Login do Usuário" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Senha</label>
                                <div class="controls">
                                    <input type="text" name="senha_usuario_usu" id="senha_usuario_usu"
                                           class="input-xlarge" placeholder="Informe a senha do usuário" rel="tooltip"
                                           title="Senha do Usuário" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Avatar</label>
                                <div class="controls">
                                    <select name="img_avatar_usuario_usu" id="img_avatar_usuario_usu"
                                            class='select2-me input-xlarge' required>
                                        <option value="">-- Selecione um Arquivo --</option>
                                        <?php
                                        $pasta = $_SESSION['pasta_fotos'];
                                        $diretorio = dir($pasta);
                                        while (($arquivo = $diretorio->read()) !== false) {
                                            if ($arquivo != '.' and $arquivo != '..') {
                                                echo '<option value="' . $arquivo . '">' . $arquivo . '</option>';
                                            }
                                        }
                                        $diretorio->close();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Foto</label>
                                <div class="controls">
                                    <select name="img_foto_usuario_usu" id="img_foto_usuario_usu"
                                            class='select2-me input-xlarge' required>
                                        <option value="">-- Selecione um Arquivo --</option>
                                        <?php
                                        $pasta = $_SESSION['pasta_fotos'];
                                        $diretorio = dir($pasta);
                                        while (($arquivo = $diretorio->read()) !== false) {
                                            if ($arquivo != '.' and $arquivo != '..') {
                                                echo '<option value="' . $arquivo . '">' . $arquivo . '</option>';
                                            }
                                        }
                                        $diretorio->close();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Tipo do Usuário</label>
                                <div class="controls">
                                    <select name="tipo_usuario_usu" id="tipo_usuario_usu"
                                            class='select2-me input-xlarge' required>
                                        <option value="">-- Selecione um Tipo de Usuário --</option>
                                        <?php

                                        $sql = "SELECT id, descricao FROM tipo_usuario ORDER BY descricao";
                                        $res = mysqli_query($conectar, $sql);
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            echo '<option value="' . $row['id'] . '">' . utf8_encode($row['descricao']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="password" class="control-label">Loja</label>
                                <div class="controls">
                                    <select name="setor_usu" id="setor_usu" class='select2-me input-xlarge' required>
                                        <option value="">-- Selecione uma Loja --</option>
                                        <?php

                                        $sql = "SELECT id, descricao FROM lojas ORDER BY descricao";
                                        $res = mysqli_query($conectar, $sql);
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            echo '<option value="' . $row['id'] . '">' . utf8_encode($row['descricao']) . '</option>';
                                        }
                                        ?>
                                    </select>
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
<?php include("footer.php"); ?>
</div>
</div>

</body>

</html>