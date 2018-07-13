<?php
require_once('Connections/conectar.php');

session_start();
	
$id_produto=$_GET['var_pro'];
		
$sql = "DELETE FROM produtos WHERE id=$id_produto";
$Result = mysqli_query($conectar, $sql);
	
echo "<script>alert('Exclusão de Produto realizada com sucesso!'); window.location=\"lista_produto.php\"</script>";

?>

