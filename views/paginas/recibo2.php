<?php
$usuario_id = $_SESSION['id_usuario'];
$usuario = $_SESSION['nick'];

require_once './controllers/ProductoController.php';
require_once './controllers/ClienteController.php';

 $objCliente = new ClienteController();
 $objProducto = new ProductoController();
?>
<main>
<div class="row-2 container"> 
  <h2 style="text-align:center"><strong>Generar Recibo</strong></h1>
  <label for=""><strong>Búsqueda por Cliente:</strong></label>   
  <form action="index.php?page=recibo2" method="POST">
    <div class="input-group mb-3">
      <div class="input-group-prepend row-2">
        <button class="btn btn-primary" type="input">Buscar</button>
      </div>
    <input type="text" class="form-control" name="search" placeholder="Puede buscar por Nombre Comercial, Razón Social o NIT"
     aria-label="" aria-describedby="basic-addon1">
  </form>
  </div>
  <div>
 <?php
  if (isset($_POST['search'])){ 
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

      <tbody >
        <?php
         while ($row = $clientesBusqueda->fetch()) { ?>
          <td><?php echo $row[1]; ?></td>
          <td><?php echo $row[2]; ?></td>
          <td><?php echo $row[3]; ?></td>
          <td>
          <form action="index.php?page=recibo2&idCliente=<?php echo $row[0] ?>" method="POST">
              <button type="submit" class="btn btn-success" name = "btn<?php echo $row[0]  ?>" id = "btn<?php echo $row[0] ?>" >
              <i class="bi bi-send"></i>
                  <input  type  ="hidden" name="clienteId" id ="clienteId" value =<?php echo $row[0] ?>>
              </button>
         </form>
          </td>                          
          <tr></tr>
        <?php  } ?>
      </tbody>
  </div>
  <?php } 

  if (isset($_GET['idCliente'])){ 
    $idCliente = $_GET['idCliente'];
    $infocliente = $objCliente->obtenerDatosCliente($idCliente);
     while ($row = $infocliente->fetch()) {?>

    <div class="datos" id="datos" style="display">
    <label  id = "datosnombre"class="badge text-bg-warning col-10"><h5><?php echo $row[7]; ?></h5></label>
    <br>
      <label id = "datosnit" class="badge text-bg-primary">NIT: <?php echo $row[5]; ?></label>
        <br>
        <label id = "datosdir" class="badge text-bg-primary">Dir. Facturación: <?php echo $row[15]; ?></label>
        <br>
        <label id = "datosdepto" class="badge text-bg-primary">Departamento: <?php echo $row[43]; ?></label>
        <label id = "datosmuni" class="badge text-bg-primary">Municipio:<?php echo $row[50]; ?></label>
        <label id = "datoszona" class="badge text-bg-primary">Zona:<?php echo $row[16]; ?></label>    
    </div>
  <?php }
  
     }?>  

</main>