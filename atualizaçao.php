<?php

include ("conexao.php");
include ("token.php");

$sql_code2 ="UPDATE usuarios set token = '{$token}' where user = '{$_POST['usuario']}'";
if ($strcon->query($sql_code2) === TRUE) {
    echo "Token registrado com sucesso";
 } else {
    echo "Error: " . $strcon->error;
 };
