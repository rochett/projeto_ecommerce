<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent"/>

    <title>LojaTeste 1.0 | Login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap responsive -->
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <!-- icheck -->
    <link rel="stylesheet" href="css/plugins/icheck/all.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Color CSS -->
    <link rel="stylesheet" href="css/themes.css">

    <!-- Input, Buttons CSS -->
    <link rel="stylesheet" href="css/style_sisinfra.css">


    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Nice Scroll -->
    <script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- Validation -->
    <script src="js/plugins/validation/jquery.validate.min.js"></script>
    <script src="js/plugins/validation/additional-methods.min.js"></script>
    <!-- icheck -->
    <script src="js/plugins/icheck/jquery.icheck.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/eakroko.js"></script>

    <!--[if lte IE 9]>
    <script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
    <script>
        $(document).ready(function () {
            $('input, textarea').placeholder();
        });
    </script>
    <![endif]-->


    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- Apple devices Homescreen icon -->
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png"/>

</head>

<body class='login'>
<div class="wrapper">
    <h1><a href="index.php"><img src="img/logo-big.png" alt="" class='retina-ready' width="59" height="49">LojaTeste 1.0</a>
    </h1>
    <div class="login-body">
        <h2>LOGIN</h2>
        <form action="valida_login.php" method='post' class='form-validate' id="test">
            <div class="control-group">
                <div class="email controls">
                    <input type="text" name='username' placeholder="Usuário" class='input-block-level'
                           data-rule-required="true" data-rule-email="true" id="username">
                </div>
            </div>
            <div class="control-group">
                <div class="pw controls">
                    <input type="password" name="password" placeholder="Senha" class='input-block-level'
                           data-rule-required="true" id="password">
                </div>
            </div>
            <div class="submit">
                <div class="remember">
                    <input type="checkbox" name="remember" class='icheck-me' data-skin="square" data-color="blue"
                           id="remember"> <label for="remember">Manter conectado</label>
                </div>
                <input type="submit" value="Acessar" class='btn btn-primary'>
            </div>
        </form>
        <div class="forget">
            <a href="#" class="btn" name="esqueceu_senha" id="esqueceu_senha" rel="tooltip"
               title="A senha será enviada ao seu e-mail (LOGIN)"><span>Esqueceu a senha?</span></a>
        </div>
    </div>
</div>

<script>
    $(function () {
        $('#esqueceu_senha').click(function () {
            var login = $('#username').val();
            window.location = 'recupera_senha.php?var_username=' + login;
        });
    });
</script>

</body>
</html>