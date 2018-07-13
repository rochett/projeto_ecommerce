<?php require_once('Connections/conectar.php');

session_start();
	
$id_tamanho=$_GET['var_tam'];
		
$sql = "DELETE FROM tamanho WHERE id=$id_tamanho";
$Result = mysqli_query($conectar, $sql);
	
echo "<script>alert('Exclusão de Tamanho realizada com sucesso!'); window.location=\"lista_tamanho.php\"</script>";

?>