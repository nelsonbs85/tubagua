<?php
$usuario_id = $_SESSION['id_usuario'];
$usuario = $_SESSION['nick'];
$datos = new ProductoController();
$detalle = false; 
require_once './controllers/ProductoController.php';
require_once './controllers/ClienteController.php';
// if(isset($_GET['id'])) {
//   $id = $_GET['id'];
// }else {
//  $id= null;
// }


$objCliente = new ClienteController();
 $datos = new ProductoController();
 $listaPedidos = new ProductoController();
 var_dump($_POST);
if (isset($_POST['clienteId'])){
    $data = array(
        'usuario_id' =>$usuario_id,
        'status' => 1,
        'fecha_asignado' => date("Y-m-d"),
    );
    
  $id = $datos->insertarRecibo($data);
  $cliente = $_POST['clienteId'];
  $getFormaPago=$_POST['formaPago'];
  $getDocumento =$_POST['documento'];
  $pedidos = $listaPedidos->obtenerFacturasbyCliente($_POST['clienteId']);
  $detalle = $listaPedidos->obtenerDetalleRecibobyId($id);
}else {
$id = '';
$getFormaPago="";
$cliente ="";
$getDocumento =0;

}
 


?>

<main role="main" class="container">
  <h2>Generación de Recibo</h2>  
  <form action="index.php?page=recibo" method="POST">
  <div class="row-2">
    <label>Documento: </label>
    <input type="number" name="documento" class="form-control" value="<?php 
      if ($getDocumento>0){ echo $getDocumento;}
    ?>" >
    <label class="">Forma de Pago: </label>
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
    <label for="">Cliente: </label>
    <select class="form-control" aria-label="Default select example" name ="clienteId" id ="clienteId" >
        <option selected>Selecione un cliente:</option>
        <?php  
            $clientes = $objCliente->listarClientes();
            while ($row = $clientes->fetch()) {
        ?>
        <option value="<?php echo $row[0];?>"
            <?php echo $row[0]==$cliente?" selected ":""
            ?>>                        
        <?php echo $row[7];?></option>
            <?php }?>
    </select>
    <br>
    
    <button type="submit" class="btn btn-success">Guardar</button>
    <input type  ="hidden" value ="Y" name="nuevo" id ="nuevo" > 

  </div>
</form>
<?php if($id) {?>
  <div class="row-2">
    <br>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Agregar Facturas: 
    </button>
    <br>
    <br>
      <!-- Button trigger modal -->
        <div class="table-responsive">
                  <table id="detalleRecibo" class="responsive table table-striped table-bordered display">     
                    <thead>
                        <th>Sel.</th>
                        <th>Factura</th>
                        <th>Fecha Pedido</th>
                        <th>Cliente</th>
                        <th>Total</th>
                        
                    </thead>
                    <tbody >
                        <?php 
                        $cnt= 1;
                        while ($row = $detalle->fetch()) {
                        ?><tr>
                            <td>
                            <button type="button" class="btn btn-success">
                            <i class="bi bi-plus-square-fill"></i>
                            </button>
                            </td>
                            <td><?php echo $row[1] ." " .$row[2];?></td>
                            <td><?php echo $row[6];?></td>
                            <td><?php echo $row[10];?></td>
                            <td><?php echo $row[9];?></td>
                            
                        </tr>
                        <?php
                            $cnt= $cnt+1;
                          }           
                        ?>
                    </tbody>
                  </table>
        </div><!-- /.table responsible detalle recibo -->
  </div>  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Facturas a cancelar:
           <?php $_POST['clienteId'] ?> </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <br>
      
      <div class="modal-body">
          <div class="panel-body p-20">
            <div class="table-responsive">
              <table id="solicitud" class="responsive table table-striped table-bordered display">     
                <thead>
                    <th>Sel.</th>
                    <th>Factura</th>
                    <th>Fecha Pedido</th>
                    <th>Cliente</th>
                    <th>Total</th>
                    
                </thead>
                <tbody >
                    <?php 
                    $cnt= 1;
                    while ($row = $pedidos->fetch()) {
                    ?><tr>
                        <td>
                        <button type="button" class="btn btn-success">
                        <i class="bi bi-plus-square-fill"></i>
                        </button>
                        </td>
                        <td><?php echo $row[1] ." " .$row[2];?></td>
                        <td><?php echo $row[6];?></td>
                        <td><?php echo $row[10];?></td>
                        <td><?php echo $row[9];?></td>
                        
                    </tr>
                    <?php
                        $cnt= $cnt+1;
                      }
                    
                    
                    ?>
                </tbody>
              </table>
            </div><!-- /.row -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- <script>
$(document).ready(function () {
    $(".btn-primary").click(function () {
        let info = document.getElementById("clienteId").value;
       // $('.modal-body').html(info);
        //console.log(info);
    });
});
</script> --><?php  }?>
</main>