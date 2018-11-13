<?php
require_once "modelo/usuarioModelo.php";
require_once "servicos/validacaoServico.php";
require 'servicos/correiosServico.php';
//require 'controlador/loginControlador.php';
/* admin */
function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}

/** anon */
function adicionar() {
    if (ehPost()) {
        extract($_POST);



        $erros = validacaoCadastro($nome,$CPF,$email,$senha,$endereco,$sexo,$telefone,$cidade,$estado,$cep);

        if(empty($erros)) {
            alert(adicionarUsuario($nome,$email,$sexo,$senha, $CPF,$telefone,$endereco,$cidade,$estado,$cep));
            redirecionar("usuario/index");
        } else {
            $dados["erros"] = $erros;
            exibir("usuario/formulario", $dados);
        }
         
    } else {
        exibir("usuario/formulario");
    }
}
/** user */
function deletar($id) {
    alert(deletarUsuario($id));
    redirecionar("login/logout");
}

/** user */
function editar($id) {
    if (ehPost()) {
        extract($_POST);
        /*$nome = $_POST["nome"];
        $email = $_POST["email"];
        $sexo = $_POST["sexo"];
        $senha=$_POST['senha'];
        $CPF=$_POST['CPF'];
        $telefone=$_POST['telefone'];
        $endereco= $_POST['endereco']; */
        alert(editarUsuario($id, $nome, $email, $sexo,$senha, $CPF, $telefone, $endereco,$cidade,$estado,$cep));
        redirecionar("usuario/visualizar/$id");

    } else {
        $dados['usuario'] = pegarUsuarioPorId($id);
        exibir("usuario/formulario", $dados);
    }
}

/** user */
function visualizar($id) {
    $dados['usuario'] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}

?>