<?php require_once('Connections/conectar.php');

session_start();
	
$id_contato=$_GET['var_rev'];
		
$sql = "DELETE FROM revenda WHERE id=$id_contato";
$Result = mysqli_query($conectar, $sql);
	
echo "<script>alert('Exclusão de Contato realizada com sucesso!'); window.location=\"lista_revenda.php\"</script>";

?>