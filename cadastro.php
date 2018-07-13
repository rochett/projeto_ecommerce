<?php 
include('config/header.php'); 
include('data/data_secoes.php');
?>			

<div class="span12">
				<div id="notification"></div>
			</div><div class="span3 forCols">
	<div id="column-right">
	  	  <div class="box">
  <div class="box-heading"><span>Acesso R&aacute;pido</span></div>
  <div class="box-content">
    <ul>
            <li><a href="indexe223.html?route=account/login">Produtos</a></li>
      		<li><a href="indexacda.html?route=account/forgotten">Perguntas Frequentes</a></li>
            <li><a href="indexe223.html?route=account/account">Como Comprar</a></li>
            <li><a href="indexe223.html?route=account/address">Termos de Uso</a></li>
            <li><a href="indexe223.html?route=account/address"><?php echo utf8_encode("Informações Especiais");?></a></li>      
    </ul>
  </div>
</div>
	  	</div>
</div>

                
               				<div class="span9">
                
            
<div id="content">  <div class="breadcrumb">
        <a href="./">Home</a>
         &raquo; <?php echo utf8_encode($row_RecordsetSecoes['titulo']);?>
      </div>
  <h1><?php echo utf8_encode($row_RecordsetSecoes['titulo']);?></h1>
  <div class="login-content">
    <div class="left">
      <h2>Caro Cliente,</h2>
      <div class="content">        
        <p><?php echo nl2br(utf8_encode($row_RecordsetSecoes['texto']));?></p>
      </div>
    </div>
    <div class="right">
      <h2>Preencha os campos para se cadastrar</h2>
      <form action="cadastra_cliente.php" method="post" enctype="multipart/form-data">
        <div class="content">
        <br />
          <p><b>Nome:</b><br />
            <input type="text" name="nome" value="" />
            <br />
            <br />
            <b>E-mail:</b><br />
            <input type="text" name="email" value="" />
            <br />
            <br />
            <b>Telefone:</b><br />
            <input type="text" name="telefone" value="" />
            <br />
            <br />
            <b>Senha:</b><br />
            <input type="text" name="password" value="" />
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
                
            

</div><!--/row-->
	
</div><!--/container-->

<?php include('config/footer.php'); ?>