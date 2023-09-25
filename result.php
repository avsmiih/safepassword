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
    <img src="https://www.ma.gov.br/assets/images/brand/gov__ma.png">
        <div>
            <p>
                <?php
                $user = 'admin';
                $password = '123456789';

                if (!isset($_POST['usuario'])) {
                    $_POST['usuario'] = null;
                }

                if (!isset($_POST['senha'])) {
                    $_POST['senha'] = null;
                }

                //$_POST['usuario'];
                //$_POST['senha'];

                    if ($_POST['usuario'] === $user && $_POST['senha'] === $password) {
                        echo '
                        <h4> Login realizado com sucesso! <h4>
                        <h5> Este é o seu token, guarde-o com segurança!
                        Ele será requisitado a você em nosso sistema.<h5>';
                        echo 'Token de aceeso: ' .include('token.php');
                    } elseif ($_POST['usuario'] != $user || $_POST['senha'] != $password) {
                        echo 'Senha incorreta!';
                        include('botao.html');
                    }
                ?>
            </p>
        </div>

</body>

</html>