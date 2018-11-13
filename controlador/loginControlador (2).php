<?php

require "modelo/usuarioModelo.php";

/** anon */
function index() {
    if (ehPost()) {
        $login = $_POST["login"];
        $passwd = $_POST["passwd"];

        $usuarioBanco = pegarUsuarioPorEmailSenha($login, $passwd);
        if (authLogin($usuarioBanco)) {
            alert("bem vindo" . $login);
            redirecionar("produto/index/1");
        } else {
            alert("usuario ou senha invalidos!");
        }
    }
    exibir("login/index");
}

/** anon */
function logout() {
    authLogout();
    alert("deslogado com sucesso!");
    redirecionar("produto/index/1");
}

?>