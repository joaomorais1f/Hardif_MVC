<?php
	$estados = array("AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MG","MS","MT","PA","PB","PE","PI","PR","RJ","RN","RO","RR","RS","SC","SE","SP","TO");
?>

<div class="container">
	<div class="row">	
		<h1> Você ainda não possuí cadastro? ⊙ᗝ⊙ Cadastre-se agora!!!</h1>

		<form action="<?=@$acao?>" method="POST">
			<div class=" col-md-6">



				NOME: <input type="text" name="nome" value="<?=@$usuario['nome']?>" class="form-control" placeholder="Insira seu nome completo">
				<p class="erro"><?=@verificarErro($erros, "nome");?> </p>

				EMAIL: <input type="text" name="email" value="<?=@$usuario['email']?>" class="form-control" placeholder="Insira seu email">
				<p class="erro"><?=@verificarErro($erros, "email");?> </p>




			</div>
			<div class="col-md-6">




				SENHA: <input type="password" name="senha" value="<?=@$usuario['senha']?>" class="form-control" placeholder="************">
				<p class="erro"><?=@verificarErro($erros, "senha");?> </p>

				CPF: <input type="text" name="CPF" value="<?=@$usuario['CPF']?>" class="form-control" data-mask="000.000.000-00" placeholder="EX: 123-456-789-11">
				<p class="erro"><?=@verificarErro($erros, "CPF");?> </p>
				
				




			</div>


			<div class="col-md-6">
				
				TELEFONE: <input type="text" name="telefone" value="<?=@$usuario['telefone']?>" class="form-control" data-mask="(00) 0000-0000" placeholder="EX: (15) 1234-5678">
				<p class="erro"><?=@verificarErro($erros, "telefone");?> </p>
			</div>
			<div class="col-md-6">
				ENDERECO: <input type="text" name="endereco" value="<?=@$usuario['endereco']?>" class="form-control" placeholder="EX: Rua machado de assis 40">
				<p class="erro"><?=@verificarErro($erros, "endereco");?> </p>
				
			</div>
			<div class="col-md-6">
				CIDADE: <input type="text" name="cidade" value="<?=@$usuario['cidade']?>" class="form-control" placeholder="EX: Itapetininga">
				<p class="erro"><?=@verificarErro($erros, "cidade");?> </p>
				
			</div>
	<div class="col-md-6">
				CEP: <input type="text" name="cep" value="<?=@$usuario['CEP']?>" class="form-control" data-mask="00000-000" placeholder="EX: 18211.111">
				<p class="erro"><?=@verificarErro($erros, "cep");?> </p>
				
			</div>
			<div class="col-md-6">
				ESTADO:
				<br>
				<select name="estado" class="form-control">
				<?php for ($i = 0; $i < count($estados); $i++) {
				?>
					ESTADOS:<option value="<?=$estados[$i]?>" <?=@assinalarCampo($usuario['estado'], '<?=$estados[$i]?>')?>><?=$estados[$i]?></option>
				<?php  } ?>
				</select>
				<?=@verificarErro($erros, "estado");?>
				<!--ESTADO: <input type="text" name="estado" value="<?=@$usuario['estado']?>" class="form-control" placeholder="SP">
				<p class="erro"><?=@verificarErro($erros, "estado");?> </p> -->
				

			</div>
			<div class="col-md-6">
				<br>
				<select name="sexo" class="form-control">
					<option value="m" <?=@assinalarCampo($usuario['sexo'], 'm')?>>Masculino</option>
					<option value="f" <?=@assinalarCampo($usuario['sexo'], 'f')?>>Feminino</option>
				</select>
				<?=@verificarErro($erros, "sexo");?>
			</div>
			<div class="col-md-12">
				<br>
				<center><button type="submit" class="btn btn-primary">Enviar</button></center>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" src="./publico/js/jquery.mask.js"></script>
<script type="text/javascript" src="./publico/js/jquery-3.3.1.min.js"></script>