<style type="text/css">
	.navbar-default {
    background-color: #2d0000;
    border-color: #e7e7e7;
    color: white;
}
.navbar-default .navbar-nav > li > a {
    color: #fff;
}
.navbar-default .navbar-nav > li > a:hover {
    color: #dcdcdc;
}
.navbar-default .navbar-brand {
    color: #fff;
}
</style>
<nav class="nav navbar-default ">
	<div class="navbar-header" style="border-right:solid 2px">
		<a href="./produto/index/1" class="navbar-brand">HardIF</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="./produto/index/1">Principal</a></li>
		<?php
		$usuarioLogado = pegarUsuarioLogado();
		if(!empty(($usuarioLogado))){
			//echo "<pre>";
			//$usuario = $_SESSION["auth"];
			//print_r($usuario);

			?>


			<li><a href="./usuario/visualizar/<?=@$usuarioLogado['IDUsuario']?>">Conta</a></li>

			<?php
}
			?>
			<?php
			if (!isset($_SESSION['auth'])) {



				?>
				<li><a href="./carrinho/index">Carrinho</a></li>
				<li><a href="./usuario/adicionar">Cadastro</a></li>
				<li><a href="./login/index">Login</a></li>
				<?php


			}

			?>
			<?php 
			if (isset($_SESSION['auth'])) {


				?>
				<li><a href="./carrinho/index">Carrinho</a></li>
				<li><a href="./login/logout">Logout</a></li>
				<?php }?>
			</ul>
			
			<form class="navbar-form navbar-left" action="./produto/pesquisa" method="POST">
				<div class="form-group">
					<input type="text" class="form-control" name="busca" placeholder="Procurar Produtos...">
				</div>
				<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
			</form>
		</nav>