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
        
        <form action="result.php" method="post">
            <div>
                <h2> login </h2>
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
            </div>
            <div>
                <button type="submit" value="login" class="submit"> enviar</button>           </div>
        </form>
        
    <?php
    include("botao3.html");
    ?>
    </div>
</body>
</html>