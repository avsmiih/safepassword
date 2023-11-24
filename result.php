<?php
session_start();

if (!isset($_SESSION["user"])) {
    $_SESSION["user"] = $log_user;
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema de Login</title>
</head>
<body>
    <div>
    <img class=result src="https://www.ma.gov.br/assets/images/brand/gov__ma.png">
        <div>
            <p>
                <?php
                include('token.php');
                include('validar_login.php');

                echo '
                    <h4> Login realizado com sucesso! Seja bem vindo '. 
                    $_SESSION['user']. '<h4>' .
                    '<h5> Este é o seu token, guarde-o com segurança!
                    Ele será requisitado a você em nosso sistema. <h5>' .
                    '<h5> Token de acesso: ' . $token . '<h5>';

                $_SESSION['auth_user'] = $token;

                include('atualizaçao.php');
                echo '<br><br>';
                include('botao2.html');

                ?>
            </p>
        </div>
    </div>
</body>

</html>