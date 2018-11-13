<?php if(empty($cupons)) :?>

    <h1>Sem cupons!</h1>


    <?php else: ?>

        <div class="container">
            <h2>CUPONS</h2>
            <div class="panel panel-default">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>IDCUPOM</th>
                            <th>NOME</th>
                            <th>DESCONTO</th>
                            <th>EDITAR</th>
                            <th>DELETAR</th>
                        </tr>
                    </thead>
                 
     
                    <?php foreach ($cupons as $cupom): ?>

                
                        <tr>
                            <td><?=$cupom["IDcupom"];?></td>
                            <td><?=$cupom["cupom"];?></td>
                            <td><?=$cupom['desconto']?></td>
                            <td><a href="./cupom/editar/<?=$cupom["IDcupom"]?>" class="btn btn-danger">edit</a></td>
                            <td><a href="./cupom/deletar/<?=$cupom["IDcupom"]?>" class="btn btn-danger">del</a></td>
                        </tr> 
                    <?php endforeach; ?>
                    
                </table> 
            </div>
        </div>
    <?php endif; ?>






