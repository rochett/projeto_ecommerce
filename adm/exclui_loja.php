<?php require_once('Connections/conectar.php');

session_start();
	
$id_loja=$_GET['var_loj'];
		
$sql = "DELETE FROM lojas WHERE id=$id_loja";
$Result = mysqli_query($conectar, $sql);
	
echo "<script>alert('Exclusão de Loja realizada com sucesso!'); window.location=\"lista_loja.php\"</script>";

?>