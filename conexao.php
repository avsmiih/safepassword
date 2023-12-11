<?php

$hostname = "localhost";
$bd = "cadastro";
$bd2 = "ses_indicadores";
$usuario = "root";
$senha = "Sucodelim@ao832";

$strcon = mysqli_connect($hostname,$usuario,$senha,$bd);
if (!$strcon) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$strcon2 = mysqli_connect($hostname,$usuario,$senha,$bd2);
if (!$strcon) {
    die("Falha na conexão: " . mysqli_connect_error());
}