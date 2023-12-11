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

                <div id="container-button">
                    <?php include ("botao_sistema.html");?>
                </div>
        </section>

        <section class="right">

            <h1 id="title-h1">Sistema seguro - ATI</h1>

            <div id="div-table">
                <table id="table">
                    <thead id="thead">
                        <tr>
                            <th>NUMERODO</th>
                            <th>RAÇACOR</th>
                            <th>IDADE</th>
                            <th>SEXO</th>
                            <th>PESO</th>
                        </tr>
                    </thead>

                    <tbody id="tbody">                       
                    </tbody>

                </table>
            </div>

        </section>
    </main>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script>
    const Pregistros =document.getElementById("Pregistros")
    const Uregistros =document.getElementById('Uregistros')
    const tbody = document.getElementById("tbody")
    const config = document.querySelector('#gear')
    const options =document.getElementById('options')

    Pregistros.addEventListener('change', async ()=> {
        tbody.innerHTML = ''
        try {
            const response = await fetch("../dados_sistema/cem_primeiros.json")
            const data = await response.json()

            for(let dado of data) {
                const newLine = tbody.insertRow()

                const newDataNumerodo = newLine.insertCell()
                newDataNumerodo.innerHTML = dado.numerodo

                const newDataRacacor = newLine.insertCell()
                newDataRacacor.innerHTML = dado.racacor

                const newDataIdade = newLine.insertCell()
                newDataIdade.innerHTML = dado.idade

                const newDataSexo = newLine.insertCell()
                newDataSexo.innerHTML = dado.sexo

                const newDataPeso = newLine.insertCell()
                newDataPeso.innerHTML = dado.peso
            }
        } catch (error) {
            alert('Token invalido! \n por favor retorne a pagina de login')
        }
    })

    Uregistros.addEventListener("change", async ()=> {
        tbody.innerHTML = ''

        try {
            const response = await fetch("../dados_sistema/cem_ultimos.json")
            const data = await response.json()

            for(let dado of data) {
                const newLine = tbody.insertRow()

                const newDataNumerodo = newLine.insertCell()
                newDataNumerodo.innerHTML = dado.numerodo

                const newDataRacacor = newLine.insertCell()
                newDataRacacor.innerHTML = dado.racacor

                const newDataIdade = newLine.insertCell()
                newDataIdade.innerHTML = dado.idade

                const newDataSexo = newLine.insertCell()
                newDataSexo.innerHTML = dado.sexo

                const newDataPeso = newLine.insertCell()
                newDataPeso.innerHTML = dado.peso
            }
        } catch (error) {
            alert('Token invalido! \n por favor retorne a pagina de login')
        }
        
    })

    config.addEventListener('click', ()=> {
        // config.style.transform = 'rotate(100deg)'
        // config.style.transition = '1s'
        // options.style.display = 'block'

        config.classList.toggle('active')

        if(config.classList.contains('active')) {
            options.style.display = "block"
            config.style.transform = 'rotate(100deg)'
            config.style.transition = '0.5s'
            
        }else{
            options.style.display = 'none'
            config.style.transform = 'rotate(-70deg)'
            config.style.transition = '0.5s'

        }
    })

        
</script>
</html>