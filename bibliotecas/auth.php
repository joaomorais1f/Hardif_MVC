<?php
define('AUTENTICADOR', true);

function authLogin($usuarioBanco) {
  
    if (!empty($usuarioBanco)) {
        $_SESSION["auth"] = array("user" => $usuarioBanco, "role" => $usuarioBanco["tipo"]);
        
        return true;
    }
    return false;
}

function authIsLoggedIn() {
    return isset($_SESSION["auth"]);
}

function authLogout() {
    if (isset($_SESSION["auth"])) {
        $_SESSION["auth"] = null;
        unset($_SESSION["auth"]);
    }
}

function authGetUserRole() {
    if (authIsLoggedIn()) {
        return $_SESSION["auth"]["role"];
    }
}

function pegarUsuarioLogado() {
    if(isset($_SESSION["auth"]["user"])) {
        return $_SESSION["auth"]["user"];        
    }
}