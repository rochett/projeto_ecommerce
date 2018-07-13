<?php
    include("Connections/conectar.php");
    include("data/data_header.php");
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php utf8_encode($row_RecordsetConfig['nome_empresa']); ?></title>
    <base/>
    <meta name="description" content="Loja Teste"/>
    <link rel="shortcut icon" href="icon/favicon-16.png" sizes="16x16">
    <link rel="icon" href="icon/favicon-32.png" sizes="32x32">
    <link rel="icon" href="icon/favicon-48.png" sizes="48x48">
    <link rel="icon" href="icon/favicon-64.png" sizes="64x64">
    <link rel="icon" href="icon/favicon-128.png" sizes="128x128">
    <!-- iPad com Retina Display -->
    <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">
    <!-- iPhone com Retina Display -->
    <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
    <!-- Primeira e segunda geração de iPad -->
    <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
    <!-- Versões antigas de iPhone, iPod Touch e Android 2.2+  -->
    <link rel="apple-touch-icon" href="icon/apple-touch-icon.png">
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/magnum/stylesheet/slideshow.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/magnum/stylesheet/carousel.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/magnum/stylesheet/pavblog.css" media="screen"/>
    <script type="text/javascript" src="catalog/view/javascript/jquery/jquery-1.7.1.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="catalog/view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css"/>
    <script type="text/javascript" src="catalog/view/javascript/jquery/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="catalog/view/javascript/common.js"></script>
    <link rel="stylesheet" href="catalog/view/theme/magnum/stylesheet/assets/css/bootstrap.css">
    <link rel="stylesheet" href="catalog/view/theme/magnum/stylesheet/assets/css/bootstrap-responsive.min.css">
    <script src="catalog/view/theme/magnum/stylesheet/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="catalog/view/theme/magnum/stylesheet/stylesheet.css">
    <link rel="stylesheet" href="catalog/view/theme/magnum/stylesheet/pavmegamenu.css">
    <script src="catalog/view/javascript/jquery/jquery.bxslider.min.js"></script>
    <link rel="stylesheet" href="catalog/view/theme/magnum/stylesheet/jquery.bxslider.css">
    <script src="catalog/view/javascript/jquery/livesearch.js"></script>
    <link rel="stylesheet" href="catalog/view/theme/magnum/stylesheet/responsive.css">
    <script src="catalog/view/javascript/jquery/cloud-zoom.js"></script>
    <link rel="stylesheet" href="catalog/view/theme/magnum/stylesheet/cloud-zoom.css" type="text/css">
    <script src='catalog/view/javascript/jquery/jquery.cookie.js'></script>
    <script src='catalog/view/javascript/jquery/jquery.hoverIntent.minified.js'></script>
    <script src='catalog/view/javascript/jquery/jquery.dcjqaccordion.2.7.min.js'></script>
    <script src='js/accordion.js'></script>
    <script src="catalog/view/javascript/jquery/tabs.js"></script>
    <script src="catalog/view/javascript/jquery/colorbox/jquery.colorbox-min.js"></script>
    <script src="catalog/view/javascript/jquery/jquery.total-storage.min.js"></script>
    <script src="catalog/view/javascript/jquery/pavblog_script.js"></script>
    <script src="catalog/view/javascript/jquery/nivo-slider/jquery.nivo.slider.js"></script>
    <script src="catalog/view/javascript/jquery/jquery.cycle.js"></script>
    <script src="catalog/view/javascript/jquery/jquery.jcarousel.min.js"></script>
    <link href="catalog/view/theme/magnum/stylesheet/skins/skin1.css" rel="stylesheet">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <link href="css/style_index.css" rel="stylesheet">
    <script type="text/javascript" src="fancybox/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="fancybox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="fancybox/fancybox/jquery.fancybox-1.3.4.css" media="screen"/>
    <link rel="stylesheet" href="css/style_product.css">
    <script src='js/maps.js'></script>
    <script src='js/masks.js'></script>
    <script src='js/jump_menu.js'></script>
    <script src='js/cnpj_validate.js'></script>
    <script src='js/only_number.js'></script>
