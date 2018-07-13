<?php require_once('Connections/conectar.php');

session_start();
	
$id_pedido=$_GET['var_ped'];
		
$sql = "DELETE FROM pedidos WHERE id=$id_pedido";
$Result = mysqli_query($conectar, $sql);
	
echo "<script>alert('Exclusão de Pedido realizada com sucesso!'); window.location=\"lista_pedido.php\"</script>";

?>