<?php
/*
include('token.php');

echo '<hr>';

$token_array = explode('.', $token);
$header = $token[0];
$payload = $token[1];
$signature = $token[2];

$chave = 'S3C@DJT3CMA2023';

var_dump($token_array[1]);

$dados_token = base64_decode($token_array[1]);

$dados_token = json_decode($dados_token);

var_dump($dados_token);

if($dados_token->exp > time()) {
    echo '<br> Token válido';
} else {
    echo '<br> Token invalido';
}
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Validação de Token</title>
</head>
<body>
    <div>
        <img src="https://www.ma.gov.br/assets/images/brand/gov__ma.png">
        <div>
            <br>
            <form method="post" action="">
                <label for="token"> Token: </label>
                <input type="text" name="token" autocomplete="off">

                <input type="submit" name="validar" value="Validar" class="submit">
            </form>
        </div>
        <div>
            <p> 
                <?php
                    
                    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

                    if (!empty($dados['validar'])) {
                        
                        $token_array = explode('.', $dados['token']);
                        $header = $token_array[0];
                        $payload = $token_array[1];
                        $signature = $token_array[2];

                        $chave = 'S3C@DJT3CMA2023';

                        $validar = hash_hmac('sha256', "$header.$payload", $chave, true );
            
                        $validar = base64_encode($validar);
            
                        if ($signature == $validar) {
                            
                            $dados_token = base64_decode($payload);

                            $dados_token = json_decode($dados_token);
                            
                            if($dados_token->exp > time()) {
                                echo 'Token válido';
                            } else {
                                echo 'Token invalido';
                            }
                        }else {
                            echo "Token inválido";
                        }
                    }

                ?>
            </p>
        </div> 
    </div>
</body>
</html>
