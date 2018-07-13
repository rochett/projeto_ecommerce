<?php include('config/header.php'); ?>
<div class="span12">
    <div id="content">
        <div class="breadcrumb">
            <a href="./">Home</a>
            &raquo; Mapa do Site
        </div>
        <h1>Mapa do Site</h1>
        <div class="sitemap-info">
            <div class="left">
                <ul>
                    <li><a href="loja.php?var=<?php echo $row_RecordsetLoja['id'];?>">Loja</a></li>
                    <li>Moda
                        <ul>
                            <li><a href="moda.php?var=<?php echo $dicas;?>">Dicas</a></li>
                            <li><a href="moda.php?var=<?php echo $tendencias;?>">Tendências</a></li>
                        </ul>
                    </li>
                    <li><a href="loja.php?var=<?php echo $row_RecordsetLoja['id'];?>">Informações Especiais</a></li>
                    <li><a href="moda.php?var=<?php echo $dicas;?>">Ligamos pra Você!</a></li>
                    <li><a href="contatorevenda.php?var=<?php echo $revenda; ?>">Revenda</a></li>
                    <li><a href="store.php?var=<?php echo $parceiros; ?>">Parceiros</a></li>
                    <li><a href="store.php?var=<?php echo $quem_somos;?>">Quem Somos</a></li>
                </ul>
            </div>
            <div class="right">
                <ul>
                    <li>FAQ
                        <ul>
                            <li><a href="store.php?var=<?php echo $perguntas_frequentes;?>">Perguntas Frequentes</a></li>
                            <li><a href="store.php?var=<?php echo $como_comprar;?>">Como Comprar</a></li>
                            <li><a href="store.php?var=<?php echo $termos_uso;?>">Termos de Uso</a></li>
                            <li><a href="store.php?var=<?php echo $entrega_retirada;?>">Entrega e Retirada</a></li>
                        </ul>
                    </li>
                    <li><a href="store.php?var=<?php echo $marcas;?>">Marcas</a></li>
                    <li>Novidades
                        <ul>
                            <li><a href="newsletter.php?var=<?php echo $newsletter;?>">Newsletter</a></li>
                            <li><a href="contato.php">Contato</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php include('config/footer.php'); ?>
