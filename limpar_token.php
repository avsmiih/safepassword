<?php

include ("conexao.php");

$sql_code3 ="UPDATE usuarios set token = NULL WHERE user = '{$_POST['usuario']}'";
if ($strcon->query($sql_code3) === TRUE) {
    echo "Token invalido. Por favor realize o login novamente.";
 } else {
    echo "Error: " . $strcon->error;
 };
