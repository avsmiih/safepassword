<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema de Cadastramento</title>
</head>
<body>
    <div>
        <img src="https://www.ma.gov.br/assets/images/brand/gov__ma.png">
        
        <form action="" method="post">
            <div>
                <h2> cadastro </h2>
            </div>
            <div>
                <div>
                    <label for="usuario">Usuário:</label>
                    
                    <input type="text" name="usuario" autocomplete="off" required='true'>

                </div>
                <div>
                    <label for="password">Senha:</label>

                    <input type="password" name="senha" autocomplete="off" required='true'>

                </div>
                <div>
                    <label for="password">Confirme sua senha:</label>

                    <input type="password" name="senha2" autocomplete="off" required='true'>

                </div>
                <div>
                    <label for="email">Email:</label>

                    <input type="email" name="email" autocomplete="off" required='true'>

                </div>
                <div>
                    <label for="email">Confirme seu email:</label>

                    <input type="email" name="email2" autocomplete="off" required='true'>

                </div>
            </div>
            <div>
                <button type="submit" value="cadastro" class="submit"> cadastrar</button>
                
            </div>
        </form>
    </div>

    <?php

    include ("conexao.php");

    if (!isset($_POST['usuario'])) {
        $_POST['usuario'] = '';
    }

    if (!isset($_POST['senha'])) {
        $_POST['senha'] = '';
    }

    if ($_POST['usuario'] !== '' && $_POST['senha'] !== '') {
        
        if ($_POST['senha'] === $_POST['senha2'] && $_POST['email'] === $_POST['email2']) {
            $sql_code4 ="INSERT INTO usuarios (user, senha, email) VALUES ('{$_POST['usuario']}', sha2('{$_POST['senha']}',256), '{$_POST['email']}')";
            if ($strcon->query($sql_code4) === TRUE) {
                echo "Cadastro realizado com sucesso.";
                header('Location:index.php');
            };
        } else {
            echo "As senhas não coincidem.";
        }
    }

    ?>
</body>
</html>