<?php

session_start();

include('conexao.php');

$_SESSION['auth'] = $login['user'];
