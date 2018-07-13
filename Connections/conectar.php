<?php
    $hostname_conectar = "localhost";
    $database_conectar = "data_loja";
    $username_conectar = "root";
    $password_conectar = "";
    $conectar = mysqli_connect($hostname_conectar,$username_conectar,
    $password_conectar,$database_conectar) or die(mysqli_error());
?>