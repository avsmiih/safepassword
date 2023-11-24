<?php

if (empty($_POST["usuario"]) && empty($_POST["senha"])) {
    $_POST["usuario"] = "";
    $_POST["senha"] = "";
};

$login = [
    "user" => $_POST["usuario"],
    "password" => $_POST["senha"]
];

$pass = hash("sha256", $login["password"]);

$log_user = $_POST["usuario"];

if (!empty($_POST["usuario"]) && !empty($_POST["senha"])) {
    include('conexao.php');
        
    $sql_code = "SELECT user, senha FROM usuarios WHERE user='{$login["user"]}' AND senha='{$pass}'";
    $result = mysqli_query($strcon, $sql_code) or die(mysqli_error($strcon));
    $row = mysqli_fetch_assoc($result);

    $log_user = $row["user"];
    $_SESSION['user'] = $log_user;

    if (isset($_SESSION['user'])) {
          return header('Location:result.php');
    }
    return header('Location:index.php');
   
};