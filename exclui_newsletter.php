<?php
	require_once('Connections/conectar.php');
	session_start();
	$conta_remover=$_POST['subscribe_email'];
	mysql_select_db($database_conectar, $conectar);
	$query_Recordset1 = "DELETE FROM contato WHERE email='$conta_remover'";
	$Recordset1 = mysql_query($query_Recordset1, $conectar) or die(mysql_error());
	echo "<script>alert('Exclusãoo realizada com sucesso!'); window.location=\"index.php\"</script>";
?>
