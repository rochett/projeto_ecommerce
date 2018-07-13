<?php require_once('Connections/conectar.php');

session_start();
	
$id_marca=$_GET['var_mar'];
		
$sql = "DELETE FROM marcas WHERE id=$id_marca";
$Result = mysqli_query($conectar, $sql);
	
echo "<script>alert('Exclusão de Marca realizada com sucesso!'); window.location=\"lista_marca.php\"</script>";

?>