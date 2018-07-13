<?php
    include('../../../Connections/conectar.php');
    include('../../../data/data_slider.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Slider</title>
    </head>
    <body style="padding:0px; margin:0px; font-family:Arial, Verdana;background-color:#fff;">
        <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="../js/jssor.js"></script>
        <script type="text/javascript" src="../js/jssor.slider.js"></script>
        <script type="text/javascript" src="../js/shop_slider.js"></script>
        <div id="slider1_container" style="position: relative; margin: 0 auto;
                top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
                <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
            </div>
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
                    height: 500px; overflow: hidden;">
                <?php do { ?>
                    <div>
                        <img u="image" src="../img/1920/<?php echo $row_RecordsetSlider['imagem']; ?>"/>
                        <div u="caption" t="NO" t3="RTT|2" r3="137.5%" du3="3000" d3="500"
                             style="position: absolute; width: 445px; height: 300px; top: 100px; left: 600px;"></div>
                        <div u="caption" t="RTT|2" r="-75%" du="1600" d="2500" t2="NO"
                             style="position: absolute; width: 470px; height: 220px; top: 120px; left: 650px;"></div>
                        <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                            text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                                color: #FFFFFF;"><?php echo $row_RecordsetSlider['titulo']; ?>
                        </div>
                        <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                            text-align: left; line-height: 36px; font-size: 30px;
                                color: #FFFFFF;">
                            <?php echo utf8_encode($row_RecordsetSlider['texto']); ?>
                        </div>
                    </div>
                <?php } while ($row_RecordsetSlider = mysqli_fetch_assoc($querySlider)); ?>
            </div>
            <link rel="stylesheet" href="../css/style_navigator.css">
            <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
                <div u="prototype"></div>
            </div>
            <link rel="stylesheet" href="../css/style_arrow.css">
            <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;"></span>
            <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;"></span>
            <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
        </div>
    </body>
</html>
