<?php
require 'modelo/produtoModelo.php';
require_once 'modelo/pedidoModelo.php';
require_once 'modelo/usuarioModelo.php';




function finalizarPedido () {
	//$produtos_comprados = $_SESSION["carrinho"];
	$data_pedido_realizado = strftime("%Y/%m/%d") . " " . strftime("%H:%M:%S");
	$usuario = $_SESSION["auth"]["user"];
	$ID_usuario = $usuario["IDUsuario"];
	$cliente = pegarUsuarioPorId($ID_usuario);
	$total = 0;

	foreach ($_SESSION["carrinho"] as $key => $value) {
		$produto[] = pegarProdutoPorId($value["id"]);
		foreach ($produto as $key => $prod) {
			if ($value["id"] == $prod["IDproduto"]) {
				$total += $prod["preco"] * $value["quantidade"];
				$quantidade_comprada = $value["quantidade"];
				$estoque_atual = $prod["quantidade"];	
			}

		}
	}



	$id_pedido = AdicionarPedido($ID_usuario,$data_pedido_realizado,$cliente["CPF"],$cliente["CEP"],$cliente["cidade"],$cliente["estado"],$cliente["endereco"],$total);


//echo "Quantidade atual no estoque do produto comprado = ".$estoque_atual."<br>";
//echo "Quantidade comprada do produto = ".$quantidade_comprada."<br>";

	foreach ($produto as $key => $value) {
		inserirProdutoPedido($id_pedido,$value["IDproduto"],$quantidade_comprada);
		atualizarEstoque($value["IDproduto"],$estoque_atual,$quantidade_comprada);
	}


unset($_SESSION["carrinho"]);
redirecionar("produto/index");


}



?>