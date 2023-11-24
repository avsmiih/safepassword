<?php

$hostname = "localhost";
$bd = "cadastro";
$usuario = "root";
$senha = "Sucodelim@ao832";

$strcon = mysqli_connect($hostname,$usuario,$senha,$bd);
if (!$strcon) {
    die("Falha na conexão: " . mysqli_connect_error());
}