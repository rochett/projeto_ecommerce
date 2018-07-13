<?php require_once('Connections/conectar.php');

session_start();
	
$id_slider=$_GET['var_sli'];
		
$sql = "DELETE FROM slider_site WHERE id=$id_slider";
$Result = mysqli_query($conectar, $sql);
	
echo "<script>alert('Exclusão de Slider da Loja realizada com sucesso!'); window.location=\"lista_slider.php\"</script>";

?>