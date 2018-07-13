<?php include('config/header.php'); ?>

<div class="span12">           
            
<div id="content">  <div class="breadcrumb">
        <a href="./">Home</a>
         &raquo; Contato
      </div>
  <h1>Fale Conosco</h1>
  
    	<!-- Responsive iFrame -->
    <div class="Flexible-container">
    	<?php echo $row_RecordsetConfig['mapa'];?>
    </div>
        
  <form action="envia_contato.php" method="post" enctype="multipart/form-data">
    <h2>Onde Estamos</h2>
    <div class="contact-info">
      <div class="content">
      <div class="left"><b>Endereço:</b><br />
        <?php echo $row_RecordsetConfig['endereco'];?><br />
        <?php echo $row_RecordsetConfig['cidade'];?>/<?php echo $row_RecordsetConfig['estado'];?></div>
      <div class="right">
                <b>Telefone:</b><br />
        <?php echo $row_RecordsetConfig['telefone'];?><br />
        <?php echo $row_RecordsetConfig['cep'];?>
        
        <br />
                      </div>                      
    </div>
    </div>
    <h2>Formulário de Contato</h2>
    <div class="content">
    <b>Nome:</b><br />
    <input type="text" required name="name" pattern="[a-zçáéíóúãõA-ZÇÁÉÍÓÚÃÕ\s]+$" />
    <br />
        <br />
    <b>E-Mail:</b><br />
    <input type="email" required class="input-text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
    <br />
        <br />
    <b>Assunto:</b><br />
    <label>
    <select name="assunto" id="assunto">
      <option value="Sugestões">Sugestões</option>
      <option value="Dúvidas">Dúvidas</option>
      <option value="Atendimento">Atendimento</option>
      <option value="Outros">Outros</option>
        </select>
    </label>
    <br />
        <br />
    <b>Mensagem:</b><br />
    <textarea name="enquiry" cols="40" rows="10" style="width: 99%;" required pattern="[a-zçáéíóúãõA-ZÇÁÉÍÓÚÃÕ\s]+$" /></textarea>
    <br />
        </div>
    <div class="buttons">
      <div class="right"><input type="submit" value="Enviar" class="button" />&nbsp;&nbsp;<input type="reset" value="Limpar" class="button" /></div>
    </div>
  </form>
  </div>

                
                </div>
                
            
</div><!--/row-->
	
</div><!--/container-->

<?php include('config/footer.php'); ?>