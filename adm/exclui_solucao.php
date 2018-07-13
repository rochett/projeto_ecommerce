<?php require_once('Connections/conectar.php');

session_start();
	
$id_solucao=$_GET['var_sol'];
		
$sqlExcSol = "DELETE FROM solucoes WHERE id=$id_solucao";
$ResultExcSol = mysqli_query($conectar, $sqlExcSol);
	
echo "<script>alert('Exclusão de Banco de Solução realizada com sucesso!'); window.location=\"lista_solucao.php\"</script>";	

?>