<?php require_once('Connections/conectar.php');

session_start();
	
$id_oferta=$_GET['var_ofe'];
		
$sql = "DELETE FROM ofertas_site WHERE id=$id_oferta";
$Result = mysqli_query($conectar, $sql);
	
echo "<script>alert('Exclusão de Oferta da Loja realizada com sucesso!'); window.location=\"lista_oferta.php\"</script>";

?>