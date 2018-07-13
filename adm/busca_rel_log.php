<?php
require_once('Connections/conectar.php');
include("config/functions_sys.php");

session_start();

$usuario_filtro = $_POST['usuario_filtro'];
$data_inicio_filtro = date("Y-m-d", strtotime($_POST['data_inicio_filtro']));
$data_termino_filtro = date("Y-m-d", strtotime($_POST['data_termino_filtro']));

$filtro = '';

if ($usuario_filtro!='') {
	$row_RecordsetRelUsu = montaQuery($usuario_filtro, 'usuarios_adm', $conectar);
	$usuario_filtro = $row_RecordsetRelUsu['usuario'];
	$filtro.=" AND usuario='".$usuario_filtro."'";
}

if ($data_inicio_filtro!='1970-01-01' and $data_termino_filtro!='1970-01-01') {
   $filtro.=" AND dat_log BETWEEN '".$data_inicio_filtro."' AND '".$data_termino_filtro."'";
} elseif ($data_inicio_filtro!='1970-01-01' and $data_termino_filtro=='1970-01-01') {
    $filtro.=" AND dat_log >= '".$data_inicio_filtro."'";
} elseif ($data_inicio_filtro=='1970-01-01' and $data_termino_filtro!='1970-01-01') {
    $filtro.=" AND dat_log <= '".$data_termino_filtro."'";
}

$ordem_lista = " ORDER BY id DESC";

$sqlRelLog = "SELECT * from log_usuarios_adm WHERE TRUE".$filtro.$ordem_lista;
$queryRelLog = mysqli_query($conectar, $sqlRelLog);
$row_RecordsetRelLog = mysqli_fetch_assoc($queryRelLog);

$_SESSION['result_rel_log']=$sqlRelLog;
$_SESSION['usu_rel_log']=$usuario_filtro;

if ($data_inicio_filtro == '1970-01-01') {
	$_SESSION['data_inicio_rel_log'] = NULL;	
}else{
	$_SESSION['data_inicio_rel_log']=$data_inicio_filtro;	
}
if ($data_termino_filtro == '1970-01-01') {
	$_SESSION['data_termino_rel_log'] = NULL;	
}else{
	$_SESSION['data_termino_rel_log']=$data_termino_filtro;	
}

header('Location: rel_log.php');

?>