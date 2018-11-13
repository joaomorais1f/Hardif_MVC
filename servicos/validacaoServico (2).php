<?php
function validacaoCadastro($nome, $CPF, $email, $senha, $endereco, $sexo,$telefone,$cidade,$estado,$cep){
	$errors 		= array();
	$email			= strip_tags($email);
	$nome 			= strip_tags($nome);
	$senha 			= strip_tags($senha);
		//$confirmaSenha	= strip_tags($confirmar_senha);
	$CPF_cadastro   = strip_tags($CPF);
	$endereco 		= strip_tags($endereco);
	$telefone 		= strip_tags($telefone);
	$cidade 		= strip_tags($telefone);
	$cep			= trim(strip_tags($cep));
		//$estado 		= strip_tags($telefone);

			//nome
	if (strlen(trim($nome)) <= 3) {
			//$errors[] = "Insira um nome";

		$erro = array();
		$erro["campo"] = "nome";
		$erro["mensagem"] = "Insira um nome";
		$errors[] = $erro;

	}elseif(!preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉèÈíÍìÌôÔõÕóÓòÒúÚùÙûÛçÇºª' ']+$/", $nome)) {
		$erro = array();
		$erro["campo"] = "nome";
		$erro["mensagem"] = "Insira um nome valido!!!";
		$errors[] = $erro;
	}
//TELEFONE
	if ((!preg_match('^\(+[0-9]{2,3}\) [0-9]{4}-[0-9]{4}$^', $telefone)) || (strlen($telefone) < 10)) {
		$erro = array();
		$erro["campo"] = "telefone";
		$erro["mensagem"] = "Numero de Telefone Invalido";
		$errors[] = $erro;
		
		//$erro = true;
	}
			//CPF

	if (!preg_match("/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/", $CPF_cadastro) || strlen(trim($CPF_cadastro)) == 0) {
		$erro = array();
		$erro["campo"] = "CPF";
		$erro["mensagem"] = "CPF não valido.";
		$errors[] = $erro;

	}

			//E-mail
	$emailValido 	= filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

	if (!$emailValido || strlen(trim($email)) == 0) {
		$erro = array();
		$erro["campo"] = "email";
		$erro["mensagem"] = "E-mail não valido.";
		$errors[] = $erro;
			//$errors[] = "E-mail não valido.";
	}

			//senha
	if(strlen(trim($senha)) == 0){

		$erro = array();
		$erro["campo"] = "senha";
		$erro["mensagem"] = "Insira uma senha";
		$errors[] = $erro; 
	} else if(strlen($senha) > 16){
		$erro = array();
		$erro["campo"] = "senha";
		$erro["mensagem"] = "Insira uma senha menor.";
		$errors[] = $erro;
			//$errors[] = "Insira uma senha menor."; 
	} else if(strlen($senha) < 8){
		$erro = array();
		$erro["campo"] = "senha";
		$erro["mensagem"] = "Insira uma senha maior.";
		$errors[] = $erro;
			//$errors[] = "Insira uma senha maior."; 
	} 

		/*confirmar senha
		if($confirmaSenha == ""){
			$errors[] = "Insira a confirmação da senha"; 
		} else if(!($senha == $confirmaSenha)){
			$errors[] = "Confirme a senha";
		}
		*/


			//endereco
		if (strlen(trim($endereco)) == 0) {
			$erro = array();
			$erro["campo"] = "endereco";
			$erro["mensagem"] = "Insira um endereco";
			$errors[] = $erro;
			//$errors[] = "Insira um endereco";
		}

			//Sexo
		if (strlen(trim($sexo)) == 0) {
			$erro = array();
			$erro["campo"] = "sexo";
			$erro["mensagem"] = "Sexo não selecionado.";
			$errors[] = $erro;
			//$errors[] = "Sexo não selecionado.";
		}
		if (strlen(trim($cidade)) == 0) {
			$erro = array();
			$erro["campo"] = "cidade";
			$erro["mensagem"] = "Insira uma cidade";
			$errors[] = $erro;
			//$errors[] = "Insira um endereco";
		}

			//Sexo
		if (strlen(trim($estado)) == 0) {
			$erro = array();
			$erro["campo"] = "estado";
			$erro["mensagem"] = "Estado não selecionado.";
			$errors[] = $erro;
			//$errors[] = "Sexo não selecionado.";
		}

    $avaliaCep = preg_match("/^[0-9]{5}-[0-9]{3}$/", $cep);
		if (!$avaliaCep){
			$erro = array();
			$erro["campo"] = "cep";
			$erro["mensagem"] = "CEP não valido.";
			$errors[] = $erro;
		}
		return $errors;
	}
	?>