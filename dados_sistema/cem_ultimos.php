<?php

include("../conexao.php");

$file = 'cem_ultimos.json';

$dado = file_get_contents($file);

$sql_code5 = "SELECT NUMERODO, RACACOR, IDADE, SEXO, PESO FROM tb_doi ORDER BY NUMERODO, RACACOR, IDADE, SEXO, PESO DESC LIMIT 100";
$result3 = mysqli_query($strcon2, $sql_code5) or die(mysqli_error($strcon));
while($row3 = mysqli_fetch_array($result3)){
    $dados[] = [
        "numerodo"  => $row3["NUMERODO"],
        "racacor"   => $row3["RACACOR"],
        "idade"     => $row3["IDADE"],
        "sexo"      => $row3["SEXO"],
        "peso"      => $row3["PESO"]
    ];
};

$json = json_encode($dados);

$dado = $json;

file_put_contents($file,$dado);
