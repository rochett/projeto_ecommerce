<?php
include("config/functions_sys.php");

session_start();

$dados_arquivo = explode('_',$_POST['pasta_destino']);

$pasta_destino_file = $dados_arquivo[0];
$type_file = $dados_arquivo[1];

if ($pasta_destino_file=='produto'){
    $pasta_destino_final = $_SESSION['pasta_imagens_produto'];
}
if ($pasta_destino_file=='marca'){
    $pasta_destino_final = $_SESSION['pasta_telas'];
}
if ($pasta_destino_file=='secao'){
    $pasta_destino_final = $_SESSION['pasta_secoes'];
}
if ($pasta_destino_file=='oferta'){
    $pasta_destino_final = $_SESSION['pasta_ofertas'];
}
if ($pasta_destino_file=='slider'){
    $pasta_destino_final = $_SESSION['pasta_imagens_slider'];
}
if ($pasta_destino_file=='usuarios'){
    $pasta_destino_final = $_SESSION['pasta_imagens_user'];
}
if ($pasta_destino_file=='banner'){
    $pasta_destino_final = $_SESSION['pasta_banner'];
}
if ($pasta_destino_file=='destaque'){
    $pasta_destino_final = $_SESSION['pasta_videos'];
}

$arquivo = $_FILES['fileToUpload'];
$filename = removeAcentos($_FILES['fileToUpload']['name']);
$ext_filename = substr($filename,-3);

$config = array();
$config["tamanho"] = 10485760;

$mimeImg = array();
$mimeImg['jpg'] = 'image/jpeg';
$mimeImg['gif'] = 'image/gif';
$mimeImg['png'] = 'image/png';

$mimeVid = array();
$mimeVid['mp4'] = 'video/mp4';
$mimeVid['mpeg'] = 'video/mpeg';

if ($type_file == 'img') {
    foreach ($mimeImg as $tipoImg) {
        if ((mime_content_type($arquivo['tmp_name']) == $tipoImg) and ($arquivo["size"]) <= $config["tamanho"]) {
            $libera = 'true';
            $pasta_arquivo = $pasta_destino_final;
            break;
        }else{
            $libera = 'false';
        }
    }
}
if ($type_file == 'vid') {
    foreach ($mimeVid as $tipoVid) {
        if ((mime_content_type($arquivo['tmp_name']) == $tipoVid) and ($arquivo["size"]) <= $config["tamanho"]) {
            $libera = 'true';
            $pasta_arquivo = $pasta_destino_final;
            break;
        }else{
            $libera = 'false';
        }
    }
}

if($libera == 'true') {
    $location = $pasta_arquivo . $filename;
    $file_extension = pathinfo($location, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);
    $response = 0;

    if(move_uploaded_file($arquivo['tmp_name'],$location)){
        $response = "Arquivo ".$filename." enviado com sucesso!";
    }else{
        $response = "Houve um erro ao enviar seu arquivo.";
    }
}else{
    $response = "Houve um erro ao enviar seu arquivo.";
}
echo "<script>alert('".$response."'); window.location=\"upload_files.php\"</script>";
?>