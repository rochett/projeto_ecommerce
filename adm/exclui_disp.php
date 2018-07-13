<?php require_once('Connections/conectar.php');

session_start();
	
$id_disponibilidade=$_GET['var_disp'];
		
$sql = "DELETE FROM disponibilidade WHERE ID=$id_disponibilidade";
$Result = mysqli_query($conectar, $sql);
	
echo "<script>alert('Exclusão de Disponibilidade realizada com sucesso!'); window.location=\"lista_disp.php\"</script>";

?>