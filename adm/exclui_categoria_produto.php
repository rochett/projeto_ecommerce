<?php require_once('Connections/conectar.php');

session_start();
	
$id_categoria=$_GET['var_cat'];
		
$sql = "DELETE FROM categoria WHERE ID=$id_categoria";
$Result = mysqli_query($conectar, $sql);
	
echo "<script>alert('Exclusão de Categoria de Produto realizada com sucesso!'); window.location=\"lista_categoria_produto.php\"</script>";

?>