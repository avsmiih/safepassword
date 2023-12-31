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
    <link rel="shortcut icon" type="imagex/png" href="imagens/sistema-seguro.ico">
    <title>Acesso - Sistema Seguro</title>
</head>
<body>
    <div id="login">
        <img src="https://www.ma.gov.br/assets/images/brand/gov__ma.png">
        <div>
            <br>
            <form method="post" action="">

            <div>
                <label for="usuario">Usuário:</label>
                <input type="text" name="usuario" autocomplete="off" required='true'>
            </div>

            <div>
                <label for="token"> Token: </label>
                <input type="text" name="token" autocomplete="off" required='true'>
            </div>
            <div>
                <input type="submit" name="validar" value="Acessar" class="submit">
            </div>
            </form>
        </div>
        <div>
            <p> 
                <?php
                    include("botao.html");
                    echo('<br>');

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
                                header("Location:telas_sistema/menu_sistema.php");
                            } else {
                                include('limpar_token.php');
                            }
                        }else {
                            header('Location:telas_sistema/tela_erro.php');;
                        }
                    }

                ?>
            </p>
        </div> 
    </div>
</body>
</html>
