<?php
require "modelo/produtoModelo.php";
//unset($_SESSION["carrinho"]);
/** anon */
//http://localhost/app/carrinho
function index()
{
	
   if (isset($_SESSION["carrinho"])) {
    $produtosCarrinho = array();
    foreach ($_SESSION["carrinho"] as $produtoID) {
        $produtosCarrinho[] = pegarProdutoPorId($produtoID["id"]);
    }


    $dados["produtos"] = $produtosCarrinho;
    exibir("carrinho/listar", $dados);
} else {
    $dados["produtos"] = null;
    exibir("carrinho/listar", $dados);
}
}
/** anon */
//http://localhost/app/carrinho/adicionar/2
function adicionar($id)
{
    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    }

    //vai existir a sessao carrinho!
    $alt = false ;


    for ($i=0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
            $alt = true;
            $_SESSION["carrinho"][$i]["quantidade"]++;
        }
    }
    if (!$alt) {
        $produto["id"] = $id;
        $produto["quantidade"]= 1;
        $_SESSION["carrinho"][] = $produto;
    }

//echo "<pre>";
//print_r($_SESSION["carrinho"]);



    redirecionar("carrinho");
}
/** anon */
//http://localhost/app/carrinho/deletar/2

function deletar ($id) {
    if (ehPost()) {
        $id = $id;
        $quantidade = $_POST["quantidade"];
        //echo "quantidade para excluir = ".$quantidade."<br>";
        //echo "ID do respectivo produto = ".$id. "<br>";
        for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
            if ($_SESSION["carrinho"][$i]["id"] == $id) {
                //print_r( $_SESSION["carrinho"][$i]["id"]);
                $_SESSION["carrinho"][$i]["quantidade"] = $_SESSION["carrinho"][$i]["quantidade"] - $quantidade;
                if ($_SESSION["carrinho"][$i]["quantidade"] == 0) {
                    unset($_SESSION["carrinho"][$i]);
                    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
                    redirecionar("carrinho/index");
                }

            }
        }
    }
    redirecionar("carrinho/index");
}


