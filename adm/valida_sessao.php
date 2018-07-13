<?php

require_once('Connections/conectar.php');
include('config/functions_sys.php');

session_start();

$login=$_SESSION['usuarios'];
$senha=$_POST['password'];

$row_RecordsetConfig = montaQuery('', 'config_sistema', $conectar);
$row_RecordsetLogin = montaQueryEsp($login, 'usuarios_adm', 'login', $conectar);

If ($row_RecordsetLogin['login']==$login and $row_RecordsetLogin['senha']==$senha) {
    $_SESSION['utiliza']=$row_RecordsetLogin['usuario'];
    $_SESSION['usuarios']=$row_RecordsetLogin['login'];
    $_SESSION['acesso']="xc456";
    $_SESSION['libera']=1;
    $_SESSION['subtipo']=$row_RecordsetLogin['tipo_usuario'];
    $_SESSION['master']=$row_RecordsetLogin['login'];
    $_SESSION['avatar']=$row_RecordsetLogin['avatar'];
    $_SESSION['foto']=$row_RecordsetLogin['foto'];
    $_SESSION['nome_empresa']=$row_RecordsetConfig['nome_empresa'];
    $_SESSION['site_empresa']=$row_RecordsetConfig['site'];
    $_SESSION['define_sistema']=$row_RecordsetConfig['define_sistema'];
    $_SESSION['pasta_imagens_slider']=$row_RecordsetConfig['pasta_imagens_slider'];
    $_SESSION['pasta_fotos']=$row_RecordsetConfig['pasta_imagens_user'];
    $_SESSION['pasta_videos']=$row_RecordsetConfig['pasta_videos'];
    $_SESSION['pasta_telas']=$row_RecordsetConfig['pasta_telas'];
    $_SESSION['pasta_secoes']=$row_RecordsetConfig['pasta_secoes'];
    $_SESSION['pasta_ofertas']=$row_RecordsetConfig['pasta_ofertas'];
    $_SESSION['pasta_banner']=$row_RecordsetConfig['pasta_banner'];
    $_SESSION['pasta_imagens_produto']=$row_RecordsetConfig['pasta_imagens_produto'];
    $_SESSION['pasta_imagens_user']=$row_RecordsetConfig['pasta_imagens_user'];
    $_SESSION['pasta_backup']=$row_RecordsetConfig['pasta_backup'];
    $_SESSION['nome_sistema']='LojaTeste';
    $_SESSION['senha_acesso']=$row_RecordsetLogin['senha'];
    $_SESSION['tipo_usuario']=$row_RecordsetLogin['tipo_usuario'];
	header('Location: valida_desbloqueioacesso.php');			
}else{
	echo "<script>alert('Login e/ou Senha incorretos(s)! Tente novamente!'); window.location=\"trava_sessao.php\"</script>";
}
?>
