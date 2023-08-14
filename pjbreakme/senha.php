<?php

function ler_token(){
	$arquivo = "token.txt";
	
	//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
	$fp = fopen($arquivo, "r");

	//Lê o conteúdo do arquivo aberto.
	$token = fread($fp, filesize($arquivo));
	
	//Fecha o arquivo.
	fclose($fp);
	
	//retorna o conteúdo.
	return $token;
}

function ler_senha(){
	$arquivo = "senha.txt";
	
	$fp = fopen($arquivo, "r");

	$senha = fread($fp, filesize($arquivo));
	
	fclose($fp);
	
	return $senha;
}

$salt = ler_token();
$password = ler_senha();
?>