<?php
require_once('Connections/conectar.php');
include('config/base_local.php');
set_time_limit(120);

session_start();

$pasta_backup = $_SESSION['pasta_backup'];

$data_criacao = date("d-m-Y");
$timestamp = mktime(date("H") - 2, date("i"), date("s"), 0);
$hora_criacao = gmdate("H:i:s", $timestamp);

$data_arquivo = str_replace('-', '', $data_criacao);
$hora_arquivo = str_replace(':', '', $hora_criacao);

$back = fopen($pasta_backup . $database_conectar . '_' . $data_arquivo . '_' . $hora_arquivo . ".sql", "w");
$arquivo = $database_conectar . '_' . $data_arquivo . '_' . $hora_arquivo . ".sql";

$sql = "SHOW TABLES from `$database_conectar`";
$res = mysqli_query($conectar, $sql);

if (!$res) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysqli_error();
    exit;
}

while ($row = mysqli_fetch_row($res)) {
    $table = $row[0];
    $res2 = mysqli_query($conectar, "SHOW CREATE TABLE $table");
    while ($lin = mysqli_fetch_row($res2)) {
        fwrite($back, "\n--\n-- Criacao da Tabela : $table\n--\n\n");
        fwrite($back, "$lin[1] ;\n\n--\n-- Dados a serem incluidos na tabela\n--\n\n");

        $fields = `ID`;
        $teste = mysqli_query($conectar, "SHOW COLUMNS FROM $table");
        while ($row_campo = mysqli_fetch_row($teste)) {
            $fields .= '`' . $row_campo[0] . '`, ';
        }
        $fields = substr($fields, 0, -2);

        $res3 = mysqli_query($conectar, "SELECT * FROM $table");
        while ($r = mysqli_fetch_row($res3)) {
            $sql = "INSERT INTO `" . $table . "` (" . $fields . ") VALUES (";

            for ($j = 0; $j < mysqli_num_fields($res3); $j++) {
                if (!isset($r[$j]))
                    $sql .= " '',";
                elseif ($r[$j] != "")
                    $sql .= " '" . addslashes($r[$j]) . "',";
                else
                    $sql .= " '',";
            }
            $sql = substr($sql, 0, -1);
            $sql .= ");\n";

            fwrite($back, $sql);
        }
    }
}

fclose($back);

ob_start();

$status_backup = 'REALIZADO COM SUCESSO';
$nome = $responsavel = utf8_encode($_SESSION['utiliza']);

$mensagem = "";
$mensagem .= "<b>Detalhes do Backup - LojaTeste</b><br />";
$mensagem .= "==========================<br /><br />";
$mensagem .= "<b>Arquivo:</b> \t$arquivo<br /><br />";
$mensagem .= "<b>Usuário:</b> \t" . utf8_encode($responsavel) . "<br /><br />";
$mensagem .= "<b>Status do Backup:</b> \t$status_backup<br /><br />";
$mensagem .= "<b>Horário:</b> \t" . date("d/m/Y", strtotime($data_criacao)) . "\t$hora_criacao<br /><br />";

$emailto = "rochett.tavares@gmail.com";
$nameto = "Rochett";
$attach_mail = 's';
include('../config/header_mail.php');

$data_cadastro = date("Y-m-d");
$timestamp = mktime(date("H") - 2, date("i"), date("s"), 0);
$hora_cadastro = gmdate("H:i:s", $timestamp);
$responsavel_cadastro = utf8_decode($_SESSION['utiliza']);

$sql_lbc = "INSERT INTO log_backup (arquivo, dat_cadastro, hor_cadastro, responsavel)
VALUES ('$arquivo', '$data_cadastro', '$hora_cadastro', '$responsavel_cadastro')";

$ResultLogLbc = mysqli_query($conectar, $sql_lbc);

echo "<script>alert('Backup realizado com sucesso!'); window.location=\"log_backup.php\"</script>";
?>