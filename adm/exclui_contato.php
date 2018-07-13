<?php require_once('Connections/conectar.php');

session_start();
	
$id_contato=$_GET['var_con'];
		
$sql = "DELETE FROM contato WHERE ID=$id_contato";
$Result = mysqli_query($conectar, $sql);
	
echo "<script>alert('Exclusão de Contato realizada com sucesso!'); window.location=\"lista_contato.php\"</script>";

?>