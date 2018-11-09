<?php

function pegarTodasCategorias() {
    $sql = "SELECT * FROM categoria";
    $resultado = mysqli_query(conn(), $sql);
    $categorias = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $categorias[] = $linha;
    }
    return $categorias;
}	
?>