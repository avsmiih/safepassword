<?php
if(!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="imagens/sistema-seguro.ico">
    <link rel="stylesheet" href="result.css">
    <title>Credenciamento - Sistema Seguro</title>
</head>
<body>
    <main>
        <div id="box-imagem">
            <img src="imagens/governo.jpeg" alt="imagem">
        </div>

        <h2>Login realizado com sucesso! Seja bem vindo(a) <?php echo $_SESSION['user']; ?></h2>
        <br>

        <p id="paragrafo">Este é o seu token, guarde-o com segurança! Ele será requisitado a você em nosso sistema.</p>

        <div id="box-token">
            <h2>Token de acesso:</h2>
            <p id="token"><?php include ('token.php'); echo $token ?></p>
        </div>
            <button>copy</button>
        

        <?php
        $_SESSION['auth_user'] = $token;
        include('atualizaçao.php');
        include('botao2.html');
        include('botao4.html');
        ?>
    </main>
</body>

</html>