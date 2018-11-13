<?php 
function conexaoManipulacao() {
	$linhas_arquivo = array();
	$arquivo = fopen("C:/wamp64/www/hard_final/servicos/conexao.txt", "r");
	while(!feof($arquivo)) {
		$linhas_arquivo = trim(fgets($arquivo));
	}

	return $linhas_arquivo;
}



?>