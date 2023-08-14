<?php
    include 'senha.php';
    $salt; 
    $password;
    $digitado = $_POST['senha'].$salt;
    $senha = $password.$salt;
    $dig_ref = hash('sha256', $digitado);
    $sen_ref = hash('sha256', $senha);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decifra-me ou te devoro</title>
</head>
<body>
 <div> <body style="background-color:black; color:aliceblue" ></body></div>
 <div>
    <audio id="player" autoplay="autoplay">
        <source src='CROWD_SMALL_CHIL_EC049202.mp3' />
    </audio>
 </div>
 <?php
    if($dig_ref === $sen_ref) {
        include 'revelado.html';
        echo "$dig_ref <br>";
        echo $sen_ref;
    } else {
        include 'susto.html';
    }
 ?>
</body>
</html>