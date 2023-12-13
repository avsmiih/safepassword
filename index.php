<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Seguro - Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" type="imagex/png" href="imagens/sistema-seguro.ico">
</head>
<body>
    <main>
        <div id="imagem">
            <img src="imagens/governo.jpeg" alt="imagem" class="img">
        </div>

        <form id="form" action="validar_login.php" method="post">
            <section id="login">
                <ion-icon name="person-outline" class="icon-login"></ion-icon>
                <input type="text" name="usuario" id="Input-login" placeholder="Login">
            </section>

            <section id="password">
                <ion-icon name="key-outline" class="icon-password"></ion-icon>
                <input type="password" name="senha" id="Input-password" placeholder="Senha">
            </section>

            <button type="submit" id="button-submit">
                <ion-icon name="enter-outline" class="icon-submit"></ion-icon>
                Entra
            </button>
        </form>

         <?php
            include("botao3.html");
            ?>
    </main>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="login.js"></script>
</html>
