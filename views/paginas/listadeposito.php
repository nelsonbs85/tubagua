<?php

$usuario = $_SESSION['nick'];
$usuario_id = $_SESSION['id_usuario'];

require_once './controllers/ProductoController.php';
$objProducto = new ProductoController();
//var_dump($_POST);
if (isset($_POST['id'])) {
    
    $data = array(
        'id' => $_POST['id'],
        'documento' => $_POST['documento'],
        'banco' =>  $_POST['banco']
      );
      $objProducto->actualizaBoleta ($_POST['id'],$_POST['banco'], $_POST['documento']);
    
}

?>

<main role="main" class="container">

    <h1 class="align-center">Listado de Recibos:</h1>
    <form action="index.php?page=listadepositos" method="POST">
        <div class="container">
            <h5>Seleccione rango de Fechas: </h5>
            <div class="row justify-content-center">
                <div class="col">
                    <label for="startDate">Del</label>
                    <input id="startDate" name="startDate" class="form-control" type="date" />
                    
                </div>
                <div class="col">
                    <label for="endDate">Al</label>
                    <input id="endDate" name="endDate" class="form-control" type="date" />
                </div>
                <div class="col">
                    <br>
                    <button class="btn btn-primary" type="input">Buscar</button>
                </div>
            </div>
        </div>
    </form>
    <br>
    <div class="panel-body p-20">
        <div class="table-responsive">
            <table id="tsolictud" class="responsive table table-striped table-bordered display">
                <thead>
                    <th>#</th>
                    <th>Fecha</th>
                    <th>Documento</th>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Forma de Pago</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php
                    
                if (isset($_POST['startDate'])) {
                    
                    $startDate =$_POST['startDate'];
                    $endDate =$_POST['endDate'];
                    $listaPedidos = new ProductoController();
                    $pedidos = $listaPedidos->obtenerDepositos($usuario_id,$startDate, $endDate);
                        $cnt = 1;
                    while ($row = $pedidos->fetch()) {
                    ?><tr>

                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[4]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php 
                                echo $row[7]; 
                                if ($row[1]==1||$row[6]==2){?>
                                        <br>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" 
                                        data-bs-target="#exampleModal<?php echo $row[0]?>">
                                        Agregar Boleta
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal<?php echo $row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ingreso de Boleta</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <form action="index.php?page=listadepositos" method="POST">
                                                <label class="">Banco: </label>
                                                <select class=" form-control" aria-label="Default select example"
                                                 id='banco'
                                                name="banco" >
                                                <option selected value=0>Seleccione uno:</option>
                                                <?php
                                                $formaPago = $objProducto->obtenerDatos('banco_para_recibos', 'id');
                                                while ($rowb = $formaPago->fetch()) { ?>
                                                    <option value="<?php echo $rowb[0]; ?>">
                                                    <?php echo $rowb[1]; ?>
                                                    </option>
                                                <?php } ?>
                                                </select>
                                                <label>Documento: </label>
                                                <input type="number" name="documento" id="documento"
                                                 class="form-control">
                                                 <input type="hidden" name="id" id="id" value=<?php echo $row[0] ?>>

                                            
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                            </div>
                                            </form>    
                                        </div>
                                        </div>
                                        </div>
                                                             
                                <?php }?>
                            </td>
                            <td><?php echo $row[8]; ?></td>

                            <td>

                                <a class="btn btn-success"
                                    href="index.php?page=recibo&idrecibo=<?php echo $row[0] ?> &idCliente=<?php echo $row[5] ?>">Ver
                                </a>
                                <?php if ($row[6] == '0') {  ?>
                                    <a class="btn btn-warning"
                                        href="index.php?page=recibo&edit=<?php echo $row[0] ?> &idCliente=<?php echo $row[5] ?>">
                                        Editar
                                    </a>
                            </td>
                        <?php } ?>

                        </tr>
                    <?php
                        $cnt = $cnt + 1;
                    }
                }//fiin if

                    ?>
                </tbody>
            </table>
              
        </div><!-- /.row -->

    </div>
    <!-- Button trigger modal -->




    
</main><!-- /.container -->