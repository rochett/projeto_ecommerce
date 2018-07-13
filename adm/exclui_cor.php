<?php require_once('Connections/conectar.php');

session_start();
	
$id_cor=$_GET['var_cor'];
		
$sql = "DELETE FROM cor WHERE ID=$id_cor";
$Result = mysqli_query($conectar, $sql);
	
echo "<script>alert('Exclusão de Cor realizada com sucesso!'); window.location=\"lista_cor.php\"</script>";

?>