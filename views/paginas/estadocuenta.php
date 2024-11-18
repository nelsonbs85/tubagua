<?php

$usuario = $_SESSION['nick'];

require_once './controllers/ClienteController.php';
require_once './controllers/ProductoController.php';
$objCliente = new ClienteController();
$objPedido = new ProductoController();
$clientes = $objCliente->obtenerClientes();


 if (isset($_GET['idDetalle'])) { 
    echo "  <script type='text/javascript'> 
            $(document).ready(function(){ $('#exampleModal').modal('show'); }); 
            </script>"; 
}
?>
<main role="main" class="container">

    <h1 class="align-center">Estado de Cuenta de pedidos por Cliente:</h1>
    <label>
        <h4><strong>Búsqueda por Cliente:</strong></h4>
    </label>
    <form action="index.php?page=estadocuenta" method="POST">
        <div class="input-group mb-3">
            <div class="input-group-prepend row-2">
                <button class="btn btn-primary" type="input">Buscar</button>
            </div>
            <br>
            <input type="text" class="form-control" name="x"
                placeholder="Puede buscar por Nombre Comercial, Razón Social o NIT" aria-label=""
                aria-describedby="basic-addon1">
        </div>
        <br>
    </form>
    <?php if (isset($_POST['x'])) {
        $clientesBusqueda = $objCliente->obtenerDatosClientebyDesc($_POST['x']);
        ?>

        <div class="table-responsive">
            <table id="solicitud" class="responsive table table-striped table-bordered display">
                <thead>
                    <!-- <th>#</th> -->
                    <th>Nombre Comercial</th>
                    <th>Razon Social</th>
                    <th>NIT</th>
                    <th> </th>
                    <!-- <th>Total Factura</th>                       -->
                </thead>

                <tbody>

                    <?php
                    $cnt = 0;
                    while ($row = $clientesBusqueda->fetch()) {

                        //$pendiente = $objProducto->ClienteTienePendiente($row[0]);
                        // if ($pendiente>0){
                        ?>
                        <tr>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td>
                                <form action="index.php?page=estadocuenta&idCliente=<?php echo $row[0] ?>" method="POST">
                                    <button type="submit" class="btn btn-success" name="btn<?php echo $row[0] ?>"
                                        id="<?php echo $row[0] ?>">
                                        <i class="bi bi-send"></i>
                                        <input type="hidden" name="clienteId" id="clienteId" value=<?php echo $row[0] ?>>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php

                    }
                    //} ?>
                </tbody>
            </table>
        </div>
    <?php } /*fin if post(search)*/

    if (isset($_GET['idCliente'])) {
        $idCliente = $_GET['idCliente'];
        $clientesPedido = $objCliente->obtenerListaPedidos($idCliente);
        ?>
        <div class="table-responsive">
            <table id="solicitud" class="responsive table table-striped table-bordered display">
                <thead>
                    <!-- <th>#</th> -->
                    <th># Pedido</th>
                    <th>Fecha Pedido</th>
                    <th>Estado</th>
                    <th>FormaPago</th>
                    <th>Monto</th>
                    <th>Ver Detalle</th>
                </thead>

                <tbody>
                    <tr>
                        <?php
                        while ($row = $clientesPedido->fetch()) {
                            //$pendiente = $objProducto->ClienteTienePendiente($row[0]);
                            // if ($pendiente>0){
                            ?>

                            <td><?php echo $row[0]; ?></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo number_format(round($row[5], 2), 2); ?></td>
                            <td>
                                <form id="miformulario" action="index.php?page=estadocuenta&idCliente=<?php echo $idCliente ?>&idDetalle=<?php echo $row[0] ?>" 
                                method="POST">
                                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Launch demo modal
                                </button> -->
                                    <button type="input" name="<?php echo $row[0] ?>" class="detalleInfo btn btn-success"
                                        id="<?php echo $row[0] ?>">

                                        <i class="bi bi-eye-fill btn-primary"></i>

                                    </button>
                                    <input type="hidden" name="detalleId" id="detalleId" value=<?php echo $row[0] ?>>

                                </form>

                            </td>
                        </tr>
                    <?php }
                        //} ?>
                </tbody>
            </table>
        </div>


        <!--- MODAL DETALLE DE PEDIDO -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content ">
                    <div class="modal-header">
                        <?php if (isset($_GET['idDetalle'])){
                            $idDetalle = $_GET['idDetalle'];
                            }else {
                                $idDetalle = 0; 
                            }
                        ?>

                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pedido # <?php echo $idDetalle; ?></span></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="table-responsive">
                            <table id="solicitud" class="responsive table table-striped table-bordered display">
                                <thead>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio Unit.</th>
                                    <th>Total </th>
                                </thead>
                                <tbody>

                                    <?php
                                    $detallePedido = $objPedido->obtenerDetalle($idDetalle);
                                    $totaldetalle = 0;
                                    while ($row2 = $detallePedido->fetch()) { ?>
                                        <tr>
                                            <td><?php echo $row2[20]; ?></td>
                                            <td><?php echo $row2[5]; ?></td>
                                            <td><?php echo $row2[7]; ?></td>
                                            <td><?php echo $row2[9]; ?></td>

                                            <?php

                                            $totaldetalle = $totaldetalle + $row2[9];
                                    } ?>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>

                                        <td>Total</td>
                                        <td><?php echo number_format(round($totaldetalle, 2), 2) ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- FIN MODAL DETALLE DE PEDIDO -->
      
    <?php } ?>
