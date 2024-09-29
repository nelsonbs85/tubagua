<?php
$usuario_id = $_SESSION['id_usuario'];
$usuario = $_SESSION['nick'];
$datos = new ProductoController();
$detalle = false; 
$disabled = "";
require_once './controllers/ProductoController.php';
require_once './controllers/ClienteController.php';

 $objCliente = new ClienteController();
 $datos = new ProductoController();
 $recibos = new ProductoController();
 
 $infocliente = ($objCliente->obtenerDatosClientes());
// $datoscliente =array($infocliente);

 if (isset($_POST['finaliza'])){ 
  $recibo = $recibos->finalizaRecibo($_GET['id']);
}
 if (isset($_POST['clienteId'])){
    $data = array(
        'usuario_id' =>$usuario_id,
        'status' => 1,
        'fecha_asignado' => date("Y-m-d"),
    );
  $id = $datos->insertarRecibo($data);  
  $disabled = " disabled ";
  $cliente = $_POST['clienteId'];
  $getFormaPago=$_POST['formaPago'];
  $getDocumento =$_POST['documento'];   
  $getBanco = $_POST['banco_para_recibos_id'];
  $getFechaRecibo = $_POST['fechaRecibo'];
}else {
  $id = 0;
  $getFormaPago=0;
  $cliente =0;
  $getDocumento =0;
  $getBanco = 0;
  $getFechaRecibo ="";
}

if(isset($_GET['id'])) {  
  $disabled = " disabled ";
  $id =$_GET['id'];
  $recibo = $recibos->obtenerRecibosbyId($_GET['id']);
  
    while ($row = $recibo->fetch()) {
      $getFormaPago=$row[7];
      $cliente =$row[8];
      $getDocumento =$row[3];
      $getEstado = $row[9];
      $getBanco = $row[10];
      $getFechaRecibo = $row[1];
    }  

}


$pedidos = $recibos->obtenerFacturasbyCliente($cliente);
?>

<main role="main" class="container">
  <h2>Generación de Recibo</h2>  
  <form action="index.php?page=recibo" method="POST">
  <div class="row-2">
  <label class="">Forma de Pago: </label>
    <select class=" form-control" onchange="mostrar()" aria-label="Default select example"
     name="formaPago" id="formaPago" <?php echo $disabled?> >
      <option selected>Forma de Pago:</option>
      <?php  
          $formaPago = $datos->obtenerDatos('forma_de_pago','id');
          while ($row = $formaPago->fetch()) {
            if($row[0]<6) {?>
          <option value="<?php echo $row[0];?>"
              <?php echo $row[0]==$getFormaPago?" selected ":""
              ?>>  
          <?php echo $row[1];?></option>
          <?php }
          } ?>
    </select>
    <script>
      function mostrar(){
        var formapago = document.getElementById('formaPago').value;
        if (formapago==1){
          document.getElementById('otros').style.display ="none";
        }else{
          document.getElementById('otros').style.display ="inline";
        }
      }
    </script>
  <?php if ($getFormaPago!=1){?>
   <div id= "otros">
    <label class="">Banco: </label>
    <select class=" form-control" aria-label="Default select example" id = 'banco_para_recibos_id'
    name="banco_para_recibos_id" <?php echo $disabled?> >
      <option selected>Seleccione uno:</option>
      <?php  
          $formaPago = $datos->obtenerDatos('banco_para_recibos','id');
          while ($row = $formaPago->fetch()) {?>
          <option value="<?php echo $row[0];?>"
              <?php echo $row[0]==$getBanco?" selected ":""
              ?>>  
              
          <?php echo $row[1];?></option>
          <?php } ?>
    </select>
    <label>Documento: </label>
    <input type="number" name="documento" id="documento" class="form-control" 
    value="<?php 
      if ($getDocumento>0){ echo $getDocumento;}else{echo 0;}
      
    ?>" <?php echo $disabled?>  >
 </div> <!-- div condicion de efectivo -->     
 <?php }else{ 
$getDocumento=0;
$getBanco=0;

  } ?>
    <label for="">Fecha: </label>
    <input type="date" class="form-control col-2"<?php echo $disabled?> name ="fechaRecibo" id ="fechaRecibo" value="<?php echo $getFechaRecibo ?>">
    <label for="">Cliente: </label>
    <select class="form-control" onchange="infoclientes()" 
    aria-label="Default select example"<?php echo $disabled?>  name ="clienteId" id ="clienteId" >
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
  <?php   
    while ($row = $infocliente->fetch()) {
  ?>
<div class="datos" id="datos<?php echo $row[0];?>" style="display:none">
        <label class="badge text-bg-primary">NIT: <?php echo $row[5]; ?></label>
          <br>
          <label class="badge text-bg-primary">Nombre Comercial: <?php echo $row[7]; ?></label>
          <br>
          <label class="badge text-bg-primary">Dir. Facturación: <?php echo $row[15]; ?></label>
          <br>
          <label class="badge text-bg-primary">Departamento: <?php echo $row[43]; ?></label>
          <label class="badge text-bg-primary">Municipio:<?php echo $row[50]; ?></label>
          <label class="badge text-bg-primary">Zona:<?php echo $row[16]; ?></label>    
</div>
 <?php 
 }
