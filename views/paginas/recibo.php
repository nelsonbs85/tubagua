<?php
$usuario_id = $_SESSION['id_usuario'];
$usuario = $_SESSION['nick'];

require_once './controllers/ProductoController.php';
require_once './controllers/ClienteController.php';
$finaliza = false; 
$objCliente = new ClienteController();
$objProducto = new ProductoController();
//var_dump($_GET);
if (isset($_POST['finaliza'])){ 
  $idRecibo = $objProducto->finalizaRecibo($_GET['idRecibo']);
  $finaliza = true; 
}
if (isset($_POST['formaPago'])) {
  $data = array(
    'usuario_id' => $usuario_id,
    'status' => 1,
    'fecha_asignado' => date("Y-m-d"),
  );
  $idRecibo = $objProducto->insertarRecibo($data);
  $disabled = " disabled ";
  $cliente = $_POST['clienteId'];
  $idCliente = $_POST['clienteId'];
  $getFormaPago = $_POST['formaPago'];
  $getDocumento = $_POST['documento'];
  $getBanco = $_POST['banco_para_recibos_id'];
  $getFechaRecibo = $_POST['fechaRecibo'];
  $getEstado = 0; 
} 
  elseif (isset($_GET['idRecibo'])) {
    
    $idRecibo = $_GET['idRecibo'];
    $recibo = $objProducto->obtenerRecibosbyId($idRecibo);
    
    while ($row = $recibo->fetch()) {
      
      $getFormaPago=$row[7];
      $disabled = " disabled ";
      $cliente =$row[8];
      $idCliente = $row[8];
      $getDocumento =$row[3];
      $getEstado = $row[9];
      $getBanco = $row[10];
      $getFechaRecibo = $row[1];
    
  }
} else{
  $getEstado = 0;
  $getFormaPago = 0;
  $cliente = 0;
  $getDocumento = 0;
  $getBanco = 0;
  $getFechaRecibo = "";
  $idRecibo = 0;
  $disabled = "";
  $idCliente = 0;
}

?>

