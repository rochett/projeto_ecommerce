<?php require_once('Connections/conectar.php');

session_start();
	
$id_tipo_usuario=$_GET['var_tus'];
		
$sqlExcTipUsu = "DELETE FROM tipo_usuario WHERE id=$id_tipo_usuario";
$ResultExcTipUsu = mysqli_query($conectar, $sqlExcTipUsu);
	
echo "<script>alert('Exclusão de Tipo de Usuário realizada com sucesso!'); window.location=\"lista_tipo_usuario.php\"</script>";		

?>