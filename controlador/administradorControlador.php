<?php
require_once 'modelo/produtoModelo.php';
require_once 'modelo/pedidoModelo.php';
require_once 'modelo/categoriaModelo.php';

function index() {
    //lista de pedidos por municipio
	if (!empty($_POST["Municipio"])) {
		extract($_POST);  
		$dados["pedidosMunicipio"] = pegarPedidoPorMunicipio($Municipio); 
	}else{
		$dados["pedidosMunicipio"] = "";
	}
	if (!empty($_POST["dtInicio"]) && !empty($_POST["dtFim"])) {
		extract($_POST);  
		$dados["pedidosPorData"] = pegarPedidoPorIntervaloTempo($dtInicio,$dtFim); 
	}else{
		$dados["pedidosMunicipio"] = "";
	}
	if (!empty($_POST["estado"])) {
		extract($_POST);  
		$dados["pedidosEstado"] = pegarPedidoPorEstado($estado); 
	}else{
		$dados["pedidosEstado"] = "";
	}
	

	exibir("administrador/index",$dados);
}





?>