</head>
<body>
<div class="container">
    <div class="row">
        <header></header>
        <div class="span12 cols-responsive">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="nav-collapse collapse">
                        <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <ul class="nav navbar-navf megamenu">
                            <li class="home">
                                <a href="./"><img src="image/data/logo-magnum.png"
                                                  alt="<?php echo utf8_encode($row_RecordsetConfig['nome_empresa']); ?>"
                                                  border="0" class="logo"
                                                  title="<?php echo utf8_encode($row_RecordsetConfig['nome_empresa']); ?>"/></a>
                            </li>
                            <li class="pull-right">
                                <a href="store.php?var=<?php echo $quem_somos; ?>"><span
                                            class="menu-title">A Marca</span><span
                                            class="menu-desc">Quem Somos</span></a>
                            </li>
                            <li class="parent dropdown pav-parrent">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span class="menu-title">Loja</span><span class="menu-desc">Loja Virtual</span><b
                                            class="caret"></b></a>
                                <div class="dropdown-menu level1">
                                    <div class="dropdown-menu-inner">
                                        <div class="row-fluid">
                                            <div class="mega-col span12" data-type="menu">
                                                <div class="mega-col-inner">
                                                    <ul>
                                                        <li class=" ">
                                                            <iframe allowfullscreen="" frameborder="0" height="180"
                                                                    src="<?php echo $row_RecordsetLoja['video_loja']; ?>"
                                                                    width="320"></iframe>
                                                            <h3>
                                                                <a href="loja.php?var=<?php echo $row_RecordsetLoja['id']; ?>"><?php echo utf8_encode($row_RecordsetLoja['descricao']); ?></a>
                                                            </h3>
                                                            <p><?php echo utf8_encode(nl2br($row_RecordsetLoja['texto'])); ?></p>
                                                            <p>
                                                            <div class="blog-social2 clearfix">
                                                                <div class="buttons">
                                                                    <table width="100%" border="0">
                                                                        <tr>
                                                                            <td width="80%" align="left">
                                                                                <div class="addthis_toolbox addthis_default_style ">
                                                                                    <a class="addthis_button_facebook_share"
                                                                                       fb:share:layout="button_count"></a>
                                                                                    <a class="addthis_button_tweet"></a>
                                                                                </div>
                                                                                <script type="text/javascript"
                                                                                        src="s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e7336275f7f0c5b"></script>
                                                                            </td>
                                                                            <td width="20%" align="right">
                                                                                <div class="right">
                                                                                    <a href="loja.php?var=<?php echo $row_RecordsetLoja['id']; ?>"
                                                                                       class="button">Loja</a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="parent dropdown pav-parrent">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span
                                            class="menu-title">FAQ</span><span class="menu-desc">Dúvidas</span><b
                                            class="caret"></b></a>
                                <div class="dropdown-menu level1">
                                    <div class="dropdown-menu-inner">
                                        <div class="row-fluid">
                                            <div class="mega-col span12" data-type="menu">
                                                <div class="mega-col-inner">
                                                    <ul>
                                                        <li class=" ">
                                                            <a href="store.php?var=<?php echo $perguntas_frequentes; ?>"><span
                                                                        class="menu-title">Perguntas Frequentes</span></a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="store.php?var=<?php echo $como_comprar; ?>"><span
                                                                        class="menu-title">Como Comprar</span></a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="store.php?var=<?php echo $termos_uso; ?>"><span
                                                                        class="menu-title">Termos de Uso</span></a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="store.php?var=<?php echo $entrega_retirada; ?>"><span
                                                                        class="menu-title">Entrega e Retirada</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="pull-right">
                                <a href="contato.php"><span class="menu-title">Contato</span><span class="menu-desc">Fale Conosco</span></a>
                            </li>
                            <li class="pull-right">
                                <a href="contatorevenda.php?var=<?php echo $revenda; ?>"><span class="menu-title">Revenda</span><span
                                            class="menu-desc">Seja um Revendedor</span></a>
                            </li>
                            <li class="pull-right">
                                <a href="newsletter.php?var=<?php echo $newsletter; ?>"><span class="menu-title">Newsletter</span><span
                                            class="menu-desc">Novidades <?php echo utf8_encode($row_RecordsetConfig['nome_empresa']); ?></span></a>
                            </li>
                            <li class="pull-right">
                                <a href="store.php?var=<?php echo $como_comprar; ?>"><span class="menu-title">Como Comprar</span><span
                                            class="menu-desc">Seja nosso Cliente!</span></a>
                            </li>
                            <li class="pull-right">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="span12">
            <div id="notification"></div>
        </div>