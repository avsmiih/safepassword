<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Seguro - Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="shortcut icon" type="imagex/png" href="imagens/sistema-seguro.ico">
</head>
<body>
    <main>
        <div id="imagem">
            <img src="imagens/governo.jpeg" alt="imagem" class="imagem">
        </div>

        <form id="form">
            <section id="user" class="section">
                <ion-icon name="person-outline" class="icon"></ion-icon>
                <input type="text" name="Input-user" id="Input-user" placeholder="Usuário" class="class-input" autocomplete="off">
            </section>

            <div id="groo">

                <div id="groo-email">
                    <section id="email" class="section">
                        <ion-icon name="document-attach-outline" class="icon"></ion-icon>
                        <input type="email" name="Input-email" id="Input-email" placeholder="Email" class="class-input" autocomplete="off">
                    </section>
                    <section id="email-confirm" class="section">
                        <ion-icon name="document-attach-outline" class="icon"></ion-icon>
                        <input type="email" name="Input-email-confirm" id="Input-email-confirm" placeholder="Confirme seu email" class="class-input" autocomplete="off">
                    </section>
                </div>

                <div id="groo-senha">
                    <section id="password" class="section">
                        <ion-icon name="key-outline" class="icon"></ion-icon>
                        <input type="password" name="Input-password" id="icon-password" placeholder="Senha" class="class-input" autocomplete="off" max="16" min="8">
                    </section>
                    <section id="password-confirm" class="section">
                        <ion-icon name="key-outline" class="icon"></ion-icon>
                        <input type="password" name="Input-password-confirm" id="icon-password-confirm" placeholder="Confirme sua senha" class="class-input" autocomplete="off" max="16" min="8">
                    </section>
                </div>

            </div>

            <button id="button-submit">
                <ion-icon name="enter-outline" class="icon-submit"></ion-icon>
                Enviar
            </button>
        </form>
    </main>

     <?php

    include ("conexao.php");

    if (!isset($_POST['usuario']) && !isset($_POST['senha'])) {
        $_POST['usuario'] = '';
        $_POST['senha'] = '';
    }

    if (!isset($_POST['email']) && !isset($_POST['email2'])) {
        $_POST['email'] = '';
        $_POST['email2'] = '';
    }

    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $email2 = filter_var($_POST["email2"], FILTER_VALIDATE_EMAIL);

    if ($email && $email2 == false && $_POST["email"] && $_POST["email2"] != "") {
        echo "email inválido";
    };


    if ($_POST['usuario'] !== '' && $_POST['senha'] !== '') {
        
        if ($_POST['senha'] === $_POST['senha2'] && $_POST['email'] === $_POST['email2']) {
            $sql_code4 ="INSERT INTO usuarios (user, senha, email) VALUES ('{$_POST['usuario']}', sha2('{$_POST['senha']}',256), '{$_POST['email']}')";
            if ($strcon->query($sql_code4) === TRUE) {
                echo "Cadastro realizado com sucesso.";
                header('Location:index.php');
            };
        } elseif ($_POST['senha'] != $_POST['senha2']) {
            echo "As senhas não coincidem.";
        } elseif ($_POST['email'] != $_POST['email2']) {
            echo "Os emails não coincidem.";
        }
    }

    ?>
    
</body>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="cadastro.js">
    
</script>
</html>