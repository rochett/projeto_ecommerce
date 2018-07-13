<footer>
    <div class="topFooter">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="span2">
                        <div class="column">
                            <h3><?php echo $row_RecordsetConfig['nome_empresa']; ?></h3>
                            <ul>
                                <li><a href="store.php?var=<?php echo $quem_somos; ?>">A Marca</a></li>
                                <li><a href="store.php?var=<?php echo $entrega_retirada; ?>">Entrega e Retirada</a></li>
                                <li><a href="store.php?var=<?php echo $como_comprar; ?>">Como Comprar</a></li>
                                <li><a href="store.php?var=<?php echo $termos_uso; ?>">Termos &amp; Condições</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="spansepara">
                        <div class="column"></div>
                    </div>
                    <div class="span2">
                        <div class="column">
                            <h3>Informações</h3>
                            <ul>
                                <li><a href="contato.php">Contato</a></li>
                                <li><a href="store.php?var=<?php echo $perguntas_frequentes; ?>">Perguntas
                                        Frequentes</a></li>
                                <li><a href="mapa_site.php">Mapa do Site</a></li>
                                <li><a href="contatofone.php?var=<?php echo $contato_fone; ?>">Ligamos para você!</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="spansepara">
                        <div class="column"></div>
                    </div>
                    <div class="span2">
                        <div class="column">
                            <h3>Nossa Loja</h3>
                            <ul>
                                <li><a href="loja.php?var=<?php echo $row_RecordsetLoja['id']; ?>">Produtos</a></li>
                                <li><a href="store.php?var=<?php echo $marcas; ?>">Marcas</a></li>
                                <li><a href="store.php?var=<?php echo $parceiros; ?>">Parceiros</a></li>
                                <li><a href="store.php?var=<?php echo utf8_decode($info_espec); ?>">Informações
                                        Especiais</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="spansepara">
                        <div class="column"></div>
                    </div>
                    <div class="span2">
                        <div class="column">
                            <h3>Novidades</h3>
                            <ul>
                                <li><a href="moda.php?var=<?php echo $dicas; ?>">Dicas</a></li>
                                <li><a href="moda.php?var=<?php echo utf8_decode($tendencias); ?>">Tendências</a></li>
                                <li><a href="newsletter.php?var=<?php echo $newsletter; ?>">Newsletter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottomFooter">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="column">
                        <h2>Social</h2>
                        <ul>
                            <li><a href="<?php echo $row_RecordsetConfig['link_googleplus']; ?>" target="_blank"><img
                                            src="image/google-plus-icon.png" width="24" height="24" border="0"/></a>&nbsp;&nbsp;<a
                                        href="<?php echo $row_RecordsetConfig['link_googleplus']; ?>" target="_blank">Google
                                    Plus </a></li>
                            <li><a href="<?php echo $row_RecordsetConfig['link_facebook']; ?>" target="_blank"><img
                                            src="image/facebook-icon.png" width="24" height="24" border="0"/></a>&nbsp;&nbsp;<a
                                        href="<?php echo $row_RecordsetConfig['link_facebook']; ?>" target="_blank">Facebook</a>
                            </li>
                            <li><a href="<?php echo $row_RecordsetConfig['link_twitter']; ?>" target="_blank"><img
                                            src="image/twitter-icon.png" width="24" height="24" border="0"/></a>&nbsp;&nbsp;<a
                                        href="<?php echo $row_RecordsetConfig['link_twitter']; ?>" target="_blank">Twitter </a>
                            </li>
                            <li><a href="<?php echo $row_RecordsetConfig['link_pinterest']; ?>" target="_blank"><img
                                            src="image/path-icon.png" width="24" height="24" border="0"/></a>&nbsp;&nbsp;<a
                                        href="<?php echo $row_RecordsetConfig['link_pinterest']; ?>" target="_blank">Pinterest </a>
                            </li>
                            <li><a href="<?php echo $row_RecordsetConfig['link_youtube']; ?>" target="_blank"><img
                                            src="image/youtube-icon.png" width="24" height="24" border="0"/></a>&nbsp;&nbsp;<a
                                        href="<?php echo $row_RecordsetConfig['link_youtube']; ?>" target="_blank">YouTube </a>
                            </li>
                            <li><a href="<?php echo $row_RecordsetConfig['link_instagram']; ?>" target="_blank"><img
                                            src="image/instagram-icon.png" width="24" height="24" border="0"/></a>&nbsp;&nbsp;<a
                                        href="<?php echo $row_RecordsetConfig['link_instagram']; ?>" target="_blank">Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="span5">
                    <div class="blockWrap">
                        <h2>Informação da Empresa</h2>
                        <ul class="companyInfo">
                            <li>
                                <img src="image/data/icons/address.png" alt="">
                                <?php echo $row_RecordsetConfig['endereco']; ?>
                                -<?php echo $row_RecordsetConfig['cidade']; ?>
                                /<?php echo $row_RecordsetConfig['estado']; ?>
                            </li>
                            <li>
                                <img src="image/data/icons/phone.png" alt="">

                                <?php echo $row_RecordsetConfig['telefone']; ?>
                            </li>
                            <li>
                                <img src="image/data/icons/FROM-TO.png" alt="">
                                <?php echo utf8_encode($row_RecordsetConfig['atendimento']); ?>
                            </li>
                            <li>
                                <a href="store.php?var=<?php echo $como_comprar; ?>" target="_top"><img
                                            src="image/data/icons/AIR.png" alt="" border="0"></a>
                                Consulte a seção Como Comprar
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="span4">
                    <div class="blockImgF">
                        <img src="image/data/logo-magnum.png" alt="">
                    </div>
                    <div id="powered">Desenvolvido por <a href="https://www.linkedin.com/in/rochett-tavares-bb600811a/"
                                                          target="_blank">Rochett Tavares</a> <br/>
                        <?php echo $row_RecordsetConfig['nome_empresa']; ?> &copy; <?php echo date("Y") ?> - Todos os
                        Direitos Reservados
                    </div>
                    <div class="blockWrap">
                        <ul class="socials tooltip-title">
                            <li>
                                <a data-toggle="tooltip" title="Master card" href="http://mastercard.com/"
                                   target="_blank">
                                    <img src="image/data/payment-icons/1402769052_payment_method_master_card.png"
                                         alt="">
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tooltip" title="American express" href="http://americanexpress.com/"
                                   target="_blank">
                                    <img src="image/data/payment-icons/1402769054_payment_method_american_express_card.png"
                                         alt="">
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tooltip" title="Visa" href="http://visa.com/" target="_blank">
                                    <img src="image/data/payment-icons/1402769049_payment_method_card_visa.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tooltip" title="Paypal" href="http://paypal.com/" target="_blank">
                                    <img src="image/data/payment-icons/1402769044_payment_method_paypal.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tooltip" title="bitcoin" href="http://bitcoin.com/" target="_blank">
                                    <img src="image/data/payment-icons/1402769057_payment_method_bitcoin.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tooltip" title="skrill" href="http://skrill.com/" target="_blank">
                                    <img src="image/data/payment-icons/1402769060_payment_method_skrill.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tooltip" title="Discover" href="#" target="_blank">
                                    <img src="image/data/payment-icons/1402769067_payment_method_discover_network_card.png"
                                         alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a id="scroll-top" href="#page-top"><img src="catalog/view/theme/magnum/image/totop.png" alt=""></a>
</footer>
<script src="catalog/view/javascript/jquery/totop.js"></script>
<script src="catalog/view/javascript/jquery/custom.js"></script>
<script type="text/javascript"
        src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4ff10b13374421a5">
</script>

</body>
