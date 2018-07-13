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
                <h1>Ajuda do Sistema</h1>
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
                    <a href="ajuda.php">Ajuda do Sistema</a>
                </li>
            </ul>
            <div class="close-bread">
                <a href="#"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="box box-bordered box-color">
                    <div class="box-title">
                        <h3>
                            <i class="icon-reorder"></i>
                            Tópicos da Ajuda
                        </h3>
                    </div>
                    <div class="box-content nopadding">
                        <div class="tabs-container">
                            <ul class="tabs tabs-inline tabs-left">
                                <li class='active'>
                                    <a href="#first" data-toggle='tab'><i class="icon-lock"></i> Acessando</a>
                                </li>
                                <li>
                                    <a href="#second" data-toggle='tab'><i class="icon-user"></i> Utilização</a>
                                </li>
                                <li>
                                    <a href="#thirds" data-toggle='tab'><i class="icon-twitter"></i> Busca</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content padding tab-content-inline" style="min-height:100px;">
                            <div class="tab-pane active" id="first">
                                <div class="accordion" id="accordion3">
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3"
                                               href="#collapseOne2">
                                                Anim pariatur cliche...Lorem ???
                                            </a>
                                        </div>
                                        <div id="collapseOne2" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                Anim pariatur cliche...Lorem ipsum dolore dolor occaecat dolore elit
                                                deserunt incididunt ex sed nostrud aute aliquip ut elit sed nisi.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                                               data-parent="#accordion3" href="#collapseTwo2">
                                                Question #2 Lorem ipsum Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.?
                                            </a>
                                        </div>
                                        <div id="collapseTwo2" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                Anim pariatur cliche...Lorem ipsum Duis occaecat Excepteur est magna
                                                tempor ex ea enim sunt mollit proident. Lorem ipsum sed laboris ut
                                                adipisicing ut et aute occaecat aute enim occaecat.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                                               data-parent="#accordion3" href="#collapseThree2">
                                                Question #3 Culpa Adiposisisng?
                                            </a>
                                        </div>
                                        <div id="collapseThree2" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                Anim pariatur cliche...Lorem ipsum do culpa adipisicing quis non nisi
                                                ullamco. Lorem ipsum velit dolore qui Excepteur fugiat et dolor proident
                                                reprehenderit magna aliqua enim consectetur nisi. Lorem ipsum sit
                                                laborum est magna veniam ex ut velit do aliqua amet dolore enim minim
                                                eu. Lorem ipsum adipisicing officia occaecat deserunt enim minim veniam
                                                sint amet sed consectetur nisi quis.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="second">
                                <div class="accordion" id="accordion4">
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4"
                                               href="#collapseOne3">
                                                Anim pariatur cliche...Lorem ???
                                            </a>
                                        </div>
                                        <div id="collapseOne3" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                Anim pariatur cliche...Lorem ipsum dolore dolor occaecat dolore elit
                                                deserunt incididunt ex sed nostrud aute aliquip ut elit sed nisi.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                                               data-parent="#accordion4" href="#collapseTwo3">
                                                Sed laboris ut adipisicing ut et aute occaecat aute enim occaecat?
                                            </a>
                                        </div>
                                        <div id="collapseTwo3" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                Anim pariatur cliche...Lorem ipsum Duis occaecat Excepteur est magna
                                                tempor ex ea enim sunt mollit proident. Lorem ipsum sed laboris ut
                                                adipisicing ut et aute occaecat aute enim occaecat.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="thirds">
                                <div class="accordion" id="accordion5">
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5"
                                               href="#collapseOne4">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing?
                                            </a>
                                        </div>
                                        <div id="collapseOne4" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                Anim pariatur cliche...Lorem ipsum dolore dolor occaecat dolore elit
                                                deserunt incididunt ex sed nostrud aute aliquip ut elit sed nisi.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

