<?php
require_once('Connections/conectar.php');
session_start();
include("config/base_lista.php");
?>

<body class='locked'>
<div class="wrapper">
    <div class="pull-left">
        <img src="img/foto/<?php echo $_SESSION['foto']; ?>" alt="" width="200" height="200">
        <a href="index.php">Não é <?php echo $_SESSION['utiliza']; ?>?</a>
    </div>
    <div class="right">
        <div class="upper">
            <h2><?php echo $_SESSION['utiliza']; ?></h2>
            <span>Bloqueado</span>
        </div>
        <form action="valida_sessao.php" method='post'>
            <input type="password" name="password" placeholder="Senha" id="password">
            <div>
                <input type="submit" value="Entrar" class='btn btn-inverse'>
            </div>
        </form>
    </div>
</div>
</body>
</html>
