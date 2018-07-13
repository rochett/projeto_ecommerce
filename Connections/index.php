<?php include('header.php'); 

mysql_select_db($database_conectar, $conectar);			
$sqlProdutos = "SELECT * FROM produtos WHERE exibir_produto=1 AND destaque=1"; 
$queryProdutos = mysql_query($sqlProdutos, $conectar) or die(mysql_error());
$row_RecordsetProdutos = mysql_fetch_assoc($queryProdutos); 
$totalRows_RecordsetProdutos = mysql_num_rows($queryProdutos);

mysql_select_db($database_conectar, $conectar);			
$sqlOfertas = "SELECT * FROM produtos WHERE exibir_produto=1 AND oferta=1"; 
$queryOfertas = mysql_query($sqlOfertas, $conectar) or die(mysql_error());
$row_RecordsetOfertas = mysql_fetch_assoc($queryOfertas); 
$totalRows_RecordsetOfertas = mysql_num_rows($queryOfertas);

?>
<style type="text/css">
<!--
.style1 {font-size: 12px}
.style3 {color: #000000; font-size: 14px; font-weight:bolder;}
.style5 {color: #333333; font-size: 16px;}
-->
</style>

                
<div class="span12">                
            
	<div id="content">
		<div class="row">      
        
        <div class="span12 cols-responsive">

<iframe src="slider_site/Jssor.Slider.FullPack/demos-jquery/index.php" scrolling="no" frameborder="0" width="100%" height="475"></iframe>

</div>  
          
	        <div class="span8">
            
	<div class="slider-wrapper">
	  <div>
	    	    	    <iframe width="100%" height="510" src="https://www.youtube.com/embed/ZEJawQOlcrg" frameborder="0" scrolling="no" allowfullscreen></iframe>
   	    	  </div>
	</div>
</div>
<!--<script type="text/javascript"><!--
$(document).ready(function() {
	$('#slideshow0').nivoSlider();
});
</script>-->

<div class="span4">
	<div id="banner0" class="banner">
	  <div>
        	<div class="box pvCategory">
    			<div class="box-heading2"><span>Busca Rápida</span>
                </div>
        	<br><br>
             
           
            <form name="form1" method="GET" action="busca_produto.php">
        		<table width="100%" border="0" align="center" >                             
        			<tr>
                    	<td width="21%">&nbsp;</td>
                    
            			<td width="79%" valign="middle" align="center">    
				  <div class="newsletterWrap2">
    							<input name="pega_produto" type="text" id="pega_produto" value="" placeholder="* Digite o produto" maxlength="25" />
    							<!--<input type="image" src="image/busca_noticia.png" value="submit" width="30" height="30">-->
                   		  </div>  
                 		
            		</tr>     
    			</table>
        	</form>
           
            
            
            </div>           
             
    		
        </div>
	</div>
</div>
<script type="text/javascript"><!--
$(document).ready(function() {
	$('#banner0 div:first-child').css('display', 'block');
});

var banner = function() {
	$('#banner0').cycle({
		before: function(current, next) {
			$(next).parent().height($(next).outerHeight());
		}
	});
}

setTimeout(banner, 2000);
//--></script><div class="span4">
	<div id="banner1" class="banner">
	  	  	  <div><iframe src="banner/banner1.php" scrolling="no" frameborder="0" width="100%" height="143"></iframe></div>
	  	  	</div>
</div>
<script type="text/javascript"><!--
$(document).ready(function() {
	$('#banner1 div:first-child').css('display', 'block');
});

var banner = function() {
	$('#banner1').cycle({
		before: function(current, next) {
			$(next).parent().height($(next).outerHeight());
		}
	});
}

setTimeout(banner, 2000);
//--></script>
<div class="span4">
	<div id="banner2" class="banner">
		<div><iframe src="banner/banner2.php" scrolling="no" frameborder="0" width="100%" height="143"></iframe></div>
	</div>
</div>

<script type="text/javascript"><!--
$(document).ready(function() {
	$('#banner2 div:first-child').css('display', 'block');
});

var banner = function() {
	$('#banner2').cycle({
		before: function(current, next) {
			$(next).parent().height($(next).outerHeight());
		}
	});
}

setTimeout(banner, 2000);
//--></script>             
			<div class="clearfix"></div>
			<!-- 
				Middle Blocks
			-->
			 
			
			 
			
			 
			
			
	        <div class="clearfix"></div>
		</div>

                
                </div>
                
            
</div>

<div class="clearfix"></div>
<div class="span12 cols-responsive">
	<div class="row">
           <div class="box marLeft30">
  <div class="box-heading"><span>Destaques</span></div>
  
  <div class="box-content">
    <div class="box-product">
        
        
        	 
      	<table width="100%" border="0">
          <tr>
          	<td width="25%" align="left">
            
            <div class="singleProduct">
          
            	<video src="video_produto/vid1.mp4" autoplay loop width="100%" height="280"></video>
            
            		<ul class="btnGroup tooltip-title">
		        		<li class="cartBt"><form action="produto.php?var=<?php echo $row_RecordsetProdutos['id'];?>" method="post"><input type="submit" class="cartBtn" value="Comprar"  /></form>
                        </li>
		        		<li class="compareBt"><form method="post" action="produto.php?var=<?php echo $row_RecordsetProdutos['id'];?>"><input type="submit" class="compare" data-toggle="tooltip" title="Detalhes do Produto" /></form>
                        </li>
		        	</ul>
                
            </div>
            <div class="name">
                	<a href="produto.php?var=<?php echo $row_RecordsetProdutos['id'];?>"><?php echo utf8_encode($row_RecordsetProdutos['nome']);?></a>
            </div>
            <div class="price">
            		<?php 
						if ($row_RecordsetProdutos['exibir_preco_venda']==1 AND $row_RecordsetProdutos['exibir_preco_promocional']==1) {
            		$ver_preco="<span class='price-old'> R$".$row_RecordsetProdutos['preco_venda']."</span> - <span class='price-new'> R$".$row_RecordsetProdutos['preco_promocional']."</span>"; 
            			}else{
							if ($row_RecordsetProdutos['exibir_preco_venda']==1 AND $row_RecordsetProdutos['exibir_preco_promocional']==0) {
						$ver_preco="<span class='price-new'> R$".$row_RecordsetProdutos['preco_venda']."</span>";
							}
						}
				
						echo $ver_preco;				
					?>				
            	</div>
            </td>
            <td width="25%" align="left">
            
              <div class="singleProduct">
            	
            
            		<video src="video_produto/vid2.mp4" autoplay loop width="100%" height="280"></video>
            
            		<ul class="btnGroup tooltip-title">
		        		<li class="cartBt"><form action="produto.php?var=<?php echo $row_RecordsetProdutos['id'];?>" method="post"><input type="submit" class="cartBtn" value="Comprar"  /></form>
                        </li>
		        		<li class="compareBt"><form method="post" action="produto.php?var=<?php echo $row_RecordsetProdutos['id'];?>"><input type="submit" class="compare" data-toggle="tooltip" title="Detalhes do Produto" /></form>
                        </li>
		        	</ul>
                
            </div>
            <div class="name">
                	<a href="produto.php?var=<?php echo $row_RecordsetProdutos['id'];?>"><?php echo utf8_encode($row_RecordsetProdutos['nome']);?></a>
            </div>
            <div class="price">
            		<?php 
						if ($row_RecordsetProdutos['exibir_preco_venda']==1 AND $row_RecordsetProdutos['exibir_preco_promocional']==1) {
            		$ver_preco="<span class='price-old'> R$".$row_RecordsetProdutos['preco_venda']."</span> - <span class='price-new'> R$".$row_RecordsetProdutos['preco_promocional']."</span>"; 
            			}else{
							if ($row_RecordsetProdutos['exibir_preco_venda']==1 AND $row_RecordsetProdutos['exibir_preco_promocional']==0) {
						$ver_preco="<span class='price-new'> R$".$row_RecordsetProdutos['preco_venda']."</span>";
							}
						}
				
						echo $ver_preco;				
					?>				
            	</div>   
            
            </td>
            <td width="25%" align="left">
            
              <div class="singleProduct">
            	
            
            		<video src="video_produto/vid3.mp4" autoplay loop width="100%" height="280"></video>
            
            		<ul class="btnGroup tooltip-title">
		        		<li class="cartBt"><form action="produto.php?var=<?php echo $row_RecordsetProdutos['id'];?>" method="post"><input type="submit" class="cartBtn" value="Comprar"  /></form>
                        </li>
		        		<li class="compareBt"><form method="post" action="produto.php?var=<?php echo $row_RecordsetProdutos['id'];?>"><input type="submit" class="compare" data-toggle="tooltip" title="Detalhes do Produto" /></form>
                        </li>
		        	</ul>
                
            </div>
            <div class="name">
                	<a href="produto.php?var=<?php echo $row_RecordsetProdutos['id'];?>"><?php echo utf8_encode($row_RecordsetProdutos['nome']);?></a>
            </div>
            <div class="price">
            		<?php 
						if ($row_RecordsetProdutos['exibir_preco_venda']==1 AND $row_RecordsetProdutos['exibir_preco_promocional']==1) {
            		$ver_preco="<span class='price-old'> R$".$row_RecordsetProdutos['preco_venda']."</span> - <span class='price-new'> R$".$row_RecordsetProdutos['preco_promocional']."</span>"; 
            			}else{
							if ($row_RecordsetProdutos['exibir_preco_venda']==1 AND $row_RecordsetProdutos['exibir_preco_promocional']==0) {
						$ver_preco="<span class='price-new'> R$".$row_RecordsetProdutos['preco_venda']."</span>";
							}
						}
				
						echo $ver_preco;				
					?>				
            	</div>   
            
            </td>
            <td width="25%" align="left">
            
              <div class="singleProduct">
            	
            
            		<video src="video_produto/vid4.mp4" autoplay loop width="100%" height="280"></video>
            
            		<ul class="btnGroup tooltip-title">
		        		<li class="cartBt"><form action="produto.php?var=<?php echo $row_RecordsetProdutos['id'];?>" method="post"><input type="submit" class="cartBtn" value="Comprar"  /></form>
                        </li>
		        		<li class="compareBt"><form method="post" action="produto.php?var=<?php echo $row_RecordsetProdutos['id'];?>"><input type="submit" class="compare" data-toggle="tooltip" title="Detalhes do Produto" /></form>
                        </li>
		        	</ul>
                
            </div>
            <div class="name">
                	<a href="produto.php?var=<?php echo $row_RecordsetProdutos['id'];?>"><?php echo utf8_encode($row_RecordsetProdutos['nome']);?></a>
            </div>
            <div class="price">
            		<?php 
						if ($row_RecordsetProdutos['exibir_preco_venda']==1 AND $row_RecordsetProdutos['exibir_preco_promocional']==1) {
            		$ver_preco="<span class='price-old'> R$".$row_RecordsetProdutos['preco_venda']."</span> - <span class='price-new'> R$".$row_RecordsetProdutos['preco_promocional']."</span>"; 
            			}else{
							if ($row_RecordsetProdutos['exibir_preco_venda']==1 AND $row_RecordsetProdutos['exibir_preco_promocional']==0) {
						$ver_preco="<span class='price-new'> R$".$row_RecordsetProdutos['preco_venda']."</span>";
							}
						}
				
						echo $ver_preco;				
					?>				
            	</div>   
            
            </td>            
          </tr>
          
        </table>
</div>
  </div>

</div></div></div>  

<div class="clearfix"></div>
<div class="span12">
	<div class="row">
           <div class="box marLeft30">
  <div class="box-heading"><span>Ofertas</span></div>
  <div class="box-content">
    <div class="box-product">
    	  
    	      	  
      	  <div class="slider6">
          
	      <?php do{?>	      
                  <div class="singleProduct">
	      	
	      	<!-- Thumb -->
	      	<div class="btnImgWrap">
				  				  <div class="image">
				      <a href="produto.php?var=<?php echo $row_RecordsetProdutos['id'];?>">
                      <?php
					  
					  if ($row_RecordsetProdutos['imagem_sobre_destaque']<>''){
					  	$imagem_sobre=" oversrc='image_produto/".$row_RecordsetProdutos['imagem_sobre_destaque']."' ";
					  }else{
					  	$imagem_sobre=" ";
					  
					  }
					  
					  ?>
                      
				         <img<?php echo $imagem_sobre;?>src="image_produto/<?php echo $row_RecordsetProdutos['imagem_destaque'];?>" title="<?php echo utf8_encode($row_RecordsetProdutos['nome']);?>" style="border:none"/>
				      </a>
				  </div>
				  		        <ul class="btnGroup tooltip-title">
		        	<li class="cartBt"><form action="produto.php?var=<?php echo $row_RecordsetProdutos['id'];?>" method="post"><input type="submit" class="cartBtn" value="Comprar"  /></form></li>
		        	<li class="compareBt"><form method="post" action="produto.php?var=<?php echo $row_RecordsetProdutos['id'];?>"><input type="submit" class="compare" data-toggle="tooltip" title="Detalhes do Produto" /></form></li>
		        </ul>
	        </div>
	        
	        <!-- name -->
	        <div class="name"><a href="produto.php?var=<?php echo $row_RecordsetProdutos['id'];?>"><?php echo utf8_encode($row_RecordsetProdutos['nome']);?></a></div>
	        	                
	        <!-- Price -->
            <div class="price">
            	<?php 
				if ($row_RecordsetProdutos['exibir_preco_venda']==1 AND $row_RecordsetProdutos['exibir_preco_promocional']==1) {
            		$ver_preco="<span class='price-old'> R$".$row_RecordsetProdutos['preco_venda']."</span> - <span class='price-new'> R$".$row_RecordsetProdutos['preco_promocional']."</span>"; 
            	}else{
					if ($row_RecordsetProdutos['exibir_preco_venda']==1 AND $row_RecordsetProdutos['exibir_preco_promocional']==0) {
						$ver_preco="<span class='price-new'> R$".$row_RecordsetProdutos['preco_venda']."</span>";
					}
				}
				
				echo $ver_preco;
				
				?>	
				
            </div>
            	        
	      </div>
          <?php } while ($row_RecordsetProdutos = mysql_fetch_assoc($queryProdutos)); ?>
      	  </div>
    </div>
  </div>
</div>



           <div class="span12">
	<div id="banner3" class="banner">
	  	  	  <div><img src="image_banner/<?php echo $row_RecordsetConfig['banner'];?>" title="Promoções Lua Rara!" /></div>
	  	  	</div>
</div>
<script type="text/javascript"><!--
$(document).ready(function() {
	$('#banner3 div:first-child').css('display', 'block');
});

var banner = function() {
	$('#banner3').cycle({
		before: function(current, next) {
			$(next).parent().height($(next).outerHeight());
		}
	});
}

setTimeout(banner, 2000);
//--></script>              
	           <div id="carousel0">
  <ul class="jcarousel-skin-opencart">
  	<?php do{?>  
        <li><a href="<?php echo $row_RecordsetMarcas['link_site'];?>"><img src="image_marca/<?php echo $row_RecordsetMarcas['imagem'];?>" title="<?php echo utf8_encode($row_RecordsetMarcas['nome']);?>" /></a></li>       
    <?php } while ($row_RecordsetMarcas = mysql_fetch_assoc($queryMarcas)); ?>    
      </ul>
</div>
<script type="text/javascript"><!--
$('#carousel0 ul').jcarousel({
	vertical: false,
	visible: 5,
	scroll: 3});
//--></script>           <div class="box marLeft30" style="float: none; overflow: visible">
  <div class="newsletterWrap">
  	<img src="catalog/view/theme/magnum/image/newsletter.png" alt="" class="newsletterImg">
  <h2>Receba novidades! Assine nossa newsletter</h2>
  <div class="box-content"> 
      <div id="frm_subscribe">
	  <form name="subscribe" id="subscribe" method="post"   >	  
	    <!--inputs-->
	    <input type="text" placeholder="* Digite seu Email" name="subscribe_email" id="subscribe_email">
	   	<input type="text" placeholder="Digite seu Name" name="subscribe_name" id="subscribe_name">
	    	    <!--buttons-->
	    <a class="newsBtn" onClick="email_subscribe()">Assinar</a>
	    	    <a class="newsBtn" onClick="email_unsubscribe()">Cancelar Assinatura</a>
	        
	    <!--result-->
		<div id="subscribe_result"></div>
	  </form>
  </div>
    </div>

<script language="javascript">
		
function email_subscribe(){
	$.ajax({
			type: 'post',
			url: 'efetua_newsletter.php',
			dataType: 'html',
            data:$("#subscribe").serialize(),
			success: function (html) {
				alert("Assinatura realizada com sucesso!");
				eval(html);
			}}); 
}
function email_unsubscribe(){
	$.ajax({
			type: 'post',
			url: 'exclui_newsletter.php',
			dataType: 'html',
            data:$("#subscribe").serialize(),
			success: function (html) {
				alert("Cancelamento realizado com sucesso!");
				eval(html);
			}}); 
}
      
$('.fancybox_sub').fancybox({
	width: 180,
	height: 180,
	autoDimensions: false
});
</script>
</div><!--/newsletterWrap-->
</div>
      </div>
</div>
<div class="clearfix"></div>
</div><!--/row-->
	
</div><!--/container-->

<?php include('footer.php'); ?>