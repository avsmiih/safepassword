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
                include('conexao.php');

                if (!isset($_POST['usuario'])) {
                    $_POST['usuario'] = null;
                }

                if (!isset($_POST['senha'])) {
                    $_POST['senha'] = null;
                }

                if (in_array($_POST['usuario'], $usuarios) && in_array(hash('sha256', $_POST['senha']), $senhas)) {
                    echo '
                        <h4> Login realizado com sucesso! <h4>
                        <h5> Este é o seu token, guarde-o com segurança!
                        Ele será requisitado a você em nosso sistema.<h5>';
                    echo 'Token de aceeso: ' .include('token.php');
                    echo '<br><br>';
                    include('atualizaçao.php');
                    echo '<br><br>';
                    include('botao2.html');
                } elseif (!in_array($_POST['usuario'], $usuarios) || !in_array(hash('sha256', $_POST['senha']), $senhas)) {
                    echo 'Senha incorreta!';
                    include('botao.html');
                }
                
                ?>
            </p>
        </div>
    </div>
</body>

</html>