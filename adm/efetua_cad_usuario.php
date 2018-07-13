<?php
require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$nome_usuario_usu = utf8_decode($_POST['nome_usuario_usu']);
$login_usuario_usu = utf8_decode($_POST['login_usuario_usu']);
$senha_usuario_usu = utf8_decode($_POST['senha_usuario_usu']);
$img_avatar_usuario_usu = utf8_decode($_POST['img_avatar_usuario_usu']);
$img_foto_usuario_usu = utf8_decode($_POST['img_foto_usuario_usu']);
$loja_usuario_usu = $_POST['loja_usu'];
$tipo_usuario_usu = $_POST['tipo_usuario_usu'];
$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H")-2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel = utf8_decode($_SESSION['utiliza']);

$sql = "INSERT INTO usuarios_adm (usuario, login, senha, avatar, foto, loja, tipo_usuario, dat_cadastro, hor_cadastro, responsavel)
VALUES ('$nome_usuario_usu', '$login_usuario_usu', '$senha_usuario_usu', '$img_avatar_usuario_usu', '$img_foto_usuario_usu', '$loja_usuario_usu', '$tipo_usuario_usu', '$data_cadastro', '$hora_cadastro', '$responsavel')";

$ResultLog = mysqli_query($conectar, $sql);

echo "<script>alert('Cadastro de Usuário realizado com sucesso!'); window.location=\"cad_usuario.php\"</script>";

?>