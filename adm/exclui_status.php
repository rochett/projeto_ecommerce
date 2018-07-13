<?php require_once('Connections/conectar.php');

session_start();
	
$id_status=$_GET['var_sta'];
		
$sql = "DELETE FROM status WHERE id=$id_status";
$Result = mysqli_query($conectar, $sql);
	
echo "<script>alert('Exclusão de Status realizada com sucesso!'); window.location=\"lista_status.php\"</script>";

?>