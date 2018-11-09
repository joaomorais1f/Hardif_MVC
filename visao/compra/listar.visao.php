<style type="text/css">
.form-control{
	display: inline;
	width: 50%;
}
</style>


<?php if(empty($produtos)) : ?>
	<h4>
		vazio
	</h4>
	<?php else: $tot=null; $quant=null; $totpag=null; $frete=null; $desc=null; $total =null; $v?>


		<div style="margin-top:5%;" class="container">
			<div class="container-fluid">
				<div class="row">

					<div class="col-md-12" >
						<?php foreach ($produtos as $produto):?>
							<?php

							foreach ($_SESSION["carrinho"] as $prod) {
								if ($produto["IDproduto"] == $prod["id"]) {
									$quantidade = $prod["quantidade"]; 
									$quant+= $prod["quantidade"];     
								}
								$total += $quantidade;
							}


							?>
							<div class="col-md-12" style="border-bottom:1px solid lightgray"><img width="10%;" src="<?=$produto['imagem'];?>">
								<P style="display: inline;"><strong> <?=$produto["nome"];?></strong> </P>
								<p style="display: inline; color:#00DD00; margin-left: 15%;">	R$ <?=$produto["preco"]//*$produto["quantidade"]?></p>
								<p style="display: inline; margin-left:15%;"><?=$quantidade?></p>
								<br> <p style="color: white;">.</p></div>
								<?php
								$tot+=$produto['preco'] * $quantidade;
								?>
							<?php endforeach; ?>
						</div>
						<div class="col-md-6 col-md-offset-3" style="background-color: red; margin-top:1%;">
							<center><h4 style="color: white"><strong>DADOS CLIENTE</strong></h4></center>
						</div>
						



<?php
	$frete = $valorFrete;

?>

						<div class="col-md-6 col-md-offset-3">
							<br>


							<div class="col-md-12"><p style="display:inline">Nome</p><p style=" display:inline;float:right;"><?=$usuario["nome"]?></p></div>
							<br>
							<br>
							<div class="col-md-12"><p style="display:inline">Endereco</p><p style="display: inline; float: right;"><?=$usuario["endereco"]?></p></div>
							<br>
							<br>
							<div  class="col-md-12" style=""><p style="display:inline">CEP</p><p style="display: inline; float: right;"><?=$usuario["CEP"]?></p></div>
							<br>
							<br>
							<div  class="col-md-12" style="border-bottom:1px solid black"><p style="display:inline">Cidade/Estado</p><p style="display: inline; float: right;"><?=$usuario["cidade"]." - ".$usuario["estado"]?></p></div>
						</div>

						
						<?php
						if(empty($cupons)) { ?>
							<div class="col-md-12" style="text-align: center;"><h3>  </h3> </div>
							<?php 
							$desconto = 0;
						}else{ ?>
							<div  class="col-md-12" style=""><p style="display:inline">CUPOM ENCONTRADO</p><p style="display: inline; float: right;"><?=$cupons["cupom"]?></p></div>

							<div  class="col-md-12" style=""><p style="display:inline">DESCONTO</p><p style="display: inline; float: right;"><?=$cupons["desconto"]."%"?></p></div>
							<?php 
							$desconto = $tot * ($cupons["desconto"]/100);
							$tot = $tot - $desconto + $frete;

						}

						?>
						<div class="col-md-6 col-md-offset-3" style="background-color: red; margin-top:1%;">
							<center><h4 style="color: white"><strong>TOTAL A PAGAR</strong></h4></center>
						</div>
						<div class="col-md-6 col-md-offset-3">
							<br>
							<div class="col-md-12"><p style="display:inline">Quantidade de produtos</p><p style=" display:inline;float:right;"><?=$quant;?></p></div>
							<br>
						<!--<br>
						<div  class="col-md-12"><p style="display:inline">Frete</p><p style="display: inline; float: right;">R$</p></div>
						<br> -->
						<br>
						<div  class="col-md-12" style=""><p style="display:inline">Subtotal</p><p style="display: inline; float: right;"> <?=$total;?></p></div>
						<div  class="col-md-12" style=""><p style="display:inline">Desconto Cupom</p><p style="display: inline; float: right;">R$ <?=$desconto;?></p></div>
						<div  class="col-md-12" style="border-bottom:1px solid black"><p style="display:inline">Frete</p><p style="display: inline; float: right;">R$ <?=$frete;?></p></div>
						<div class="col-md-12">
							<h4><strong>Total a Pagar:<br>	 <?=$tot;?></strong></h4> <!-- MUDAR VARIAVEL -->
						</div>
					</div>

				</div>

				<div class="col-md-6 col-md-offset-3">
					<form action="./compra" method="POST">
						<center><label for="desconto">Cupom de Desconto</label>
							<input class="form-control" type="text" name="cupom"></center>

							<center><button style="margin-top:1%;" class="btn btn-success">Validar cupom</button></center>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form action="" method="">
							<div class="col-md-4">
								<center><label for="cart"><img width="100px" src="./publico/imagens/cartao.png"><br>
								Cartão de Crédito</label><br>
								<input type="radio"  name="pagar" id="cart">
							</center>
						</div>
						<div class="col-md-4">
							<center><label for ="pag"><img width="100px" src="./publico/imagens/PagSeguro.png"><br>
							PagSeguro</label><br>
							<input type="radio"  name="pagar" id="pag"></center>
						</div>
						<div class="col-md-4">
							<center><label for ="boleto"> <img width="100px" src="./publico/imagens/boleto.png"><br>
							Boleto</label><br>
							<input type="radio" name="pagar" id="boleto"></center>
						</div>
					</form>

					<center><button type="button" class="btn btn-success" style="margin-top:5%;">
						Finalizar Compra
					</button></center>
				</div>	
			</div>


		</div>

		<?php endif; ?>