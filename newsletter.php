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
                <a href="./">Home</a> &raquo; <?php echo utf8_encode($row_RecordsetSecoes['titulo']); ?>
            </div>
            <h1><?php echo utf8_encode($row_RecordsetSecoes['titulo']); ?></h1>
            <div class="login-content">
                <div class="left">
                    <h2>Caro Cliente,</h2>
                    <div class="content">
                        <p><?php echo utf8_encode(nl2br($row_RecordsetSecoes['texto'])); ?></p>
                    </div>
                </div>
                <div class="right">
                    <h2>Preencha os campos para se cadastrar</h2>
                    <form action="efetua_newsletter.php" method="post" enctype="multipart/form-data">
                        <div class="content">
                            <br/>
                            <p><b>Nome:</b><br/>
                                <input type="text" required="required" name="subscribe_name"
                                       pattern="[a-zçáéíóúãõA-ZÇÁÉÍÓÚÃÕ\s]+$"/>
                                <br/>
                                <br/>
                                <b>E-mail:</b><br/>
                                <input type="email" required="required" class="input-text" name="subscribe_email"
                                       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
                                <br/>
                                <br/>
                                <input type="submit" value="Enviar" class="button"/>
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
