<?php
require 'modelo/cupomModelo.php';

function index() {
	$dados["cupons"] = pegarTodosCupons();
	exibir("cupom/listar",$dados);

}

function adicionar() {  
    if (ehPost()) {
    	//print_r($_POST);
        extract($_POST);

        adicionarCupom($nome,$desconto);

        redirecionar("cupom/index");
    } else {
    	exibir("cupom/formulario");
    }
}

function editar($id) {
    if (ehPost()) {
        extract($_POST);
        $cupom = $_POST["cupom"];
        $desconto = $_POST["desconto"];
        alert(editarCupom($id, $cupom,$desconto));
        redirecionar("cupom/index");

    } else {
        $dados["cupons"] = pegarCupomPorId($id);
        exibir("cupom/formulario", $dados);
    }
}
function deletar($id) {
    alert(deletarCupom($id));
    redirecionar("cupom/index");
}

function pesquisa() {

    $busca = $_POST["cupom"];
    $dados["cupons"] = BuscarCupom($busca);
    exibir("compra/listar",$dados); 
}
?>