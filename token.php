<?php

$header = [
    'alg' => 'HS256',
    'typ' => 'JWT'
];
    
$header = json_encode($header);

$header = base64_encode($header);

// echo "Header: $header <br><br>";

$duracao = time() + (3 * 60);
    
//echo 'Data atual: ' . date('d-m-Y h:i'). '<br> Vencimento: '. date('d-m-Y h:i', $duracao). "<br><br>";

$payload = [
    'iss' => 'localhost',
    'aud' => 'localhost',
    'exp' => $duracao,
    'id' => '1',
    'nome' => 'usuario'
];
    
$payload = json_encode($payload);

$payload = base64_encode($payload);

//echo "Payload: $payload <br><br>";
    
$chave = 'S3C@DJT3CMA2023';

$signature = hash_hmac('sha256', "$header.$payload", $chave, true );

$signature = base64_encode($signature);

//echo "Signature: $signature <br><br>";

return "$header.$payload.$signature"; 
?>
