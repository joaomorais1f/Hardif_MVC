<?php
$estados = array("AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MG","MS","MT","PA","PB","PE","PI","PR","RJ","RN","RO","RR","RS","SC","SE","SP","TO");
?>

<div class="container">
    <h2>Pedidos por Municipio</h2>
    <form method="POST" action="">
        <input type="text" name="Municipio" class="form-control">
        <center><button type="submit" class="btn btn-primary">Buscar</button></center>

    </form>
    <div class="panel panel-default">
        <table class="table">
            <thead class="thead-dark">
                <tr>

                    <th>Nº do pedido</th>
                    <th>Data do pedido</th>
                    <th>Valor do pedido</th>

                </tr>
            </thead>


            <?php
            if (!empty($pedidosMunicipio)) {  
               foreach ($pedidosMunicipio as $pedido) { ?>
                <tr>
                    <td><?=$oedido["IDpedido"];?> </td>
                    <td><?=$oedido["data_pedido"];?> </td>
                    <td><?=$oedido["total"];?> </td>

                </tr> 
                <?php 
            } 
        } ?>

    </table> 
</div>
<div>


    <h2>Pedidos por Estado</h2>
    <form method="POST" action="">
        <select name="estado" class="form-control">
            <?php for ($i = 0; $i < count($estados); $i++) {
                ?>
                ESTADOS:<option value="<?=$estados[$i]?>"><?=$estados[$i];?></option>
            <?php  } ?>
        </select>

  <center><button type="submit" class="btn btn-primary">Buscar</button></center>
    </form>
    <div class="panel panel-default">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Nº do pedido</th>
                    <th>Data do pedido</th>
                    <th>Valor do pedido</th>

                </tr>
            </thead>

            <?php
            if (!empty($pedidosEstado)) {  
               foreach ($pedidosEstado as $pedido) { ?>
                <tr>
                    <td><?=$pedido["IDpedido"];?> </td>
                    <td><?=$pedido["data_pedido"];?> </td>
                    <td><?=$pedido["total"];?> </td>

                </tr> 
                <?php 
            } 
        } ?>

    </table> 
</div>


</div>

<h2>Pedidos por Intervalo de tempo</h2>
<form method="POST" action="">
    <input type="date" name="dtInicio" class="form-control">
    <br>
    <input type="date" name="dtFim" class="form-control">
    <center><button type="submit" class="btn btn-primary">Buscar</button></center>

</form>
<div class="panel panel-default">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Nº do pedido</th>
                <th>Data do pedido</th>
                <th>Valor do pedido</th>

            </tr>
        </thead>
        <?php if(!empty($pedidosPorData)) {
            foreach ($pedidosPorData as $pedido) { ?>
                <tr>
                    <td><?=$pedido["IDpedido"];?> </td>
                    <td><?=$pedido["data_pedido"];?> </td>
                    <td><?=$pedido["total"];?> </td>

                </tr> 
                <?php
            } 
        } 

        ?>
    </table> 
</div>


</div>