?>
    <br>
  <?php if(($id==0)) {?>    
    <button type="submit" class="btn btn-success">Guardar</button>
    <input type  ="hidden" value ="Y" name="nuevo" id ="nuevo" > 
    <?php }?>    
  </div>
</form>
<?php if( $id>0) {?>    
  <?php if ((isset($getEstado))&&($getEstado==7)) { 
        $visible = "style=display:none";
        $disabled= "disabled";
        ?>
       <a class="btn btn-primary" target="_blank" href="index.php?page=recibopdf&id=<?php echo $id; ?>"
        role="button">
        <i class="bi bi-printer"></i>   
            Imprimir
        </a>
        <?php 
       }else {
        $visible="";
        
       }?>
  <div class="row">
    <br><form action="index.php?page=recibo&id=<?php echo $id ?>" method="POST">
          <button type="button" class=" col-2 btn btn-primary" <?php echo $visible?> data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Facturas: 
          </button>
          
              <button type="input" class="btn btn-danger" <?php echo $visible?>>
                Finalizar 
              </button> 
              <input type  ="hidden" name="finaliza" value="true">
          </form>
          <?php } //si el estado = 7?>    
    
    <br>
    <br>
    <?php if (isset($_GET['id'])){ ?>
      <!-- Button trigger modal -->
        <div class="table-responsive">
                  <table id="detalleRecibo" class="responsive table table-striped table-bordered display">     
                    <thead>
                        <th>#</th>
                        <th>Factura</th>
                        <th>Fecha Pedido</th>
                        <th>Monto</th>                      
                    </thead>
                    <tbody >
                        <?php 
                        $cnt= 1;
                        $montototal = 0; 
                        $detalle = $recibos->obtenerDetalleRecibobyId($id);
                        while ($row = $detalle->fetch()) {
                        ?><tr>
                            <td><?php echo $cnt; ?> </td>
                            <td><?php echo $row[0] ." " .$row[1];?></td>
                            <td><?php echo $row[2];?></td>
                            <td align="right"><?php echo number_format(round($row[4],2),2);?></td>                          
                        </tr>
                        <?php
                            $cnt= $cnt+1;
                            $montototal+= $row[4];
                          }           
                        ?>
                        <td><strong>Total:</strong></td>
                        <td></td>
                        <td></td>
                        <td align="right"><strong>
                          <?php echo number_format(round($montototal,2),2);?>
                        </strong></td>
                    </tbody>
                  </table>
        </div><!-- /.table responsible detalle recibo -->
        <?php  }?>  
  </div>  
  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Facturas a cancelar:
           <?php $cliente ?> </h1>
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
                      <form action="index.php?page=recibo-insertar" method="POST">                          
                        <button type="submit" class="btn btn-success" name = "btn<?php echo $row[0]  ?>" id = "btn<?php echo $row[0] ?>" >
                        <i class="bi bi-plus-circle-dotted"></i>
                        <input  type  ="hidden" name="recibo_id" id ="recibo_id" value =<?php echo $id ?>>
                            <input  type  ="hidden" name="documento" id ="documento" 
                            value ="<?php echo $getDocumento ?>" >
                            <input  type  ="hidden" name="fechaRecibo" id ="fechaRecibo"value =<?php echo $getFechaRecibo ?> >
                            <input  type  ="hidden" name="monto" id ="monto" value =<?php echo $row[9] ?>>
                            <input  type  ="hidden" name="forma_de_pago_id" id ="forma_de_pago_id" value =<?php echo $getFormaPago ?>>
                            <input  type  ="hidden" name="banco_id" id ="banco_id" value =<?php echo $getBanco ?>>
                            <input  type  ="hidden" name="factura_id" id ="factura_id" value =<?php echo $row[0] ?>>
                        </button>
                      </form>
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
</form>
<!-- <script>
$(document).ready(function () {
    $(".btn-primary").click(function () {
        let info = document.getElementById("clienteId").value;
       // $('.modal-body').html(info);
        //console.log(info);
    });
});
</script> -->
<script>
      function infoclientes(){
        var cliente = document.getElementById('clienteId').value;
        var id = "datos"+cliente;
      
        document.getElementById(id).style.display="inline";
        
        //document.getElementById('otros').style.display ="none";

        //console.log(clientes)
      }
    </script>
</main>