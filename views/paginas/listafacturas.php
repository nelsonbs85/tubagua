<?php
header('Access-Control-Allow-Origin: *');

$usuario = $_SESSION['nick'];
$usuario_id = $_SESSION['id_usuario'];

require_once './controllers/ProductoController.php';
$listafacturas = new ProductoController();
$facturas = $listafacturas->obtenerFacturas();

?>
 
<main role="main" class="container">

<h1 class="align-center" >Listado de Facturas:</h1>
<div class="panel-body p-20">
    <div class="table-responsive">
    <table id="solicitud" class="responsive table table-striped table-bordered display">     
            <thead>
                <th>#</th>
                <th>Factura</th>
                <th>Fecha Pedido</th>
                <th>Cliente</th>
                <th>Total</th>
                <th>Acciones</th>
                
            </thead>
            <tbody >
                <?php 
                $cnt= 1;
                while ($row = $facturas->fetch()) {
                ?><tr>
                    <td><?php echo $cnt;?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[6];?></td>
                    <td><?php echo $row[10];?></td>
                    <td><?php echo $row[9];?></td>
                    
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
