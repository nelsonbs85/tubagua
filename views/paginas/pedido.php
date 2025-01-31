<?php
$usuario_id = $_SESSION['id_usuario'];
$usuario = $_SESSION['nick'];



require_once './controllers/ClienteController.php';
require_once './controllers/ProductoController.php';
 $objCliente = new ClienteController();
 $datos= new ProductoController();
 $listaProductos = new ProductoController();
 $productos = $listaProductos->obtenerProductos();

 $getCliente = 0;
 $getFecha = '';
 $getEstado =0;
 $getFormaPago = 0;
 $getTransporte = 0;
 $getObservaciones = '';
 $getDireccionEntrega = '';

 if(isset($_GET['id'])) {
    $id = $_GET['id'];
    // id index exists
    $pedidos = $datos->obtenerPedido($id);
    
    while ($row = $pedidos->fetch()) {
        $getEstado =$row[2];
        $getCliente = $row[3];
        $getFecha = $row[4];
        $getFormaPago = $row[5];
        $getTransporte = $row[10];
        $getObservaciones = $row[11];
        $getDireccionEntrega = $row[24];
    }
    } else {
    $id = 0;
    
    }
?>

<main role="main" class="container border">
    
    <!-- tabs -->
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-ingreso" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Ingreso</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-detalle" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Detalle</button>
            <!-- <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Autoriza</button> -->
        </div>
    </nav>
    <!-- tabs -->
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-ingreso" role="tabpanel" aria-labelledby="nav-home-tab">
            <div  class="row-2">
                <h3 align="center">INGRESAR PEDIDO</h3>
            </div>
            <form action="index.php?page=pedido-insertar" method="POST">
                <div class ="row cointainer">
                    <div class ="col-2">
                        <label for="">Cliente: </label>
                    </div>
                    <div class ="col-6">    
                        <select class="form-control" aria-label="Default select example" name ="clienteId">
                            <option selected>Selecione un cliente:</option>
                            <?php  
                                $clientes = $objCliente->listarClientes();
                                while ($row = $clientes->fetch()) {
                            ?>
                            <option value="<?php echo $row[0];?>"
                                <?php echo $row[0]==$getCliente?" selected ":""
                                ?>>                        
                            <?php echo $row[7];?></option>
                                <?php }?>
                        </select>
                    </div>
                    <div class ="col-4">
                        <label for="">Fecha: <?php echo $getFecha;?> </label>
                    </div>
                </div> 
                <div class ="row cointainer">
                    <div class ="col-2">
                        <label for="">Forma de Pago</label>
                    </div>
                    <div class ="col-6">    
                        <select class=" form-control" aria-label="Default select example" name="formaPago">
                        <option selected>Forma de Pago:</option>
                        <?php  
                            $formaPago = $datos->obtenerDatos('forma_de_pago','id');
                            while ($row = $formaPago->fetch()) {?>
                            <option value="<?php echo $row[0];?>"
                                <?php echo $row[0]==$getFormaPago?" selected ":""
                                ?>>  
                                
                            <?php echo $row[1];?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class ="row cointainer">
                    <div class ="col-2">
                        <label for="">Transporte:</label>
                    </div>
                    <div class ="col-6">    
                        <select class=" form-control" aria-label="Default select example" name="transporte">
                        <option selected>Seleccione uno:</option>
                        <?php  
                            $formaPago = $datos->obtenerDatos('transporte','id');
                            while ($row = $formaPago->fetch()) {?>
                            <option value="<?php echo $row[0];?>"
                                <?php echo $row[0]==$getTransporte?" selected ":""
                                ?>>  
                            <?php echo $row[2];?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row container">
                    <col class="col-4">
                        <label for="">Observaciones:</label>
                        <textarea name="pedidoObser" id="pedidoObser" cols="4" rows="3" ><?php if($getObservaciones){
                                                                                                  echo $getObservaciones;                  
                        }else {echo "";}; ?></textarea>
                    </col>
                    <col class="col-4">
                        <label for="">Dirección Entrega:</label>
                        <textarea name="dirEntrega" id="dirEntrega" cols="4" rows="3"><?php echo trim($getDireccionEntrega); ?>
                        </textarea>
                    </col>
                </div>
                <br>
                <?php if (!$id){?>
                <button type="submit" class="btn btn-success">Guardar</button>
                <?php }?>
            </form>
            <br>
        </div>    <!-- ingreso -->
        <div class="tab-pane fade" id="nav-detalle" role="tabpanel" aria-labelledby="nav-home-tab">
           <div class = "container row text-center ">
                <span><h4>Detalle del Pedido: </h4></span>  
                <div class="row text-center">
                    <table  class="small table-responsive-sm table-bordered display">     
                        <thead>
                            <th>#</th>
                            <th>Artículo</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th style="text-align:right'">Subtotal</th>
                        </thead>
                        <tbody>
                            <?php 
                            $total =0;
                                $detalle = $datos->obtenerDetalle($id); 
                                while ($det = $detalle->fetch()) { ?>
                                <td><?php echo $det[4]?></td>
                                <td><?php echo $det[20]?></td>
                                <td><?php echo $det[5]?></td>
                                <td><?php echo $det[7]?></td>
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
                                <?php echo number_format((float)$total,2,'.','') ?>
                                </strong></td>
                        </tbody>
                    </table>
                </div>
                
            </div>
            <br>
            <?php if ($getEstado!=7) { ?>
                <div class="col-6">
                        <form action="index.php?page=detalle-insertar" method="POST">
                                <button type="submit" class="btn btn-warning">Finalizar Pedido</button>
                                <input   type  ="hidden" value =" <?php echo $id?>" name="pedido_id" id ="pedido_id" >
                                <input   type  ="hidden" value ="F" name="autoriza" id ="autoriza" >
                        </form>
                </div>
                <br>
                <div class="row-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Agregar Producto
                    </button>
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
                                        <th class ="col-1">Código</th>
                                        <th>Nombre</th>
                                        <!-- <th>Marca</th> -->
                                        <!-- <th>Categoria</th> -->
                                        <!-- <th class ="col-1">Existencias</th> -->
                                        <th class ="col-1">Agregar</th>

                                    </thead> 
                                    <tbody >
                                        <?php 
                                        $cnt= 1;
                                        while ($row = $productos->fetch()) {

                                        ?><tr>
                                        <td><?php echo $row[0];?></td>
                                        <td><?php echo $row[1];?></td>
                                        <td style="width: 20%"><?php echo $row[2] ." -" .$row[5];?></td>
                                        <!-- <td><?php echo $row[5];?></td> -->
                                        <!-- <td><?php echo $row[3];?></td> -->
                                        <!-- <td><?php echo $row[4];?></td> -->
                                        <!-- <td><?php echo $row[6];?></td> -->
                                        <td <?php if ($row[6]<=0){ echo "disabled";}else { echo "";}?>>
                                        <form action="index.php?page=detalle-insertar" method="POST">
                                            
                                                <div class="row-2">
                                                    <label class="col-2" for="">Cantidad:</label>
                                                    <input require class="col-3 form-control" type="number" max= "<?php echo $row[6] ?>" name="cantidad"
                                                    placeholder = "Max. <?php echo $row[6] ?>">
                                                </div>
                                                <div class="row-2"> 
                                                    <label class="col-2" for="">Precio:</label>
                                                    <input class="col-3 form-control" type="number" name="precio" 
                                                    placeholder = "Max. <?php echo $row[7] ?>"
                                                    >
                                                </div>            
                                                <div class="row-2">                          
                                                    <input   type  ="hidden" value =" <?php echo $id?>" name="pedido_id" id ="pedido_id" >
                                                    <input   type  ="hidden" value ="<?php echo $row[0]?>" name="articulo_id" id ="articulo_id" >
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
                
            <?php }?>    <!-- Si no está autorizado -->
            <!-- Modal -->       
        </div> <!-- tab detalle del pedido -->
        
    </div>
</main>