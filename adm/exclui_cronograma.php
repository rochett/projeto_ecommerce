<?php require_once('Connections/conectar.php');

session_start();
	
$id_cronograma=$_GET['var_crm'];
		
$sqlExcCrm = "DELETE FROM crono_eventos WHERE id=$id_cronograma";
$ResultExcCrm = mysqli_query($conectar, $sqlExcCrm);
	
echo "<script>alert('Exclusão de Cronograma de Eventos realizada com sucesso!'); window.location=\"lista_cronograma.php\"</script>";

?>