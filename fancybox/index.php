<?php

session_start();

if ($_SESSION["UserID"]=="") {
	header('Location: http://www.institutotab.com.br/erro.html');
}

// Quando a ação for para remover anexo
//if ($_POST['acao'] == 'removeAnexo')
//{
    // Recuperando nome do arquivo
//    $arquivo = $_POST['arquivo'];
    // Caminho dos uploads
//    $caminho = 'uploads/';
    // Verificando se o arquivo realmente existe
//    if (file_exists($caminho . $arquivo) and !empty($arquivo))
        // Removendo arquivo
 //       unlink($caminho . $arquivo);
    // Finaliza a requisição
 //   exit;
//}

// Se enviado o formulário
if (isset($_POST['enviar']))
{
    echo 'Arquivos Enviados: ';
    echo '<pre>';
		if (empty($_POST['anexos'])){
			print_r("Não foi enviado nenhum arquivo!");
		} else {
        	print_r($_POST['anexos']);
		}
    echo '</pre>';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Rodapé do Site (Imagens Full) - Uploader de Arquivos</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="ui/jquery.uniform.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="ui/css/uniform.default.css" type="text/css" media="screen">
<!--ESTILO PÁGINA-->
<link href="css/cursos.css" rel="stylesheet" type="text/css" />
<!--FIM ESTILO PÁGINA-->
<!--TRADUÇÃO-->
<script type="text/javascript" src="traducao/js/jquery-translate-1.3.9.min.js"></script>
<script type="text/javascript" src="traducao/js/functions.js"></script>
<!--FIM TRADUÇÃO-->
<!--BOTÃO-->        
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>          
<!--FIM BOTÃO-->
<!--FUNÇÃO BOTÃO-->
<script>
  $(document).ready(function() {
    $("button").button();
  });
</script>
<!--FIM FUNÇÃO BOTÃO-->
<!--<script type="text/javascript" src="js/jquery.js"></script>-->

<style type="text/css">
body {
    font-family: "Trebuchet MS";
    font-size: 14px;    
}

iframe {
    border: 0;
    overflow: hidden;
    margin: 0;
    height: 60px;
    width: 450px;
}

#anexos {
    list-style-image: url(image/file.png);
}

img.remover {
    cursor: pointer;
    vertical-align: bottom;
}
p {
	font-size: 12px;
	text-align: justify;
	margin-left: 5px;
}
</style>


<script type="text/javascript">
$(function($) {
    // Quando enviado o formulário
    $("#upload").submit(function() {
        // Passando por cada anexo
        $("#anexos").find("li").each(function() {
            // Recuperando nome do arquivo
            var arquivo = $(this).attr('lang');
            // Criando campo oculto com o nome do arquivo
            $("#upload").prepend('<input type="hidden" name="anexos[]" value="' + arquivo + '" \/>');
        }); 
    });
});
    
// Função para remover um anexo
function removeAnexo(obj)
{
    // Recuperando nome do arquivo
    var arquivo = $(obj).parent('li').attr('lang');
    // Removendo arquivo do servidor
    $.post("index.php", {acao: 'removeAnexo', arquivo: arquivo}, function() {
        // Removendo elemento da página
        $(obj).parent('li').remove();
    });
}
    </script>
    
</head>

<body>

<h1>Rodapé do Site  - Uploader de Arquivos</h1>

<ul id="anexos"></ul>
<iframe src="upload.php" frameborder="0" scrolling="no"></iframe>

<form id="upload" action="index.php" method="post">
    <p><button name="enviar" type="submit">Enviar</button></p>
</form>

</body>
</html>