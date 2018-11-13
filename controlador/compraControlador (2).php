<?php
require 'modelo/usuarioModelo.php';
require 'modelo/produtoModelo.php';
require 'modelo/cupomModelo.php';

require 'servicos/correiosServico.php';

function index() {
	//$dados["usuario"] = $_SESSION["auth"];


	 if (ehPost()) {
  		$busca = $_POST["cupom"];
    	$dados["cupons"] = BuscarCupom($busca);
    }
    foreach ($_SESSION["carrinho"] as $produtoID) {
        $produtosCarrinho[] = pegarProdutoPorId($produtoID["id"]);
    }
    $dados["produtos"] = $produtosCarrinho; 


    $usuarioLogado = $_SESSION["auth"]["user"];
    $cepUsuario = $usuarioLogado["CEP"];

$dados["usuario"] = $usuarioLogado;
    $valorFrete = calcular_frete(18211177,$cepUsuario,1,0,40010);

    $dados["valorFrete"] = $valorFrete;




	exibir("compra/listar",$dados);	
}



?>	