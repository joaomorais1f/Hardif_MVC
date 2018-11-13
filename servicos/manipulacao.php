<?php
function manipulacao (){
	$arquivo = fopen("C:/wamp64/www/Hardif_MVC-master/servicos/manipulacao.txt", "r");
$dados_banco = array();
	while (!feof($arquivo)) {
		$dados_banco[] = trim(fgets($arquivo)); 
	}

	return $dados_banco;
}
?>