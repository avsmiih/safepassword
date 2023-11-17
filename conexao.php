<?php

$hostname = "localhost";
$bd = "cadastro";
$usuario = "root";
$senha = "Sucodelim@ao832";

$strcon = mysqli_connect($hostname,$usuario,$senha,$bd);
if (!$strcon) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$login = [
    "user"=> $_POST["usuario"],
    "password"=> $_POST["senha"],
];
$pass = hash("sha256",$login["password"]);

$sql_code = "SELECT user, senha FROM usuarios WHERE user='{$login["user"]}' AND senha='{$pass}'";
$result = mysqli_query($strcon, $sql_code) or die(mysqli_error($strcon));

$row = mysqli_fetch_assoc($result);

if (isset($row["user"]) && isset($row["senha"])) {
    $teste = true;
 }