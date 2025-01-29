<?php

$usuario = $_SESSION['nick'];

require_once './controllers/ClienteController.php';
$clientes = new ClienteController();
//$listaclientes = $clientes->buscaClientes();

?>
 
<main role="main" class="container">
<h1 class="align-center" >Listado de Clientes:</h1>
<div class="row-2 container">
    <h2 style="text-align:center"><strong>Generar Recibo</strong></h1>
      <label for=""><strong>Búsqueda por Cliente:</strong></label>
      <form action="index.php?page=listaclientes" method="POST">
        <div class="input-group mb-3">
          <div class="input-group-prepend row-2">
            <button class="btn btn-primary" type="input">Buscar</button>
          </div>
          <input type="text" class="form-control" name="search"
            placeholder="Puede buscar por Nombre Comercial, Razón Social, Referencia o NIT" aria-label=""
            aria-describedby="basic-addon1">
      </form>
  </div>
  <?php 
  if (isset($_POST['search'])) {
    $clientesBusqueda = $clientes->obtenerDatosClientebyDesc($_POST['search']);
  ?>

<div class="panel-body p-20">
    <div class="table-responsive">
         <table id="solicitud" class="responsive table table-striped table-bordered display">     
            <thead>
                <th>Código</th>
                <th>Nit</th>
                <th>Razón Social</th>
                <th>Departamento</th>
                <th>Municipio</th>
                <!-- <th>Nombre Comercial.</th> -->
                <th>Acción</th>
            </thead>
            <tbody >
                <?php 
                $cnt= 1;
                while ($row = $clientesBusqueda->fetch()) {

                ?><tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[5];?></td>
                    <td><?php echo $row[6];?></td>
                    
                    <td>
                        <a  class="btn btn-warning"href=" index.php?page=cliente&id=<?php echo $row[0]; ?>">Editar</a>
                        
                    </td>
                </tr>
                <?php
                    $cnt= $cnt+1;
                  }
                
                
                ?>
            </tbody>
        </table>
    </div><!-- /.row -->
</div>
<?php } ?>
</main><!-- /.container -->
