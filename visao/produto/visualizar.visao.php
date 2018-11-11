<div class="container" style="padding-top:1%;">

	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-6">
				<img height="50%" width="80%" src="<?=$produto['imagem']?>">
			</div>
			<div class="col-lg-6">
				<h2><?=$produto['nome']?></h2>
				<p>Código: <?=$produto['IDproduto']?></p>
				
				 
				<p><strong>Estoque:</strong> <?=$produto['quantidade'] ?></p>
			</div>

			<div class="col-lg-6">
				<p><?=$produto['descricao']?></p>

			</div>
			<div class="col-lg-6">
				<h2 style="color:	#00FF00">R$ <?=$produto['preco']?></h2>
			</div>
			<?php
			//if ((isset($_SESSION["auth"]))) {

			?>
			<div class="col-lg-6">
				<a href="./carrinho/adicionar/<?=$produto['IDproduto']?>" class="btn btn-danger">Comprar</a>
			</div>
			
			<?php

//}
			?>
		</div>
	</div>

</div>