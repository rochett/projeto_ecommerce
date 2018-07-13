<?php
include("acesso.php");
include("config/base_lista.php");
include("config/functions_sys.php");
?>

<body>
<?php
$_SESSION['opcao_menu'] = 3;
include("header.php");
?>
<div id="main">
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1>Listagem de Ofertas da Loja</h1>
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
                    <a href="#">Loja</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">Listagem de Produtos da Loja</a>
                </li>
            </ul>
            <div class="close-bread">
                <a href="#"><i class="icon-remove"></i></a>
            </div>
        </div>


        <div class="row-fluid">
            <div class="span12">
                <div class="box box-color box-bordered">
                    <div class="box-title">
                        <h3>
                            <i class="icon-table"></i>
                            Produtos da Loja
                        </h3>
                        <div class="actions">
                            <a href="cad_produto.php" class="btn" rel="tooltip" title="Cadastrar Produtos da Loja"><i
                                        class="icon-save"></i></a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <table class="table table-hover table-nomargin dataTable table-bordered dataTable-scroll-x dataTable-buttonTools">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Marca</th>
                                <th>Detalhes</th>
                                <th>Peso/kg</th>
                                <th>Loja</th>
                                <th>Video</th>
                                <th>Exibir Video?</th>
                                <th>Disponibilidade</th>
                                <th>Preço Venda</th>
                                <th>Exibir P.Venda?</th>
                                <th>Preço Promocional</th>
                                <th>Exibir P.Prom.?</th>
                                <th>Dat.Inicio Prom.</th>
                                <th>Dat.Final Prom.</th>
                                <th>Categoria</th>
                                <th>Quant.Estoque</th>
                                <th>Vid.Destaque</th>
                                <th>Img.Sobre Destaque</th>
                                <th>Img.Oferta</th>
                                <th>Img.Normal</th>
                                <th>Img.Ampliar</th>
                                <th>Img.Extra</th>
                                <th>Exibir Produto?</th>
                                <th>Oferta?</th>
                                <th>Destaque?</th>
                                <th>Novidade?</th>
                                <th>Frente Loja?</th>
                                <th>Atualização</th>
                                <th>Resp.</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM produtos ORDER BY nome";
                            $res = mysqli_query($conectar, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {
                                $row_RecordsetMar = montaQuery($row['marca'], 'marcas', $conectar);
                                $row_RecordsetLoj = montaQuery($row['loja'], 'lojas', $conectar);
                                $row_RecordsetDis = montaQuery($row['disponibilidade'], 'disponibilidade', $conectar);
                                $row_RecordsetCat = montaQuery($row['categoria'], 'categoria', $conectar);
                                ?>
                                <tr>
                                    <td><?php echo utf8_encode($row['nome']); ?></td>
                                    <td><?php echo reduzTexto($row['descricao']); ?></td>
                                    <td><?php echo utf8_encode($row_RecordsetMar['nome']); ?></td>
                                    <td><?php echo reduzTexto($row['detalhes']); ?></td>
                                    <td><?php echo formataPeso($row['peso']); ?></td>
                                    <td><?php echo utf8_encode($row_RecordsetLoj['descricao']); ?></td>
                                    <td><?php echo exibeVideo(180, 120, $row['link_video']); ?></td>
                                    <td><?php echo exibeValor($row['video_produto']); ?></td>
                                    <td><?php echo utf8_encode($row_RecordsetDis['descricao']); ?></td>
                                    <td><?php echo formataMoeda($row['preco_venda']); ?></td>
                                    <td><?php echo exibeValor($row['exibir_preco_venda']); ?></td>
                                    <td><?php echo formataMoeda($row['preco_promocional']); ?></td>
                                    <td><?php echo exibeValor($row['exibir_preco_promocional']); ?></td>
                                    <td><?php echo exibeData($row['dat_comeco_promocao']); ?></td>
                                    <td><?php echo exibeData($row['dat_fim_promocao']); ?></td>
                                    <td><?php echo utf8_encode($row_RecordsetCat['descricao']); ?></td>
                                    <td><?php echo utf8_encode($row['quantidade']); ?></td>
                                    <td><?php echo exibeDestaque(180, 120, $_SESSION['pasta_videos'], $row['link_video_capa'], $row['id']); ?></td>
                                    <td><?php echo exibeImagem(180, 120, $_SESSION['pasta_imagens_produto'], $row['imagem_sobre_destaque']) ?></td>
                                    <td><?php echo exibeImagem(180, 120, $_SESSION['pasta_imagens_produto'], $row['imagem_oferta']) ?></td>
                                    <td><?php echo exibeImagem(180, 120, $_SESSION['pasta_imagens_produto'], $row['imagem_normal']) ?></td>
                                    <td><?php echo exibeImagem(180, 120, $_SESSION['pasta_imagens_produto'], $row['imagem_ampliar']) ?></td>
                                    <td><?php echo exibeImagem(180, 120, $_SESSION['pasta_imagens_produto'], $row['imagem_extra']) ?></td>
                                    <td><?php echo exibeValor($row['exibir_produto']); ?></td>
                                    <td><?php echo exibeValor($row['oferta']); ?></td>
                                    <td><?php echo exibeValor($row['destaque']); ?></td>
                                    <td><?php echo exibeValor($row['novidade']); ?></td>
                                    <td><?php echo exibeValor($row['capa_site']); ?></td>
                                    <td><?php echo exibeData($row['dat_cadastro']) . '-' . $row['hor_cadastro']; ?></td>
                                    <td><?php echo utf8_encode($row['responsavel']); ?></td>
                                    <td>
                                        <a href="alt_produto.php?var_pro=<?php echo $row['id']; ?>" class="btn"
                                           rel="tooltip" title="Editar"><i class="icon-edit"></i></a>
                                        <a href="#"
                                           onClick="confirmDelete('exclui_produto.php?var_pro=',<?php echo $row['id']; ?>)"
                                           class="btn" rel="tooltip" title="Excluir"><i class="icon-remove"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!--manter 4 </div>-->

    </div>
</div>

</div>

</div>
<?php include("footer.php"); ?>
</body>

</html>