<?php
include('config/header.php');
include('data/data_shop_index.php');
?>
<div class="span12">
	<div id="content">
	    <div class="row">
	        <div class="span12 cols-responsive">
	            <iframe src="slider_site/Jssor.Slider.FullPack/jquery-slider/index.php" scrolling="no"
                            frameborder="0" width="100%" height="475"></iframe>
                </div>
                <div class="span8">
                    <div class="slider-wrapper">
                        <div>
                            <iframe width="100%" height="510" src="<?php echo $row_RecordsetConfig['video_entrada']; ?>"
                                    frameborder="0" scrolling="no" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div id="banner0" class="banner">
                        <div>
                            <div class="box pvCategory">
                                <?php include('config/index_modules/index_filter.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('config/index_modules/top_offers.php'); ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="span12 cols-responsive">
        <div class="row">
            <div class="box marLeft30">
                <?php include('config/index_modules/index_featured.php'); ?>
        	</div>
    	</div>
     </div>    
    <div class="clearfix"></div>
    <div class="span12">
        <div class="row">
            <div class="box marLeft30">
                 <?php include('config/index_modules/index_offers.php'); ?>
            </div>
        </div>
    </div>
    <div class="span12">
    	<div id="banner3" class="banner">
        	<div>
            	<img src="image_banner/<?php echo $row_RecordsetConfig['banner']; ?>" title="Promoções!"/>
            </div>
        </div>
    </div>
    <script src='js/banner_carousel.js'></script>
    <div id="carousel0">
	    <ul class="jcarousel-skin-opencart">
    	    <?php do { ?>
        	    <li><a href="<?php echo $row_RecordsetMarcas['link_site']; ?>" target="_blank"><img
                                        src="image_marca/<?php echo $row_RecordsetMarcas['imagem']; ?>"
                                        title="<?php utf8_encode($row_RecordsetMarcas['nome']); ?>"/></a>
                </li>
            <?php } while ($row_RecordsetMarcas = mysqli_fetch_assoc($queryMarcas)); ?>
         </ul>
    </div>
    <script src='js/brand_carousel.js'></script>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
<?php include('config/footer.php'); ?>
