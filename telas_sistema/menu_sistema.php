<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu_style.css">
    <link rel="shortcut icon" type="imagex/png" href="../icone/sistema-seguro.ico">
    <title>Menu - Sistema Seguro</title>
</head>
<body>
    <main>
        <section class="left">
            <header>
                <img src="../icone/usuario.png" alt="" id="imagem">
                <p id="name"><?php echo $_SESSION['user'];?></p>
            </header>

            <div id="config"> 
                <ion-icon name="cog-outline" id="gear"></ion-icon>
                <p>visualizar tabela</p>
            </div>

            <div id="options">
                <div class="option">
                    <input type="radio" id="Pregistros" name="registros">
                    <label for="">primeiros registros</label>
                </div>

                <div class="option">
                    <input type="radio" id="Uregistros" name="registros">
                    <label for="">ultimos registros</label>
                </div>

            </div>
        </section>

        <section class="right">

            <h1 id="title-h1">Sistema seguro - ATI</h1>

            <div id="div-table">
                <table>
                    <thead>
                        <tr>
                            <th>NUMERODO</th>
                            <th>RAÇACOR</th>
                            <th>IDADE</th>
                            <th>SEXO</th>
                            <th>PESO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>  
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>

                </table>
            </div>

        </section>
    </main>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>