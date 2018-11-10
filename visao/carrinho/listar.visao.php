<?php if(empty($produtos)) :?>

    <h1>Carrinho vazio!</h1>


<?php else: ?>

    <div class="container">
        <h2>Seu Carrinho</h2>
        <div class="panel panel-default">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>IDPRODUTO</th>
                        <th>IMAGEM</th>
                        <th>CATEGORIA</th>
                        <th>NOMEPRODUTO</th>
                        <th>PRECO</th>
                        <th>QUANTIDADE</th>
                        <!--<th>DELETAR</th> -->
                    </tr>
                </thead>

                <?php $total = 0; ?>                                        
                <?php foreach ($produtos as $produto): ?>
                    <?php

                    foreach ($_SESSION["carrinho"] as $quant) {
                        if ($produto["IDproduto"] == $quant["id"]) {
                            $quantidade = $quant["quantidade"];        
                        }
                    }
                    ?>

                    <tr>
                        <td><?=$produto["IDproduto"];?></td>
                        <td><img width="100" src="<?=$produto['imagem']?>"></td>
                        <td><?=$produto["categoria"];?></td>
                        <td><?=$produto['nome']?></td>
                        <td>R$ <?=$produto['preco'];?></td>
                        <?php 
                        if(isset($quantidade)) {
                            ?>
                            <td>
                                <form action="./carrinho/deletar/<?=$produto["IDproduto"]?>" method="POST">
                                    <select name="quantidade">
                                        <?php 
                                        for ($i = 1; $i <= $quantidade; $i++ ) { ?>
                                        <option value="<?=$i?>"> <?=$i?></option>
                                        <?php }     ?>
                                    </select>
                                    <a href="./carrinho/deletar/<?=$produto["IDproduto"]?>"><button class="btn btn-danger">Rem</button> </a>
                                </form>
                                <br>
                                    <form action="./carrinho/adicionarQuantidade/<?=$produto["IDproduto"]?>" method="POST">
                                        <select name="quantidade">
                                            <?php 
                                            for ($i = 1; $i <= $quantidade; $i++ ) { ?>
                                            <option value="<?=$i?>"> <?=$i?></option>
                                            <?php }     ?>
                                        </select>
                                        <a href="./carrinho/adicionarQuantidade/<?=$produto["IDproduto"]?>"><button class="btn btn-success">Add</button> </a>
                                        <!--<a href="./carrinho/deletar/<?=$produto["IDproduto"]?>/<?=$quantidade?>"> Remover</a> -->
                                    </form>
                                </td> 

                                <?php $total = $total + ($quantidade * $produto["preco"]);?>
                                <?php }?>
                                <!--<td><a href="./carrinho/deletar/<?=$produto["IDproduto"]?>" class="btn btn-danger">del</a></td> -->
                            </tr> 
                        <?php endforeach; ?>

                    </table> 
                </div>
                <div>
                    <h4 style="float:left;">Total: <?=$total?>,00 R$</h4>

                    <a class="btn btn-default" href="./compra" style="float:right;">
                        Continuar
                    </a>
                </form>    
            </div>
        </div>
    <?php endif; ?>






