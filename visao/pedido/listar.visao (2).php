<?php if(empty($pedidos)) :?>

	<h1>Você não realizou nenhum pedido!</h1>


<?php else: ?>
	<?php


	?>
	<?php
//echo "<h1>Você realizou um pedido, obrigado</h1>";
	?>
	<div class="container">
		<h2>PEDIDOS</h2>
		<div class="panel panel-default">
			<table class="table">
				<thead class="thead-dark">
					<tr>

						<th>Número do Pedido</th>
						<th>Data do pedido</th>
						<th>Total</th>
					</tr>
				</thead>




				<tr>

					<td><?=$pedidos_realizados["IDpedido"];?></td>
					<td><?=$pedidos_realizados['data_pedido'];?></td>
					<td><?=$pedidos_realizados["total"];?></td>	
				</tr> 


			</table> 
		</div>
	</div>
		<div class="container">
		<h2>Produtos Pedidos</h2>
		<div class="panel panel-default">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						
						<th>Imagem</th>
						<th>Nome do Produto</th>
						<th>Quantidade</th>
					</tr>
				</thead>
				
				
				
				<?php foreach ($produtos_comprados as $produto) :?>
				<tr>
					
					<td><img width="100" src="<?=$produto['imagem']?>"></td>
					<td><?=$produto['nome'];?></td>
					<td><?=$produto["quantidade"];?></td>	
				</tr> 
				<?php endforeach;?>
				
			</table> 
		</div>
	</div>

<?php endif; ?>






