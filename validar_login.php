<?php
if(!isset($_SESSION)) {
    session_start();
}

if (empty($_POST["usuario"]) || empty($_POST["senha"])){
    return;
};

if ($_POST["usuario"] != "") {
    $login = [
        "user" => $_POST["usuario"],
        "password" => $_POST["senha"]
    ];
    
    $pass = hash("sha256", $login["password"]);
};

$log_user = $login["user"];

if (!empty($_POST["usuario"]) && !empty($_POST["senha"])) {
    include('conexao.php');
        
    $sql_code = "SELECT user, senha FROM usuarios WHERE user='{$login["user"]}' AND senha='{$pass}'";
    $result = mysqli_query($strcon, $sql_code) or die(mysqli_error($strcon));
    $row = mysqli_fetch_assoc($result);

    $_SESSION['user'] = $row["user"];

    if (isset($_SESSION['user'])) {
          return header('Location:result.php');
    } else {
        return header('Location:telas_sistema/tela_erro.php');
    }
   
}; 