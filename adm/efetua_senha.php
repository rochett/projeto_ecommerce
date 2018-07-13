<?php
require_once('Connections/conectar.php');
include('config/base_local.php');

session_start();

$id_usuario=$_SESSION['utiliza'];
$nova_senha=$_POST['nova_senha'];

$sql_AtualizaSenha= "UPDATE usuarios_adm SET senha='$nova_senha' WHERE usuario='$id_usuario'";
$ResultAtualizaSenha = mysqli_query($conectar, $sql_AtualizaSenha);

$_SESSION['senha_acesso']=$nova_senha;
header('Location: valida_logoutacesso.php');
?>

