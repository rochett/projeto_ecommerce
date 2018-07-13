<?php
include('../Connections/conectar.php');

$sqlOfertas = "SELECT * FROM ofertas_site WHERE exibir=1 AND posicao='banner3'";
$queryOfertas = mysqli_query($conectar, $sqlOfertas);
$row_RecordsetOfertas = mysqli_fetch_assoc($queryOfertas);
$totalRows_RecordsetOfertas = mysqli_num_rows($queryOfertas);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Elastic Image Slideshow with Thumbnail Preview</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Elastic Image Slideshow with Thumbnail Preview" />
        <meta name="keywords" content="jquery, css3, responsive, image, slider, slideshow, thumbnails, preview, elastic" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
		<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	visibility:visible;
	left:0px;
	top:0px;
	width:185px;
	height:143px;
	background-color:#000000;
	layer-background-color:#000000;
	border:1px none #000000;
	z-index:9999;
}
-->
        </style>
<noscript>
			<link rel="stylesheet" type="text/css" href="css/noscript.css" />
		</noscript>
   </head>
    <body>
        <div id="apDiv1">
        	<h1><?php echo utf8_encode($row_RecordsetOfertas['titulo']);?></h1>
        	 <h2><?php echo utf8_encode($row_RecordsetOfertas['texto']);?></h2>
        
        </div>
<div class="container">
          <div class="wrapper">
                <div id="ei-slider" class="ei-slider">
                  <ul class="ei-slider-large">
                   
                    	
                    
						<li>
                            <img src="images/large/<?php echo $row_RecordsetOfertas['imagem'];?>" width="370" height="143" alt="image06"/>
                            
                        </li>
                        
                   
                        
                    </ul><!-- ei-slider-large -->
                    
                </div><!-- ei-slider -->
                
            </div><!-- wrapper -->
        </div>
        
    </body>
</html>