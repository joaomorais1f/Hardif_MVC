<div class="container">
	<div class="container-fluid">
		<div class="row">


			<h3>Adicionar Cupom</h3>
			<form action="<?=@$acao?>" method="POST" enctype="multipart/form-data">

				<div class="col-md-6">
					<label for="nome">Nome Cupom</label>
					<input  type="text" name="nome" value="<?=@$cupons['cupom']?>" class="form-control">
				</div>

				<div class="col-md-6">
					<label for="nome">Desconto</label>
					<input  type="text" name="desconto" value="<?=@$cupons['desconto']?>" class="form-control">
				</div>

					<br>
					<center><button type="submit" class="btn btn-success">Enviar</button></center>
				</div>
			</form>
				<div class="col-md-6">
					<a href="./cupom/index"> VER CUPONS </a>
				</div>


		</div>
	</div>


</div>
<br>