<main>
  <div class="row-2 container">
    <h2 style="text-align:center"><strong>Generar Recibo</strong></h1>
      <label for=""><strong>Búsqueda por Cliente:</strong></label>
      <form action="index.php?page=recibo" method="POST">
        <div class="input-group mb-3">
          <div class="input-group-prepend row-2">
            <button class="btn btn-primary" type="input">Buscar</button>
          </div>
          <input type="text" class="form-control" name="search"
            placeholder="Puede buscar por Nombre Comercial, Razón Social o NIT" aria-label=""
            aria-describedby="basic-addon1">
      </form>
  </div>
  <div>
    <?php
    if (isset($_POST['search'])) {
      $clientesBusqueda = $objCliente->obtenerDatosClientebyDesc($_POST['search']);
      ?>
      <div class="table-responsive">
        <table id="busqueda" class="responsive table table-striped table-bordered display">
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
            while ($row = $clientesBusqueda->fetch()) {
              //$pendiente = $objProducto->ClienteTienePendiente($row[0]);
             // if ($pendiente>0){
              ?>

              <td><?php echo $row[1]; ?></td>
              <td><?php echo $row[2]; ?></td>
              <td><?php echo $row[3]; ?></td>
              <td>
                <form action="index.php?page=recibo&idCliente=<?php echo $row[0] ?>" method="POST">
                  <button type="submit" class="btn btn-success" name="btn<?php echo $row[0] ?>"
                    id="btn<?php echo $row[0] ?>">
                    <i class="bi bi-send"></i>
                    <input type="hidden" name="clienteId" id="clienteId" value=<?php echo $row[0] ?>>
                  </button>
                </form>
              </td>
              <tr></tr>
            <?php } 
          //}?>
          </tbody>
      </div>
    <?php 
    }
 // var_dump($idRecibo);
    if (isset($_GET['idCliente']) || $idRecibo > 0) {
      //  $idCliente = $_GET['idCliente'];
      $infocliente = $objCliente->obtenerDatosCliente($idCliente);
      while ($row = $infocliente->fetch()) {
        
        ?>

        <div class="datos" id="datos" style="display">
          <label id="datosnombre" class="badge text-bg-warning col-10">
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
      <h5><strong>Ingresar información:</strong> </h5>
      <div class="container">
        <form action="index.php?page=recibo" method="POST">
          <div class="row-2">
            <label class="">Forma de Pago: </label>
            <select class=" form-control" onchange="mostrar()" aria-label="Default select example" name="formaPago"
              id="formaPago" <?php echo $disabled ?>>
              <option selected>Forma de Pago:</option>
              <?php
              $formaPago = $objProducto->obtenerDatos('forma_de_pago', 'id');
              while ($row = $formaPago->fetch()) {
                if ($row[0] < 6) { ?>
                  <option value="<?php echo $row[0]; ?>" <?php echo $row[0] == $getFormaPago ? " selected " : ""
                       ?>>
                    <?php echo $row[1]; ?>
                  </option>
                <?php }
              } ?>
            </select>
            <script>
              function mostrar() {
                var formapago = document.getElementById('formaPago').value;
                if (formapago == 1) {
                  document.getElementById('otros').style.display = "none";
                } else {
                  document.getElementById('otros').style.display = "inline";
                }
              }
            </script>
            <?php if ($getFormaPago != 1) { ?>
              <div id="otros">
                <label class="">Banco: </label>
                <select class=" form-control" aria-label="Default select example" id='banco_para_recibos_id'
                  name="banco_para_recibos_id" <?php echo $disabled ?>>
                  <option selected>Seleccione uno:</option>
                  <?php
                  $formaPago = $objProducto->obtenerDatos('banco_para_recibos', 'id');
                  while ($row = $formaPago->fetch()) { ?>
                    <option value="<?php echo $row[0]; ?>" <?php echo $row[0] == $getBanco ? " selected " : ""
                         ?>>

                      <?php echo $row[1]; ?>
                    </option>
                  <?php } ?>
                </select>
                <label>Documento: </label>
                <input type="number" name="documento" id="documento" <?php echo $disabled ?> class="form-control" value="<?php
                    if ($getDocumento > 0) {
                      echo $getDocumento;
                    } else {
                      echo '';
                    }

                    ?>">
              </div> <!-- div condicion de efectivo -->
            <?php } ?>
            <label for="">Fecha: </label>
            <input type="date" <?php echo $disabled ?> class="form-control col-2" name="fechaRecibo" id="fechaRecibo"
              value="<?php echo $getFechaRecibo ?>">
            <?php if (($idRecibo == 0)) { ?>
              <div class="row-2">
                <br>
                <button type="submit" class="btn btn-success">Guardar</button>
                <input type="hidden" name="clienteId" id="clienteId" value=<?php echo $_GET['idCliente']; ?>>
                <input type="hidden" value="Y" name="nuevo" id="nuevo">
              </div>
            <?php } ?>
          </div>
        </form>
        <!-- mostrar facturas -->
       <?php if ($idCliente&&$getEstado!=7){?>
        <div class="row-2">
          <br>
          <button type="button" class=" col-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          
          Agregar Facturas:
          </button>
          <br>
        <form action="index.php?page=recibo&idRecibo=<?php echo $idRecibo ?>" method="POST">
          <button type="input" class="btn btn-danger">
            Finalizar
          </button>
          <input type  ="hidden" name="finaliza" value="true">
        </form>
        </div>
        <?php } ?>
        
  
  <?php if ((isset($getEstado))&&($getEstado==7)) { 
        $visible = "style=display:none";
        $disabled= "disabled";
        ?>
       <a class="btn btn-primary" target="_blank" href="index.php?page=recibopdf&id=<?php echo $idRecibo; ?>"
        role="button">
        <i class="bi bi-printer"></i>   
            Imprimir
        </a>
        <?php 
       }else {
        $visible="";
        
       }?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Facturas a cancelar:
                  
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <br>

              <div class="modal-body">
                <div class="panel-body p-30">

                  <div class="table-responsive">
                    <table id="solicitud" class="responsive table table-striped table-bordered display">
                      <thead>
                        <th>Sel.</th>
                        <th>Factura</th>
                        <th>Total</th>
                        
                        <th style="width:20%">Abono</th>
                        <th>Saldo</th>

                      </thead>

                      <tbody>
                        <?php
                        
                        $cnt = 1;
 //                       var_dump($idCliente);
                        $saldos = new ProductoController();
                        $facturas = $saldos->obtenerFacturasbyCliente($idCliente);
                        
                        while ($row = $facturas->fetch()) {
                         
                          ?>
                          <tr>
                            <td>
                              <form action="index.php?page=recibo-insertar" method="POST">
                                <button type="submit" class="btn btn-success" name="btn<?php echo $row[0] ?>"
                                  id="btn<?php echo $row[0] ?>">
                                  <i class="bi bi-plus-circle-dotted"></i>
                                  <input type="hidden" name="recibo_id" id="recibo_id" value=<?php echo $idRecibo ?>>
                                  <input type="hidden" name="documento" id="documento" value="<?php echo $getDocumento ?>">
                                  <input type="hidden" name="fechaRecibo" id="fechaRecibo" value=<?php echo $getFechaRecibo ?>>
                                  <!-- <input  type  ="hidden" name="monto" id ="monto" value =<?php echo $row[9] ?>> -->
                                  <input type="hidden" name="forma_de_pago_id" id="forma_de_pago_id" value=<?php echo $getFormaPago ?>>
                                  <input type="hidden" name="banco_id" id="banco_id" value=<?php echo $getBanco ?>>
                                  <input type="hidden" name="factura_id" id="factura_id" value=<?php echo $row[0] ?>>
                                </button>

                            </td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <!-- <td><?php echo $row[2]; ?></td> -->
                            <td><input name="abono" class="form-control" 
                            type="number" step="0.01"  required></td>
                            <td><?php echo $row[6]; ?></td>
                            </form>
                          </tr>
                          <?php
                          $cnt = $cnt + 1;
                        
                      }

                        ?>
                      </tbody>
                    </table>
                  </div><!-- /.row -->
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <!-- <button type="button" class="btn btn-primary">Guardar</button> -->
              </div>
            </div>
          </div>
        </div>
        <!-- mostrar facturas -->
      <?php } ?>
      <?php if (isset($_GET['idRecibo'])){ ?>
      <!-- Button trigger modal -->
        <div class="table-responsive">
                  <table id="detalleRecibo" class="responsive table table-striped table-bordered display">     
                    <thead>
                        <th>#</th>
                        <th>Factura</th>
                        <th>Fecha Pedido</th>
                        <th>Abono</th>               
                        <!-- <th>Total Factura</th>                       -->
                    </thead>
                    <tbody >
                        <?php 
                        $cnt= 1;
                        $montototal = 0; 
                        $abonototal = 0; 
                        $detalle = $objProducto->obtenerDetalleRecibobyId($idRecibo);
                        while ($row = $detalle->fetch()) {
                        ?><tr>
                            <td><?php echo $cnt; ?> </td>
                            <td><?php echo $row[0] ." " .$row[1];?></td>
                            <td><?php echo $row[2];?></td>
                            <td align="right"><?php echo number_format(round($row[4],2),2);?></td>                          
                            <!-- <td align="right"><?php echo number_format(round($row[6],2),2);?></td>                           -->
                        </tr>
                        <?php
                            $cnt= $cnt+1;
                            $abonototal+= $row[4];
                            $montototal+= $row[6];
                          }           
                        ?>
                        <td><strong>Total:</strong></td>
                        <td></td>
                        <td></td>
                        
                        <td align="right"><strong>
                          <?php echo number_format(round($abonototal,2),2);?>
                        </strong></td>
                        <!-- <td align="right" ><strong><?php echo number_format(round($montototal,2),2);?></strong></td> -->
                    </tbody>
                  </table>
        </div><!-- /.table responsible detalle recibo -->
        <?php  }?>  
</main>