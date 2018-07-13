<?php require_once('Connections/conectar.php');

session_start();
	
$id_secoes=$_GET['var_sec'];
		
$sql = "DELETE FROM secoes_site WHERE id=$id_secoes";
$Result = mysqli_query($conectar, $sql);
	
echo "<script>alert('Exclusão de Seção do Site realizada com sucesso!'); window.location=\"lista_secoes.php\"</script>";

?>