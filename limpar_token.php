<?php
session_start();
include ("conexao.php");

$sql_code3 ="UPDATE usuarios set token = NULL WHERE user = '{$login['user']}'";
if ($strcon->query($sql_code3) === TRUE) {
    echo "Token invalido. Por favor realize o login novamente.";
    unset($_SESSION["{$_POST['usuario']}"]);

 } else {
    echo "Error: " . $strcon->error;
 };
