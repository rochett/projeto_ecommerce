<?php require_once('Connections/conectar.php');

session_start();
	
$id_usuario=$_GET['var_usu'];
		
$sql = "DELETE FROM usuarios_adm WHERE id=$id_usuario";
$Result = mysqli_query($conectar, $sql);
	
echo "<script>alert('Exclusão de Usuário realizada com sucesso!'); window.location=\"lista_usuarios.php\"</script>";	

?>