<?php
$usuario_id = $_SESSION['id_usuario'];
$usuario = $_SESSION['nick'];

require_once './controllers/ProductoController.php';
require_once './controllers/ClienteController.php';
$finaliza = false;
$objCliente = new ClienteController();
$objProducto = new ProductoController();

if (isset($_POST['finaliza'])) {
  $idRecibo = $objProducto->finalizaRecibo($_GET['idRecibo'], $_GET['idCliente']);
  $finaliza = true;
}
if (isset($_GET['idCliente'])) {
  $idCliente = $_GET['idCliente'];
}

if (isset($_POST['formaPago'])) {
  $data = array(
    'usuario_id' => $usuario_id,
    'status' => 1,
    'fecha_asignado' => date("Y-m-d"),
  );
  $idRecibo = $objProducto->insertarRecibo($idCliente, $data);
  //$objProducto->insertarRecibo($idCliente,$data);
  $disabled = " disabled ";
  $cliente = $_POST['clienteId'];
  $idCliente = $_POST['clienteId'];
  $getFormaPago = $_POST['formaPago'];
  $getDocumento = $_POST['documento'];
  $getBanco = $_POST['banco_para_recibos_id'];
  $getFechaRecibo = $_POST['fechaRecibo'];
  $getEstado = 0;
  $getTotalPago = $_POST['total_pago'];;
  
} elseif (isset($_GET['idrecibo'])) { 

  $idCliente = $_GET['idCliente'];
  $idRecibo = $_GET['idrecibo'];
  $recibo = $objProducto->obtenerRecibosbyId($idRecibo);
  while ($row = $recibo->fetch()) {

    $getFormaPago = $row[7];
    $disabled = " disabled ";
    $cliente = $row[8];
    $idCliente = $row[8];
    $getDocumento = $row[3];
    $getEstado = $row[9];
    $getBanco = $row[10];
    $getFechaRecibo = $row[1];
    $getTotalPago = $row[2];;
  }
} else {
  //$idCliente = $_GET['idCliente'];
  $getEstado = 0;
  $getFormaPago = 0;
  $getTotalPago = 0;
  $cliente = 0;
  $getDocumento = 0;
  $getBanco = 0;
  $getFechaRecibo = "";
  $idRecibo = 0;
  $disabled = "";
  //  $idCliente = 0;
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
            placeholder="Puede buscar por Nombre Comercial, Razón Social, Referencia o NIT" aria-label=""
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
            <th>Código</th>
            <th>Nit</th>
            <th>Razón Social</th>
            <th>Departamento</th>
            <th>Municipio</th>
            <th>Saldo</th>
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
              <td><?php echo number_format($row[7], 2, ".", ","); ?></td>

              <td>
                <form action="index.php?page=recibo&idCliente=<?php echo $row[0] ?>" method="POST">
                  <button type="submit" class="btn btn-success" name="btn<?php echo $row[0] ?>"
                    id="btn<?php echo $row[0] ?>">
                    <i class="bi bi-send"></i>
                    <input type="hidden" name="clienteId" id="clienteId" value=<?php echo $row[0] ?>>
                  </button>
            </form >
              </td>
              <tr></tr>
            <?php }
            //}
            ?>
          </tbody>
      </div>
    <?php
    }
    // var_dump($idRecibo);
    if (isset($_GET['idCliente']) || $idRecibo > 0) {
      //  $idCliente = $_GET['idCliente'];

    ?>
      <!--tabla detalle de facturas -->
      <div>
        <br>


        <div class="collapse" id="collapseExample">
          <div class="panel-body p-20">
            <div class="table-responsive">
              <table id="solicitud" class="responsive table table-striped table-bordered display">
                <thead>
                  <th>Factura</th>
                  <th>Monto Factura</th>
                  <th>Abonos</th>
                  <th>Notas de Crédito</th>
                  <th>Saldo</th>
                  <!-- <th>Nombre Comercial.</th> -->

                </thead>
                <tbody>
                  <?php
                  $cnt = 1;
                  $saldoTotal = 0;
                  $saldos = new ProductoController();
                  $facturas = $saldos->obtenerFacturasbyCliente($idCliente);
                  while ($row = $facturas->fetch()) {

                  ?><tr>
                      <td><?php echo $row[1]; ?></td>
                      <td><?php echo number_format(round($row[3], 2), 2); ?></td>
                      <td><?php echo number_format(round($row[5], 2), 2); ?></td>
                      <td><?php echo number_format(round($row[4], 2), 2); ?></td>
                      <td><?php echo number_format(round($row[3] - $row[4] - $row[5], 2), 2); ?></td>

                    </tr>
                  <?php
                    $saldoTotal = $saldoTotal + ($row[3] - $row[4] - $row[5]);
                    $cnt = $cnt + 1;
                  }


                  ?>
                </tbody>
              </table>
            </div><!-- /.row -->
          </div>
        </div>
      </div>
      <div class="row"><br></div>
      <button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Detalle de Facturas ↑ Saldo: <strong><?php echo number_format($saldoTotal, 2, ".", ","); ?></strong>
      </button>

      <div class="row"><br></div>
      <!--tabla detalle de facturas -->


      <?php
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

      <h5><strong>Ingresar información:</strong> </h5>
      <div class="container">
        <form action="index.php?page=recibo&idCliente=<?php echo $idCliente ?>" method="POST">
          <div class="row-2">
            <label class="">Forma de Pago: </label>
            <select class=" form-control" onchange="mostrar()" aria-label="Default select example" name="formaPago"
              id="formaPago" <?php echo $disabled ?>>
              <option selected>Forma de Pago:</option>
              <?php
              $formaPago = $objProducto->obtenerDatos('forma_de_pago', 'id');
              while ($row = $formaPago->fetch()) {
                if ($row[0] <= 5) { ?>
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
                  <option selected value=0>Seleccione uno:</option>
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
                            echo '0';
                          }

                          ?>">
              </div> <!-- div condicion de efectivo -->
            <?php } ?>

            <label for="">Monto</label>
            <input type="number" name="total_pago" step="any" max="<?php echo $saldoTotal ?>" id="total_pago" <?php echo $disabled ?> class="form-control" value="<?php
                if ($getTotalPago > 0) {
                  echo $getTotalPago;
                } else {
                  echo '';
                }

                ?>">
          </div> <!-- div condicion de efectivo -->


          <label for="">Fecha: </label>
          <input type="date" <?php echo $disabled ?> class="form-control col-2" name="fechaRecibo" id="fechaRecibo"
            value="<?php echo $getFechaRecibo ?>">
          <?php if (($idRecibo == 0)) { ?>
            <div class="row-2">
              <br>
              
                <button type="submit" class="btn btn-success">Guardar</button>
                <input type="hidden" name="clienteId" id="clienteId" value=<?php echo $_GET['idCliente']; ?>>
            </div>
          <?php } ?>
      </div>
      <br>
      </form>
      <!-- mostrar facturas -->
      <?php if ($idCliente && $idRecibo) {
      //if (isset($getEstado)==2) { ?>
        
        <form action="index.php?page=recibo&idCliente=<?php echo $idCliente ?>&idRecibo=<?php echo $idRecibo ?>" method="POST"> 
        <div class="container row">
        
            <div class="col">
                <?php if (isset($_GET['idrecibo'])&& $getEstado!=6) { ?>
                <button type="input" class="btn btn-danger col-3">
                      Finalizar
                    </button>
                    <input type="hidden" name="finaliza" value="true">
            </div>
            <?php }
            if($getEstado!=6){ ?>
            <div class="col">
              <button class="btn btn-success" type="button" id ="detallefactura" name="detallefactura" data-bs-toggle="collapse" data-bs-target="#collapseExample1"
                aria-expanded="false" aria-controls="collapseExample1">
                Agregar Facturas
              </button>     
            </div>   
        </div>
        <?php } ?>
    </div>
        
          <div class="collapse" id="collapseExample1">
        <div class="row-2">
      </form>  <br>
          <h3>Saldo a Cancelar:
          <span id ="montocancela" class="badge bg-info  text-dark">
              <?php echo (float)$getTotalPago ?></span> </h3>
        </div>
        <h4>Total Abonado: <span class="badge bg-success text-dark" id="sum">0</span></p></h4>
        <br>
        <h4>Pendiente de asignar: <span class="badge bg-warning text-secondary" id="restante">0</span></p></h4>
        <span><label id="warn" class="badge text-bg-danger"></label></span>
        <form action="index.php?page=recibo-insertar&idCliente=<?php echo $idCliente ?>" method="POST">

          <div class="table-responsive" >
            <table id="solicitud" class="responsive table table-striped table-bordered display">
              <thead>
                
                <th>Factura</th>
                <th>Total</th>
                <th style="width: 5%; align:center">Sel.</th>
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
                    <td><?php echo $row[1]; ?></td>
                    <td id="tot<?php echo $row[0] ?>"><?php echo $row[3]; ?></td>
                    <!-- <td><?php echo $row[2]; ?></td> -->
                    <td>
                      <input class="form-check-input" type="checkbox" name="chk<?php echo $row[0] ?>"
                        id="chk<?php echo $row[0] ?>" onclick='updateSum()'>
                      <input type="hidden" name="fac<?php echo $row[0] ?>" value=<?php echo $row[0] ?>>
                    </td>
                    <td><input id="abn<?php echo $row[0] ?>" name="abn<?php echo $row[0] ?>" 
                    class="form-control" value='0.00'  required onchange='updateSum()'
                        type="number" step="any" max="<?php echo $row[3]; ?>"></td>
                    <td><?php echo $row[6]; ?></td>

                  </tr>
                <?php
                  $cnt = $cnt + 1;
                }

                ?>
              </tbody>
            </table>
            <button class="btn btn-success" type="submit" id ="guardardetalle" >
            Guardar Abonos
            <input type="hidden" name="cliented" id="cliented" value=<?php echo $idCliente ?>>
            <input type="hidden" name="recibod" id="recibod" value=<?php echo $idRecibo ?>>
            <input type="hidden" name="fechaRecibod" id="fechaRecibod" value=<?php echo $getFechaRecibo ?>>
            <!-- <input type="hidden" name="factura_id" id="factura_id" value=<?php echo $ge ?>> -->
            <input type="hidden" name="formapagod" id="formapagod" value=<?php echo $getFormaPago ?>>
            <input type="hidden" name="documentod" id="documentod" value=<?php echo $getDocumento ?>>
            <input type="hidden" name="banco_idd" id="banco_idd" value=<?php echo $getBanco ?>>
            <input type="hidden" name="contador" id="contador" >      
            <!-- <input type="hidden" name="facturasx" id="facturasx" >  
            <input type="hidden" name="abonosx" id="abonosx" > -->
          </button>
        
          </div><!-- /.table responsive -->
      </div><!-- /.colapse -->
          <span id= "tablafacturas"></span>
          
        </form>
      <?php } ?>


      <?php if ((isset($getEstado)) && ($getEstado == 6)) {
        $visible = "style=display:none";
        $disabled = "disabled";
      ?>
        <div class="container">
        <a class="btn btn-primary" target="_blank" href="index.php?page=recibopdf&id=<?php echo $idRecibo; ?>"
          role="button">
          <i class="bi bi-printer"></i>
          Imprimir
        </a>
        </div>
        
      <?php
      } else {
        $visible = "";
      } ?>
      
  </div>

  <!-- mostrar facturas -->
