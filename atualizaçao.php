<?php

include ("conexao.php");

/*
$sql_code2 ="UPDATE usuarios set token = '{$token}' where user = '{$_POST['usuario']}'";
if ($strcon->query($sql_code2) === TRUE) {
    echo "Token registrado com sucesso";
 } else {
    echo "Error: " . $strcon->error;
 };
*/

$sql_code2 ="UPDATE usuarios set token = '{$_SESSION['auth']}' where user = '{$login['user']}'";
if ($strcon->query($sql_code2) === TRUE) {
    echo "Token registrado com sucesso";
 } else {
    echo "Error: " . $strcon->error;
 };