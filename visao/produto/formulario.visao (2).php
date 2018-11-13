<div class="container">
	<div class="container-fluid">
		<div class="row">


			<h3>Adicionar</h3>
			<form action="<?=@$acao?>" method="POST" enctype="multipart/form-data">

				<div class="col-md-6">
					<label for="nome">Nome</label>
					<input  type="text" name="nome" value="<?=@$produtos['nome']?>" class="form-control">
				</div>

				<div class="col-md-6">
					<label for="nome">Quantidade</label>
					<input  type="number" name="quantidade" value="<?=@$produtos['quantidade']?>" class="form-control">
				</div>

				<div class="col-md-6">
					<label for="nome">Preço</label>
					<input  type="number" name="preco" value="<?=@$produtos['preco']?>" class="form-control">
				</div>







				<div class="col-md-6">
					<label for="nome">Categoria</label>
					<input type="text" name="categoria" value="<?=@$produtos['categoria']?>" class="form-control">
				</div>

				<div class="col-md-3" id="fake-colune"></div>

				<div class="col-md-12">
					<br>
					<center><label for="nome">Selecionar Imagem</label></center>
					<input type="file" name="imagem" value="" class="form-control">
				</div>

				

				<div class="col-md-12">
					<label for="descricao">Descrição</label>
					<textarea style="resize: none; height:20%; width:100%;" maxlength="1000" name ="descricao" class="form-control" value="<?=@$produtos['descricao']?>"></textarea>
				</div>
				<div class="col-md-12">
					<br>
					<center><button type="submit" class="btn btn-success">Enviar</button></center>
				</div>
			</form>



		</div>
	</div>


</div>
<br>