<?php } ?>
<?php if (isset($_GET['idRecibo'])) { ?>
  <!-- Button trigger modal -->
  <div class="collapse" id="collapseExample1>">
    <div class="table-responsive">
      <table id="detalleRecibo" class="responsive table table-striped table-bordered display">
        <thead>
          <th>#</th>
          <th>Factura</th>
          <th>Fecha Pedido</th>
          <th>Abono</th>
          <!-- <th>Total Factura</th>                       -->
        </thead>
        <tbody>
          <?php
          $cnt = 1;
          $montototal = 0;
          $abonototal = 0;
          $detalle = $objProducto->obtenerDetalleRecibobyId($idRecibo);
          while ($row = $detalle->fetch()) {
          ?><tr>
              <td><?php echo $cnt; ?> </td>
              <td><?php echo $row[0] . " " . $row[1]; ?></td>
              <td><?php echo $row[2]; ?></td>
              <td align="right"><?php echo number_format(round($row[4], 2), 2); ?></td>
              <!-- <td align="right"><?php echo number_format(round($row[6], 2), 2); ?></td>                           -->
            </tr>
          <?php
            $cnt = $cnt + 1;
            $abonototal += $row[4];
            $montototal += $row[6];
          }
          ?>
          <td><strong>Total:</strong></td>
          <td></td>
          <td></td>

          <td align="right"><strong>
              <?php echo number_format(round($abonototal, 2), 2); ?>
            </strong></td>
          <!-- <td align="right" ><strong><?php echo number_format(round($montototal, 2), 2); ?></strong></td> -->
        </tbody>
      </table>
    </div><!-- /.table responsible detalle recibo -->
  </div>
<?php  } ?>
<script>
   function updateSum() {
    let checkboxes = document.querySelectorAll('input[type="checkbox"]');
    let sum = 0;
    let facturas = ""; 
    let abonos = ""; 
    let montocancela = parseFloat(document.getElementById('montocancela').textContent);
    let contador = 0;     
    checkboxes.forEach(checkbox => {
      if (checkbox.checked) {
        let idFactura = checkbox.id.substring(3);
        let abono = document.getElementById('abn' + idFactura).value;
        let montoFactura = document.getElementById('tot' + idFactura).textContent;
        let faltante = montocancela;
        
        
        if (parseFloat(abono) > 0) {

          if (parseFloat(abono) > montoFactura) {
            checkbox.checked = false;
            document.getElementById('warn').textContent = "Valor ingresado No debe ser mayor al monto pendiente";
           
          } else {
            if(parseFloat(abono) > faltante){
              checkbox.checked = false;
              document.getElementById('warn').textContent = "Valor ingresado No debe ser mayor al monto restante";
           
            }else{
              sum += parseFloat(abono);
              abonos = abonos+ ',' + abono ;
              facturas = facturas +','+idFactura;
              document.getElementById('warn').textContent = '';
              faltante=parseFloat(montocancela) - parseFloat(sum).toFixed(2);
              document.getElementById('restante').textContent=faltante.toFixed(2);
            
              // document.getElementById('facturasx').textContent=abonos;
              // document.getElementById('abonosx').textContent=facturas;
            }
            contador = parseInt(contador)+1;
            document.getElementById('contador').value=contador;
            
          }
        } else {
          checkbox.checked = false;
          document.getElementById('warn').textContent = "Valor ingresado debe ser mayor a 0.00";
        }
      }
    });
    document.getElementById('sum').textContent = sum.toFixed(2);
    
  }

</script>
</main>