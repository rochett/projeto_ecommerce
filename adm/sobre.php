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
                <h1>Sobre o Sistema</h1>
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
                    <a href="sobre.php">Sobre o <?php echo $_SESSION['nome_sistema']; ?> 1.0</a>
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
                            <i class="icon-reorder"></i>
                            <?php echo $_SESSION['nome_sistema']; ?> 1.0
                        </h3>
                    </div>
                    <div class="box-content">
                        <p>Idealização/Desenvolvimento/Análise de Negócios/Modelagem de Dados/Programação: Rochett
                            Tavares</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include("footer.php"); ?>

</body>

</html>

