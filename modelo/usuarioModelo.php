<?php

function pegarTodosUsuarios() {
    $sql = "SELECT * FROM dadosusuario";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $usuarios[] = $linha;
    }
    return $usuarios;
}


function pegarUsuarioPorId($id) {
    $sql = "SELECT * FROM dadosusuario WHERE IDUsuario= '$id'";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

function adicionarUsuario($nome, $email, $sexo,$senha, $CPF, $telefone, $endereco,$cidade,$estado,$cep,$tipo) {
    $sql = "INSERT INTO dadosusuario (nome, email, sexo, senha, CPF, telefone, endereco,cidade,estado,cep,tipo) 
			VALUES ('$nome', '$email', '$sexo','$senha', '$CPF', '$telefone', '$endereco','$cidade','$estado','$cep','user')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar usuário' . mysqli_error($cnx)); }
    return 'Usuario cadastrado com sucesso!';
}

function editarUsuario($id,$nome, $email, $sexo,$senha, $CPF, $telefone, $endereco,$cidade,$estado,$cep) { 
    $sql = "UPDATE dadosusuario SET nome = '$nome', email = '$email', sexo = '$sexo', senha = '$senha', CPF ='$CPF', telefone ='$telefone', endereco ='$endereco', cidade = '$cidade', estado = '$estado', CEP = '$cep' WHERE IDUsuario = '$id'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Usuário alterado com sucesso!';
}

function deletarUsuario($id) {
    $sql = "DELETE FROM dadosusuario WHERE IDUsuario = '$id'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); }
    return 'Usuario deletado com sucesso!';
            
}

function pegarUsuarioPorEmailSenha($email, $senha){
    $sql = "SELECT * FROM dadosusuario WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}