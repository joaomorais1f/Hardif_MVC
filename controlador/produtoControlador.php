<?php
require 'modelo/produtoModelo.php';
require 'modelo/categoriaModelo.php';
require 'servicos/uploadServico.php';

/** anon */
function index($id = 1) {
    $dados["total"] = contarTotalProdutos();
    $pagina = $id;

    $quantidade_pagina = 1;
    $inicio = ($quantidade_pagina * $pagina) - $quantidade_pagina;
    $resultado_produtos = SelecaoProdutos($inicio,$quantidade_pagina);
    $total_produtos = contarTotalProdutosPorPagina($inicio,$quantidade_pagina,$resultado_produtos);




    $dados["produtos"] = $resultado_produtos;
    $dados["pagina"] = $pagina;
    $dados["quantidade_pagina"] = $quantidade_pagina;


    exibir("produto/listar", $dados);

}

/** admin */
function adicionar() {  
    if (ehPost()) {
    	//print_r($_POST);
        extract($_POST);

        $caminhoImagem = uploadImagem($_FILES["imagem"]);
        adicionarProduto($nome, $preco, $descricao,$categoria,$caminhoImagem,$quantidade);

        redirecionar("produto/index/1");
    } else {
    	$dados["categorias"] = pegarTodasCategorias(); 
        exibir("produto/formulario", $dados);
    }
}

/** admin */
function deletar($id) {
    alert(deletarProduto($id));
    redirecionar("produto/index/1");
}
/** admin */
function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $preco = $_POST["preco"];
        $descricao = $_POST["descricao"];
        $categoria = $_POST["categoria"];
        $quantidade = $_POST["quantidade"];
        alert(EditarProduto($id, $nome,$preco,$descricao,$categoria,$quantidade));
        redirecionar("produto/index/1");
    } else {
        $dados['produtos'] = pegarProdutoPorId($id);
        exibir("produto/formulario", $dados);
    }
}
/** anon */
function visualizar($id) {
    $dados['produto'] = pegarProdutoPorId($id);
    exibir("produto/visualizar", $dados);
}

/** anon */
function pesquisa($id = 1) {
if (ehPost()) {
    $busca = $_POST["busca"];
    $dados["produtos"] = BuscarProduto($busca);
    $dados["total"] = contarTotalProdutos();
    $pagina = $id;

    $quantidade_pagina = 3;
    $inicio = ($quantidade_pagina * $pagina) - $quantidade_pagina;
    $resultado_produtos = SelecaoProdutos($inicio,$quantidade_pagina);
    $total_produtos = contarTotalProdutosPorPagina($inicio,$quantidade_pagina,$resultado_produtos);




    $dados["produtos"] = $resultado_produtos;
    $dados["pagina"] = $pagina;
    $dados["quantidade_pagina"] = $quantidade_pagina; 
    exibir("produto/listar",$dados);
    } 
}

?>