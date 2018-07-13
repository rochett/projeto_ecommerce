<?php

require_once('Connections/conectar.php');

session_start();

$nome_usuario_usu = utf8_decode($_POST['nome_usuario_usu']);
$login_usuario_usu = utf8_decode($_POST['login_usuario_usu']);
$senha_usuario_usu = utf8_decode($_POST['senha_usuario_usu']);
$img_avatar_usuario_usu = utf8_decode($_POST['img_avatar_usuario_usu']);
$img_foto_usuario_usu = utf8_decode($_POST['img_foto_usuario_usu']);
$loja_usuario_usu = $_POST['loja_usu'];
$tipo_usuario_usu = $_POST['tipo_usuario_usu'];
$responsavel = utf8_decode($_SESSION['utiliza']);

$id_usuario = $_GET['var_usu'];

$sql = "UPDATE usuarios_adm SET usuario='$nome_usuario_usu', login='$login_usuario_usu', senha='$senha_usuario_usu', avatar='$img_avatar_usuario_usu', foto='$img_foto_usuario_usu', loja='$loja_usuario_usu', tipo_usuario='$tipo_usuario_usu', responsavel='$responsavel' WHERE id=$id_usuario";
$Result = mysqli_query($conectar, $sql);

echo "<script>alert('Edição de Usuário realizada com sucesso!'); window.location=\"lista_usuarios.php\"</script>";

?>