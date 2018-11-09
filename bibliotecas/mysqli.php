<?php
//require_once ("./servicos/leituraconexao.php");
function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "hardif");
    if (!$cnx) die('Deu errado a conexao!');

 //   mysqli_set_charset($cnx,"utf8");
    return $cnx;
}