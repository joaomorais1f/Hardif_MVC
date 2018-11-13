<?php
        if (isset($_SESSION['auth']) && ($_SESSION["auth"]["role"] == "admin")){



            ?>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>SENHA</th>
            <th>SEXO</th>
            <th>CPF</th>
            <th>TELEFONE</th>
            <th>ENDERECO</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['IDUsuario']?></td>
            <td><?=$usuario['nome']?></td>
            <td><?=$usuario['email']?></td>
            <td><?=$usuario['senha']?></td>
            <td><?=$usuario['sexo']?></td>
            <td><?=$usuario['CPF']?></td>
            <td><?=$usuario['telefone']?></td>
            <td><?=$usuario['endereco']?></td>
            <td><a href="./usuario/visualizar/<?=$usuario['IDUsuario']?>" class="btn btn-success">view</a></td>
            <td><a href="./usuario/editar/<?=$usuario['IDUsuario']?>" class="btn btn-info">edit</a></td>
            <td><a href="./usuario/deletar/<?=$usuario['IDUsuario']?>" class="btn btn-danger">del</a></td>
        </tr>
    <?php endforeach; ?>
</table>



<a href="./usuario/adicionar" class="btn btn-primary">Adicionar novo usuario</a>

<?php
}
?>