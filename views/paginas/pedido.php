<?php
$usuario_id = $_SESSION['id_usuario'];
$usuario = $_SESSION['nick'];


require_once './controllers/ClienteController.php';
require_once './controllers/ProductoController.php';
$objCliente = new ClienteController();
$datos = new ProductoController();
$listaProductos = new ProductoController();
$productos = $listaProductos->obtenerProductos();
$disabled = '';
$getCliente = 0;
$getFecha = '';
$getEstado = 0;
$getFormaPago = 0;
$getTransporte = 0;
$getObservaciones = '';
$getDireccionEntrega = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // id index exists

    $pedidos = $datos->obtenerPedido($id);
    $tabactive = "active";
    $active = '';
    while ($row = $pedidos->fetch()) {
        $getEstado = $row[2];
        $getCliente = $row[3];
        $getFecha = $row[4];
        $getFormaPago = $row[5];
        $getTransporte = $row[10];
        $getObservaciones = $row[11];
        $getDireccionEntrega = $row[24];
    }
} else {
    $id = 0;
    $tabactive = "";
    $active = "active";
}
?>

<main role="main" class="container border">

<div class="row-2 container">
        <h2 style="text-align:center"><strong>Generar Pedido</strong></h1>
            <label for=""><strong>Búsqueda por Cliente:</strong></label>
            <form action="index.php?page=pedido" method="POST">
                <div class="input-group mb-3">
                    <div class="input-group-prepend row-2">
                        <button class="btn btn-primary" type="input">Buscar</button>
                    </div>
                    <input type="text" class="form-control" name="search"
                        placeholder="Puede buscar por Nombre Comercial, Razón Social, Referencia o NIT" aria-label=""
                        aria-describedby="basic-addon1">
            </form>
    </div>
    </div>

    <!-- busqueda de cliente -->
    <?php
    if (isset($_POST['search'])) {
        $clientesBusqueda = $objCliente->obtenerDatosClientebyDesc($_POST['search']);
    ?>
        <div class="table-responsive">
            <table id="busqueda" class="responsive table table-striped table-bordered display">
                <thead>
                    <th>Código</th>
                    <th>Nit</th>
                    <th>Razón Social</th>
                    <th>Departamento</th>
                    <th>Municipio</th>
                    <!-- <th>Total Factura</th>                       -->
                </thead>

                <tbody>
                    <?php

                    while ($row = $clientesBusqueda->fetch()) {
                        //$pendiente = $objProducto->ClienteTienePendiente($row[0]);
                        // if ($pendiente>0){
                    ?>

                        <td><?php echo $row[0]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[5]; ?></td>
                        <td><?php echo $row[6]; ?></td>


                        <td>
                            <form action="index.php?page=pedido&idCliente=<?php echo $row[0] ?>" method="POST">
                                <button type="submit" class="btn btn-success" name="btn<?php echo $row[0] ?>"
                                    id="btn<?php echo $row[0] ?>">
                                    <i class="bi bi-send"></i>
                                    <input type="hidden" name="clienteId" id="clienteId" value=<?php echo $row[0] ?>>
                                </button>
                            </form>
                        </td>
                        <tr></tr>
                    <?php }
                    //}
                    ?>
                </tbody>
        </div>
        <?php

    }
    if (isset($_GET['idCliente']) || isset($_GET['id']) > 0) {
        $idCliente = $_GET['idCliente'];
        
        $infocliente = $objCliente->obtenerDatosCliente($idCliente);

        while ($row = $infocliente->fetch()) {

        ?>

            <div class="datos" id="datos" style="display:inline">
                <label id="datosnombre" class="badge text-bg-secondary col-12">
                    <h5><?php echo $row[7]; ?></h5>
                </label>
                <br>
                <label id="datosnit" class="badge text-bg-primary">NIT: <?php echo $row[5]; ?></label>
                <br>
                <label id="datosdir" class="badge text-bg-primary">Dir. Facturación: <?php echo $row[15]; ?></label>
                <br>
                <label id="datosdepto" class="badge text-bg-primary">Departamento: <?php echo $row[43]; ?></label>
                <label id="datosmuni" class="badge text-bg-primary">Municipio:<?php echo $row[50]; ?></label>
                <label id="datoszona" class="badge text-bg-primary">Zona:<?php echo $row[16]; ?></label>
            </div>
        <?php }

        ?>
        <div class="row"><br></div>
        <form action="index.php?page=pedido-insertar" method="POST">
            <div class="row cointainer">

                <div class="col-2">
                    <label for="">Fecha: <?php echo $getFecha; ?> </label>
                </div>
                <div class="col-4">
                    <input type="date" <?php echo $disabled ?>
                        class="form-control col-2" name="fechapedido" id="fechapedido"
                        value="<?php echo $getFecha ?>">

                </div>
            </div>
            <div class="row cointainer">
                <div class="col-2">
                    <label for="">Forma de Pago</label>
                </div>
                <div class="col-6">
                    <select class=" form-control" aria-label="Default select example" name="formaPago">
                        <option selected>Forma de Pago:</option>
                        <?php
                        $formaPago = $datos->obtenerDatos('forma_de_pago', 'id');
                        while ($row = $formaPago->fetch()) { ?>
                            <option value="<?php echo $row[0]; ?>"
                                <?php echo $row[0] == $getFormaPago ? " selected " : ""
                                ?>>

                                <?php echo $row[1]; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row cointainer">
                <div class="col-2">
                    <label for="">Transporte:</label>
                </div>
                <div class="col-6">
                    <select class=" form-control" aria-label="Default select example" name="transporte">
                        <option selected>Seleccione uno:</option>
                        <?php
                        $formaPago = $datos->obtenerDatos('transporte', 'id');
                        while ($row = $formaPago->fetch()) { ?>
                            <option value="<?php echo $row[0]; ?>"
                                <?php echo $row[0] == $getTransporte ? " selected " : ""
                                ?>>
                                <?php echo $row[2]; ?></option>
                        <?php } ?>
                    </select>
                </div>


                <col class="col-4">
                <label for=""><b>Observaciones:</b></label>
                <textarea class=" form-control" name="pedidoObser" id="pedidoObser" cols="4" rows="3"><?php if ($getObservaciones) {
                                                                                                            echo $getObservaciones;
                                                                                                        } else {
                                                                                                            echo "";
                                                                                                        }; ?></textarea>
                </col>
                <col class="col-4">
                <label for=""><b>Dirección de Entrega:</b></label>
                <textarea class=" form-control" name="dirEntrega" id="dirEntrega" cols="4" rows="3"><?php echo trim($getDireccionEntrega); ?>
                        </textarea>
                </col>
            </div>
            <br>
            <?php if (!$id) { ?>
                <button type="submit" class="btn btn-success">Guardar</button>
                <input type="hidden" name="clienteId" id="clienteId" value=<?php echo $_GET['idCliente'] ?>>
            <?php } ?>
        </form>
        <br>
        </div> <!-- ingreso -->

        <div class="container row text-center ">
            <span>
                <h4>Detalle del Pedido: </h4>
            </span>
            <div class="row text-center">
                <table class="table table-responsive-sm table-bordered display">
                    <thead>
                        <th>#</th>
                        <th>Artículo</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th style="text-align:right'">Subtotal</th>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        $detalle = $datos->obtenerDetalle($id);
                        while ($det = $detalle->fetch()) { ?>
                            <td><?php echo $det[4] ?></td>
                            <td><?php echo $det[20] ?></td>
                            <td><?php echo $det[5] ?></td>
                            <td><?php echo $det[7] ?></td>
                            <td style="text-align:right"><?php echo $det[9];
                                                            $total += $det[9];
                                                            ?></td>
                            <tr>
                            <?php   }
                            ?>
                            <td>Total</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="text-align:right"><strong>
                                    <?php echo number_format((float)$total, 2, '.', '') ?>
                                </strong></td>
                    </tbody>
                </table>
            </div>

        </div>
        <br>
        <?php if ($getEstado != 6) { ?>
           
            
            <div class="row-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Agregar Producto
                </button>
            </div>
            <br>
            <div class="col-6">
                <form action="index.php?page=detalle-insertar" method="POST">
                    <button type="submit" class="btn btn-warning">Finalizar Pedido</button>
                    <input type="hidden" value=" <?php echo $id ?>" name="pedido_id" id="pedido_id">
                    <input type="hidden" value="F" name="autoriza" id="autoriza">
                </form>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content model-dialog-centered">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Listado de Artículos</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                       
                            <table id="solicitud" class="large table-responsive table-bordered display">
                                <thead>

                                    <th class="col-1">#</th>
                                    <th class="col-1">Código</th>
                                    <th>Nombre</th>
                                    <!-- <th>Marca</th> -->
                                    <!-- <th>Categoria</th> -->
                                    <!-- <th class ="col-1">Existencias</th> -->
                                    <th class="col-1">Vista</th>
                                    <th class="col-1">Agregar</th>

                                </thead>
                                <tbody>
                                    <?php
                                    $cnt = 1;
                                    while ($row = $productos->fetch()) {
                                        $path = __DIR__.'\\img';
                                        
                                    ?><tr>
                                            <td><?php echo $row[0]; ?></td>
                                            <td><?php echo $row[1]; ?></td>
                                            <td style="width: 20%"><?php echo $row[2] . " -" . $row[5]; ?></td>
                                            <!-- <td><?php echo $row[5]; ?></td> -->
                                            <!-- <td><?php echo $row[3]; ?></td> -->
                                            <!-- <td><?php echo $row[4]; ?></td> -->
                                            <!-- <td><?php echo $row[6]; ?></td> -->
                                             <!-- <?php $imagen= __DIR__ .'\img\0.jpg'?> -->
                                             <?php $imagen= './img/jpg'?>

                                             <!-- <td><?php echo "<img width='100%' height='100%' src='./assets/img/" .$row[0] .".jpg'>"?></td> -->
                                            <td><img src="./assets/img/<?php echo $row[0] .'.jpg' ?>" alt="" width='100%' height='100%' onerror="this.onerror=null; this.src='./assets/img/0.jpg'"></td>
                                            <td <?php if ($row[6] <= 0) {
                                                    echo "disabled";
                                                } else {
                                                    echo "";
                                                } ?>>
                                                <form action="index.php?page=detalle-insertar" method="POST">

                                                    <div class="row-2">
                                                        <label class="col-2" for="">Cantidad:</label>
                                                        <input require class="col-3 form-control" type="number" max="<?php echo $row[6] ?>" name="cantidad"
                                                            placeholder="Max. <?php echo $row[6] ?>">
                                                    </div>
                                                    <div class="row-2">
                                                        <label class="col-2" for="">Precio:</label>
                                                        <input class="col-3 form-control" type="number" name="precio"
                                                            placeholder="Max. <?php echo $row[7] ?>">
                                                    </div>
                                                    <div class="row-2">
                                                        <input type="hidden" value=" <?php echo $id ?>" name="pedido_id" id="pedido_id">
                                                        <input type="hidden" value="<?php echo $row[0] ?>" name="articulo_id" id="articulo_id">
                                                        <button type="submit" class="btn btn-primary">Agregar</button>
                                                    </div>
                                                </form>
                                            </td>
                                        <?php } ?>
                                        </tr>
                                </tbody>
                            </table>
                        </div><!--MODAL BODY -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div> <!-- MODAL CONTENT -->
                </div><!-- MODAL DIALOG -->
            </div><!-- MODAL FADE -->
            <!-- MODAL 2 --
                
            <?php }
    } ?>    <!-- Si no está autorizado -->
            <!-- Modal -->
</main>