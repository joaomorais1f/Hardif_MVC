<?php

function pegarTodosProdutos() {
	$sql = "SELECT * FROM cadastroproduto";
	$resultado = mysqli_query(conn(), $sql);
	$produtos = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produtos[] = $linha;
	}
	return $produtos;
}

function pegarProdutoPorId ($id) {
	$sql = "SELECT * FROM cadastroproduto WHERE IDproduto = $id";
	$resultado = mysqli_query(conn(), $sql);
	$produto = mysqli_fetch_assoc($resultado);
	return $produto;
	
}

function adicionarProduto ($nomeproduto, $preco,$descricao,$categoria,$imagem,$quantidade) {
	$sql = "INSERT INTO CadastroProduto (nome,preco,descricao,categoria,imagem,quantidade) VALUES ('$nomeproduto','$preco','$descricao','$categoria','$imagem','$quantidade')";
	$resultado = mysqli_query($cnx = conn(), $sql);

	if(!$resultado) { die('Erro ao adicionar produto' . mysqli_error($cnx)); }

}


function EditarProduto ($id,$nomeproduto,$preco,$descricao,$categoria,$quantidade) {
	$sql = "UPDATE cadastroproduto SET nome = '$nomeproduto', preco = '$preco', descricao = '$descricao', categoria = '$categoria', quantidade = '$quantidade' WHERE IDproduto = '$id'";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
	return 'Produto alterado com sucesso!';
}

function DeletarProduto($id) {
	$sql = "DELETE FROM cadastroproduto WHERE IDproduto = $id";
	$resultado = mysqli_query ($cnx = conn(), $sql);
	if(!$resultado) { die('Erro ao Deletar produto' . mysqli_error($cnx)); }
	return ' Produto excluído com sucesso!';	
}

function BuscarProduto($nome) {
	$sql= "SELECT * FROM cadastroproduto WHERE nome LIKE '%$nome%'";
	$resultado = mysqli_query ($cnx = conn(), $sql);
	$produtos = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produtos[] = $linha;
	}
	return $produtos;

}

function contarTotalProdutos () {
	$sql = "SELECT * FROM cadastroproduto";
	$resultado = mysqli_query ($cnx = conn(), $sql);
	$total_produtos = mysqli_num_rows($resultado);
	return $total_produtos;
}

function SelecaoProdutos ($inicio,$quantidade_pagina) {
	$sql = "SELECT * FROM CadastroProduto LIMIT $inicio,$quantidade_pagina";
	$resultado = mysqli_query ($cnx = conn(), $sql);
	return $resultado;

}

function contarTotalProdutosPorPagina ($inicio,$quantidade_pagina,$resultado_produtos) {
	$sql = "SELECT * FROM cadastroproduto LIMIT $inicio,$quantidade_pagina" ;
	$resultado = mysqli_query ($cnx = conn(), $sql);
	$total_produtos_pagina = mysqli_num_rows($resultado);
	return $total_produtos_pagina;
}

function ExibirProdutos ($resultado_produtos) {
	$numero_pagina = 0;
	while ($rows_produtos = mysqli_fetch_assoc($resultado_produtos)) {
		$numero_pagina  = $rows_produtos; 
	}
	return $numero_pagina;
}



function atualizarEstoque ($id,$estoque_atual,$quantidade_comprada) {
	print_r($estoque_atual);
	$estoque_atual = $estoque_atual - $quantidade_comprada;
	$sql = "UPDATE cadastroproduto SET IDproduto = '$id', quantidade = $estoque_atual WHERE IDproduto = '$id'";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if (!$resultado) {
		echo "Erro ao atualizar estoque ".mysqli_error($cnx);
	}

}
?>