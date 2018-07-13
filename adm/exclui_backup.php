<?php require_once('Connections/conectar.php');

session_start();
	
$id_bck=$_GET['var_bck'];
$arquivo=$_GET['var_arquivo'];
	
$sqlExcBck = "DELETE FROM log_backup WHERE id=$id_bck";
$ResultExcBck = mysqli_query($conectar, $sqlExcBck);

unlink($_SESSION['pasta_backup'].$arquivo);
	
echo "<script>alert('Exclusão de Backup realizada com sucesso!'); window.location=\"log_backup.php\"</script>";		

?>