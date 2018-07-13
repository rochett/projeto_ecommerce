<?php
    require_once('Connections/conectar.php');
    include('data/data_zoom_image.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Imagem Ampliada</title>
        <link rel="stylesheet" href="css/style_zoom_image.css">
    </head>
    <body>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
            <tr>
                <td valign="middle" align="center"><img src="image_produto/<?php echo $imagem;?>" /></td>
            </tr>
        </table>
    </body>
</html>

