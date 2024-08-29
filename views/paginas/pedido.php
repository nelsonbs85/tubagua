<?php
$usuario_id = $_SESSION['id_usuario'];
$usuario = $_SESSION['nick'];

require_once './controllers/ClienteController.php';
require_once './controllers/ProductoController.php';
 $objCliente = new ClienteController();
 $datos= new ProductoController();
 
 $getCliente = 0;
 $getFecha = '';
 $getFormaPago = 0;
 $getTransporte = 0;
 $getObservaciones = '';
 $getDireccionEntrega = '';

 if(isset($_GET['id'])) {
    // id index exists
    $id = $_GET['id'];
    $pedidos = $datos->obtenerDatosbyId('pedido','id',$id);
    while ($row = $pedidos->fetch()) {
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
    <!-- <div class="row-2" style="height: 100px;"></div> -->
    <div class="row-2">
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
                <textarea name="pedidoObser" id="pedidoObser" cols="4" rows="3" ><?php echo trim($getObservaciones); ?>
                </textarea>
            </col>
            <col class="col-4">
                <label for="">Dirección Entrega:</label>
                <textarea align="left"name="dirEntrega" id="dirEntrega" cols="4" rows="3"><?php echo trim($getDireccionEntrega); ?>
                </textarea>
            </col>
        </div>
        <br>
        <?php if (!$id){?>
        <button type="submit" class="btn btn-success">Guardar</button>
        <?php }else{?>
    </form>
    <br>
    
    <span><h4>Detalle del Pedido: </h4></span>
    <div class="table-responsive">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Articulo</th>
            <th scope="col">Precio </th>
            <th scope="col">Cantidad</th>
            <th scope="col">Total</th>
            </tr>
        </thead>
        </table>  
    </div>
    <?php }?>
</main>