<?php

include("../conexao.php");

$file = 'cem_primeiros.json';

$dado = file_get_contents($file);

$sql_code4 = "SELECT NUMERODO, RACACOR, IDADE, SEXO, PESO FROM tb_doi LIMIT 100";
$result2 = mysqli_query($strcon2, $sql_code4) or die(mysqli_error($strcon));
while($row2 = mysqli_fetch_array($result2)){ 
    $dados[] = [
        "numerodo"  => $row2["NUMERODO"],
        "racacor"   => $row2["RACACOR"],
        "idade"     => $row2["IDADE"],
        "sexo"      => $row2["SEXO"],
        "peso"      => $row2["PESO"]
    ];
};

$json = json_encode($dados);

$dado = $json;

file_put_contents($file,$dado);



?>  