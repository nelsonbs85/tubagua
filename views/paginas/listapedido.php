<?php
header('Access-Control-Allow-Origin: *');

$usuario = $_SESSION['nick'];
$usuario_id = $_SESSION['id_usuario'];

require_once './controllers/ProductoController.php';
$listaPedidos = new ProductoController();
$pedidos = $listaPedidos->obtenerPedidos($usuario_id);

?>
 
<main role="main" class="container">

<h1 class="align-center" >Listado de Pedidos:</h1>
<div class="panel-body p-20">
    <div class="table-responsive">
    <table id="solicitud" class="responsive table table-striped table-bordered display">     
            <thead>
                <th>#</th>
                <th>Fecha Pedido</th>
                <th>Cliente</th>
                <th>NIT</th>
                <th>Total</th>
                <th></th>
            </thead>
            <tbody >
                <?php 
                $cnt= 1;
                while ($row = $pedidos->fetch()) {
                ?><tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[4];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo 0.00?></td>
                    <td>
                    <a  class="btn btn-warning"href=" index.php?page=pedido&id=<?php echo $row[0]; ?>">Editar</a>
                    </td>
                </tr>
                <?php
                    $cnt= $cnt+1;
                  }
                
                
                ?>
            </tbody>
        </table>
    </div><!-- /.row -->
</div>

</main><!-- /.container -->
