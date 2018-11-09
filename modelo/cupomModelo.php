<?php

function pegarTodosCupons() {
	$sql = "SELECT * FROM cupom";
	$resultado = mysqli_query(conn(), $sql);
	$cupons = array();
	while ($linha = mysqli_fetch_array($resultado)) {
		$cupons[] = $linha;
	}
	return $cupons;
}
function pegarCupomPorId ($id) {
	$sql = "SELECT * FROM cupom WHERE IDcupom = '$id'";
	$resultado = mysqli_query(conn(), $sql);
	$cupom = mysqli_fetch_array($resultado);
	return $cupom;
	
}

function adicionarCupom ($cupom,$desconto) {
	$sql = "INSERT INTO cupom (cupom,desconto) 
	VALUES ('$cupom', '$desconto')";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if(!$resultado) { die('Erro ao cadastrar cupom' . mysqli_error($cnx)); }
	return 'Cupom cadastrado com sucesso!';

}

function editarCupom ($cupom,$desconto){
	$sql = "UPDATE cupom SET cupom = '$cupom', desconto = '$desconto' WHERE IDcupom = '$id'";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if(!$resultado) { die('Erro ao alterar cupom' . mysqli_error($cnx)); }
	return 'Cupom alterado com sucesso!';
}


function deletarCupom ($id) {
	$sql = "DELETE FROM cupom WHERE IDcupom = '$id'";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if(!$resultado) { die('Erro ao deletar cupom' . mysqli_error($cnx)); }
	return 'Cupom deletado com sucesso!';
}

function BuscarCupom($nome) {
	$sql= "SELECT * FROM cupom WHERE cupom LIKE '%$nome%'";
	$resultado = mysqli_query ($cnx = conn(), $sql);
	$cupons =  mysqli_fetch_assoc($resultado); 

	return $cupons;

}

?>