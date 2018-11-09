<br>
<?php
if(empty($produtos)) {
	echo "Nao existe produtos!";
	echo "<pre>";
	print_r($produtos);
}
?>
<?php
if (!isset($pagina)) {
	$pagina = 1;
} else {
$pagina = $pagina;
}
$quantidade_pagina = $quantidade_pagina;
$numero_paginas = ceil($total/$quantidade_pagina);
?>



<?php foreach ($produtos as $produto): ?>
	<center><div class="col-lg-4 col-md-3">
	<br>
	<br>

		<img width="50%;" src="<?=$produto['imagem'];?>"> 
		<h5><?=$produto["nome"];?></h5>
		<p style="color:#00DD00;">R$<?=$produto['preco']?></p>
		<div class="col-md-12"><a href="./produto/visualizar/<?=$produto['IDproduto']?>" class="btn btn-Success">Ver</a>
		<?php
		if (isset($_SESSION['auth']) && ($_SESSION["auth"]["role"] == "admin")){

			?>
			<a href="./produto/editar/<?=$produto['IDproduto']?>" class="btn btn-info">Editar</a></div>
			<a style="margin-top:2%;" href="./produto/deletar/<?=$produto['IDproduto']?>" class="btn btn-danger">Deletar :c</a>
			<p style="font-size:10px;">Código: <?=$produto["IDproduto"];?></p>
			<?php
		} else {
		?>
		<p style="font-size:10px;">Código: <?=$produto["IDproduto"];?></p>
		<?php } ?>
	</div></center>


<?php endforeach; ?>
			<?php
				//Verificar a pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
			?>
		<div class="col-md-12">
			<nav class="text-center">
				<ul class="pagination">
					<li>
						<?php
						if($pagina_anterior != 0){ ?>
							<a href="./produto/index/<?=$pagina_anterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&laquo;</span>
					<?php }  ?>
					</li>
					<?php 
					//Apresentar a paginacao
					for($i = 1; $i < $numero_paginas + 1; $i++){ ?>
						<li><a href="./produto/index/<?=$i; ?>"><?=$i; ?></a></li>
					<?php } ?>
					<li>
						<?php
						if($pagina_posterior <= $numero_paginas){ ?>
							<a href="./produto/index/<?=$pagina_posterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&raquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&raquo;</span>
					<?php }  ?>
					</li>
				</ul>
			</nav>
		</div>

<center><div class="col-md-12">
<br>

<?php if (isset($_SESSION["auth"]) && ($_SESSION["auth"]["role"]) == "admin") {  ?>


<a href="./produto/adicionar" class="btn btn-default"><strong>Adicionar novo Produto</strong></a>
<a href="./cupom/adicionar" class="btn btn-default"><strong>Adicionar novo Cupom</strong></a>
<?php } ?>

</div></center>
