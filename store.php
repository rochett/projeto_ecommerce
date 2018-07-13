<?php
    include('config/header.php');
    include('data/data_secoes.php');
?>
<div class="span12">
    <div id="content">
        <div class="breadcrumb">
            <a href="./">Home</a> &raquo; <?php echo utf8_encode($row_RecordsetSecoes['titulo']);?>
        </div>
        <h1><?php echo utf8_encode($row_RecordsetSecoes['titulo']);?></h1>
        <p>
            <?php echo utf8_encode(nl2br($row_RecordsetSecoes['texto']));?>
        </p>
        <div class="buttons">
            <table width="100%" border="0">
                <tr>
                    <td width="50%" align="left">
                        <div class="addthis_toolbox addthis_default_style ">
                            <a class="addthis_button_facebook_share" fb:share:layout="button_count"></a>
                            <a class="addthis_button_tweet"></a>
                            <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                            <a class="addthis_counter addthis_pill_style"></a>
                        </div>
                        <script type="text/javascript" src="s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e7336275f7f0c5b"></script>
                    </td>
                    <td width="50%" align="right">
                        <div class="right">
                            <a href="./" class="button">Retornar</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<?php include('config/footer.php'); ?>
