<?php

$hostname = "localhost";
$bd = "cadastro";
$usuario = "root";
$senha = "";

$strcon = mysqli_connect($hostname,$usuario,$senha,$bd);
if (!$strcon) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$sql_code = "SELECT user, senha FROM usuarios";
$result = mysqli_query($strcon, $sql_code);

$row = mysqli_fetch_assoc($result);

$usuarios[] = $row["user"];
$senhas[] = $row["senha"];

