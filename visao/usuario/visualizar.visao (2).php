<br>
<br>
<br>
<?php

?>
<center><div class="container">
	<div class="row">
		<div class="col-md-6">
			<h4><strong> Seu ID de Cadastro </strong><?=$usuario['IDUsuario']?></h4>
		</div>
		<div class=" col-md-6">
			<h4><strong>Seu nome</strong></h4>
			<p> <?=$usuario['nome']?></p>
		</div>

	</div>
	<div class="row">
		<div class="col-md-6">
			<h4><strong> Seu email </strong></h4>
			<p><?=$usuario['email']?></p> 		
		</div>
		<div class="col-md-6">
			<h4><strong> Seu telefone</strong></h4>
			<p> <?=$usuario['telefone']?></p>

		</div>
		<div class="col-md-6">
			<h4><strong>Seu CPF</strong></h4>
			<p> <?=$usuario['CPF']?></p>

		</div>
		<div class="col-md-6">
			<h4><strong>Seu CEP</strong></h4>
			<p> <?=$usuario['CEP']?></p>

		</div>
		<div class="col-md-6">
			<h4><strong>Seu Endereço</strong></h4>
			<p> <?=$usuario['endereco']?></p>

		</div>
		<div class="col-md-6">
			<h4><strong>Sua Cidade</strong></h4>
			<p> <?=$usuario['cidade']?></p>

		</div>
		<div class="col-md-6">
			<h4><strong>Seu Estado</strong></h4>
			<p> <?=$usuario['estado']?></p>

		</div>

	</div>
	<a href="./usuario/editar/<?=$usuario['IDUsuario']?>" class="btn btn-info">Editar</a>
	<a href="./usuario/deletar/<?=$usuario['IDUsuario']?>" class="btn btn-danger">Deletar :c</a>
</div>

</center>