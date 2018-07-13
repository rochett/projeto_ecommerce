<?php
$pagina_retorno_sistema = $_SERVER['PHP_SELF'];
$arr = explode('/', $pagina_retorno_sistema);
$_SESSION['pagina_retorno'] = end($arr);
$_SESSION['path_sistema'] = $_SERVER['DOCUMENT_ROOT'] . '/loja_teste/adm/';

$ativo0 = "";
$ativo1 = "";
$ativo2 = "";
$ativo3 = "";
$ativo4 = "";
$ativo5 = "";
$ativo6 = "";
$ativo7 = "";

switch ($_SESSION['opcao_menu']) {
    case 0:
        $ativo0 = " class='active'";
        break;
    case 1:
        $ativo1 = " class='active'";
        break;
    case 2:
        $ativo2 = " class='active'";
        break;
    case 3:
        $ativo3 = " class='active'";
        break;
    case 4:
        $ativo4 = " class='active'";
        break;
    case 5:
        $ativo5 = " class='active'";
        break;
    case 6:
        $ativo6 = " class='active'";
        break;
    case 7:
        $ativo7 = " class='active'";
        break;
}

$hoje = date("Y-m-d");
?>
<div id="navigation">
    <div class="container-fluid">
        <a href="#" id="brand">LojaTeste</a>
        <a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Ocultar navegação"><i
                    class="icon-reorder"></i></a>
        <ul class='main-nav'>
            <li<?php echo $ativo0; ?>><a href="administrador.php"><span>Home</span>
                </a></li>
            <li<?php echo $ativo1; ?>>
                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                    <span>Cadastros</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">

                    <li class='dropdown-submenu'>
                        <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Lojas</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="lista_loja.php">Listar</a>
                            </li>
                            <li>
                                <a href="cad_loja.php">Cadastrar</a>
                            </li>
                        </ul>

                    <li class='dropdown-submenu'>
                        <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Cronograma de Eventos</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="lista_cronograma.php">Listar</a>
                            </li>
                            <li>
                                <a href="cad_cronograma.php">Cadastrar</a>
                            </li>
                        </ul>
                    </li>

                    <li class='dropdown-submenu'>
                        <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Banco de Soluções</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="lista_solucao.php">Listar</a>
                            </li>
                            <li>
                                <a href="cad_solucao.php">Cadastrar</a>
                            </li>
                        </ul>

                    <li class='dropdown-submenu'>
                        <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Tabelas Auxiliares</a>
                        <ul class="dropdown-menu">

                            <li class='dropdown-submenu'>
                                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Categorias</a>
                                <ul class="dropdown-menu">
                                    <li class='dropdown-submenu'>
                                        <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Produtos</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="lista_categoria_produto.php">Listar</a>
                                            </li>
                                            <li>
                                                <a href="cad_categoria_produto.php">Cadastrar</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class='dropdown-submenu'>
                                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Cor</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="lista_cor.php">Listar</a>
                                    </li>
                                    <li>
                                        <a href="cad_cor.php">Cadastrar</a>
                                    </li>
                                </ul>
                            </li>

                            <li class='dropdown-submenu'>
                                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Tamanho</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="lista_tamanho.php">Listar</a>
                                    </li>
                                    <li>
                                        <a href="cad_tamanho.php">Cadastrar</a>
                                    </li>
                                </ul>
                            </li>

                            <li class='dropdown-submenu'>
                                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Disponibilidade</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="lista_disp.php">Listar</a>
                                    </li>
                                    <li>
                                        <a href="cad_disp.php">Cadastrar</a>
                                    </li>
                                </ul>
                            </li>


                            <li class='dropdown-submenu'>
                                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Marcas</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="lista_marca.php">Listar</a>
                                    </li>
                                    <li>
                                        <a href="cad_marca.php">Cadastrar</a>
                                    </li>
                                </ul>
                            </li>

                            <li class='dropdown-submenu'>
                                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Status</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="lista_status.php">Listar</a>
                                    </li>
                                    <li>
                                        <a href="cad_status.php">Cadastrar</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>


            <li<?php echo $ativo2; ?>>
                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                    <span>Atendimento</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li class='dropdown-submenu'>
                        <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Contato</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="lista_contato.php">Listar</a>
                            </li>
                        </ul>
                    </li>
                    <li class='dropdown-submenu'>
                        <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Revenda</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="lista_revenda.php">Listar</a>
                            </li>
                        </ul>
                    </li>
                    <li class='dropdown-submenu'>
                        <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Pedidos</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="lista_pedido.php">Listar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li<?php echo $ativo3; ?>>
                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                    <span>Loja</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li class='dropdown-submenu'>
                        <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Produtos</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="lista_produto.php">Listar</a>
                            </li>
                            <li>
                                <a href="cad_produto.php">Cadastrar</a>
                            </li>
                        </ul>
                    <li class='dropdown-submenu'>
                        <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Ofertas</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="lista_oferta.php">Listar</a>
                            </li>
                            <li>
                                <a href="cad_oferta.php">Cadastrar</a>
                            </li>
                        </ul>
                    <li class='dropdown-submenu'>
                        <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Seções</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="lista_secoes.php">Listar</a>
                            </li>
                            <li>
                                <a href="cad_secoes.php">Cadastrar</a>
                            </li>
                        </ul>
                    <li class='dropdown-submenu'>
                        <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Slider</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="lista_slider.php">Listar</a>
                            </li>
                            <li>
                                <a href="cad_slider.php">Cadastrar</a>
                            </li>
                        </ul>


                </ul>
            </li>

            <li<?php echo $ativo5; ?>>
                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                    <span>Relatórios</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="rel_log.php">Log de Acesso</a>
                    </li>
                </ul>
            </li>

            <?php

            if ($_SESSION['libera'] == 1) {
                echo "<li" . $ativo6 . ">";
                echo "<a href='#' data-toggle='dropdown' class='dropdown-toggle'>";
                echo "<span>Configuração</span>";
                echo "<span class='caret'></span>";
                echo "</a>";
                echo "<ul class='dropdown-menu'>";
                echo "<li class='dropdown-submenu'>";
                echo "<a href='#'>Sistema</a>";
                echo "<ul class='dropdown-menu'>";
                if ($_SESSION['subtipo'] == 1) {
                    echo "<li>";
                    echo "<a href='lista_config.php'>Ambiente</a>";
                    echo "</li>";
                }
                echo "<li>";
                echo "<a href='log_backup.php'>Backup</a>";
                echo "</li>";
                echo "<li>";
                echo "<a href='upload_files.php'>Upload de Arquivos</a>";
                echo "</li>";
                echo "</ul>";
                echo "</li>";
                echo "<li class='dropdown-submenu'>";
                echo "<a href='#'>Loja</a>";
                echo "<ul class='dropdown-menu'>";
                if ($_SESSION['subtipo'] == 1) {
                    echo "<li>";
                    echo "<a href='lista_config_loja.php'>Ambiente</a>";
                    echo "</li>";
                }
                echo "<li>";
                echo "<a href='upload_files.php'>Upload de Arquivos</a>";
                echo "</li>";
                echo "</ul>";
                echo "</li>";
                echo "<li class='dropdown-submenu'>";
                echo "<a href='#'>Usuários</a>";
                echo "<ul class='dropdown-menu'>";
                if ($_SESSION['subtipo'] == 1) {
                    echo "<li>";
                    echo "<a href='lista_usuarios.php'>Listar</a>";
                    echo "</li>";
                    echo "<li>";
                    echo "<a href='cad_usuario.php'>Cadastrar</a>";
                    echo "</li>";
                }
                if ($_SESSION['subtipo'] == 1) {
                    echo "<li class='dropdown-submenu'>";
                    echo "<a href='#' data-toggle='dropdown' class='dropdown-toggle'>Tipos de Usuário</a>";
                    echo "<ul class='dropdown-menu'>";
                    echo "<li>";
                    echo "<a href='lista_tipo_usuario.php'>Listar</a>";
                    echo "</li>";
                    echo "<li>";
                    echo "<a href='cad_tipo_usuario.php'>Cadastrar</a>";
                    echo "</li>";
                    echo "</ul>";
                    echo "</li>	";
                }
                echo "<li>";
                echo "<a href='log_usuarios.php'>Log de Acesso</a>";
                echo "</li>";
                echo "</ul>";
                echo "</li>";
                echo "</ul>";
                echo "</li>";

            } ?>

            <li<?php echo $ativo7; ?>>
                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                    <span>Ajuda</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="ajuda.php">Ajuda do Sistema</a>
                    </li>
                    <li>
                        <a href="sobre.php">Sobre o <?php echo $_SESSION['nome_sistema']; ?> 1.0</a>
                    </li>
                    <li>
                        <a href="contato.php">Contato</a>
                    </li>
                </ul>
            </li>

        </ul>
        <div class="user">
            <ul class="icon-nav">
                <li class='dropdown' id="aviso_pedido"></li>
            </ul>
            <div class="dropdown">
                <a href="#" class='dropdown-toggle'
                   data-toggle="dropdown"><?php echo utf8_encode($_SESSION['utiliza']); ?> <img
                            src="img/foto/<?php echo $_SESSION['avatar']; ?>" alt=""></a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="dados_usuario.php">Alterar dados</a>
                    </li>
                    <li>
                        <a href="valida_bloqueioacesso.php">Bloquear</a>
                    </li>
                    <li>
                        <a href="valida_logoutacesso.php">LogOut</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="content">
    <div id="left">
        <form action="busca_resultado.php" method="GET" class='search-form'>
            <div class="search-pane">
                <input type="text" name="busca_chave" id="busca_chave" rel="tooltip"
                       title="Informe a palavra-chave a ser procurada" placeholder="Buscar...">
                <button type="submit"><i class="icon-search"></i></button>
            </div>
        </form>

        <div class="subnav">
            <div class="subnav-title">
                <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Atendimento</span></a>
            </div>
            <ul class="subnav-menu">
                <li>
                    <a href="lista_contato.php">Contato</a>
                </li>
                <li>
                    <a href="lista_revenda.php">Revenda</a>
                </li>
                <li>
                    <a href="lista_pedido.php">Pedidos</a>
                </li>
            </ul>
        </div>

        <div class="subnav">
            <div class="subnav-title">
                <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Loja</span></a>
            </div>
            <ul class="subnav-menu">
                <li>
                    <a href="lista_produto.php">Produtos</a>
                </li>
                <li>
                    <a href="lista_oferta.php">Ofertas</a>
                </li>
                <li>
                    <a href="lista_secoes.php">Seções</a>
                </li>
                <li>
                    <a href="lista_slider.php">Slider</a>
                </li>
            </ul>
        </div>

        <div class="subnav">
            <div class="subnav-title">
                <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Relatórios</span></a>
            </div>
            <ul class="subnav-menu">
                <li>
                    <a href="rel_log.php">Log de Acesso</a>
                </li>
            </ul>
        </div>
    </div>
