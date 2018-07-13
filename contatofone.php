<?php 
    include('config/header.php');
    include('data/data_secoes.php');
?>
<div class="span12">
    <div id="notification"></div>
</div>
<div class="span3 forCols">
    <div id="column-right">
        <div class="box">
            <?php include('config/quick_access.php'); ?>
	  	</div>
    </div>
    <div class="span9">
    <div id="content">
        <div class="breadcrumb">
            <a href="./">Home</a>
            &raquo; <?php echo utf8_encode($row_RecordsetSecoes['titulo']);?>
        </div>
        <h1><?php echo utf8_encode($row_RecordsetSecoes['titulo']);?></h1>
        <div class="login-content">
            <div class="left">
                <h2>Caro Cliente,</h2>
                <div class="content">
                    <p><?php echo utf8_encode(nl2br($row_RecordsetSecoes['texto']));?></p>
                </div>
            </div>
            <div class="right">
                <h2>Preencha os campos para efetuar o contato</h2>
                <form action="efetua_contatofone.php" method="post" enctype="multipart/form-data">
                    <div class="content">
                        <br />
                        <p>
                            <b>Nome:</b><br />
                            <input type="tel" required="required" name="subscribe_name" pattern="[a-zçáéíóúãõA-ZÇÁÉÍÓÚÃÕ\s]+$" />
                            <br />
                            <br />
                            <b>Telefone:</b><br />
                            <input type="tel" required="required" maxlength="15" id="telefone" name="telefone" onkeypress="mascara(this)" pattern="\([0-9]{2}\)[\s][0-9]{4,5}-[0-9]{4,5}" />
                            <br />
                            <br />
                            <input type="submit" value="Enviar" class="button" />
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php include('config/footer.php'); ?>
