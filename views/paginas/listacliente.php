<?php

$usuario = $_SESSION['nick'];

require_once './controllers/ClienteController.php';
$listaClientes = new ClienteController();
$clientes = $listaClientes->obtenerClientes();

?>
 
<main role="main" class="container">

<h5>Listado de solicitudes usuario: <?php echo $usuario?></h5>
<div class="panel-body p-20">
    <div class="table-responsive">
    <table id="solicitud" class="table table-striped table-bordered display">     
            <thead>
                <th>#</th>
                <th>No. Solicitud</th>
                <th>Razón Social</th>
                <th>Monto</th>
                <th>Fecha Solicitud</th>
                <th> Editar</th>
                <th>Visualizar</th>
            </thead>
            <tbody >
                <?php 
                $cnt= 1;
                while ($row = $clientes->fetch()) {

                ?><tr>
                    <td><?php echo $cnt;?></td>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[7];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                    <td>
                            <a  class="btn btn-warning"href=" index.php?page=edcliente&id=<?php echo $row[0]; ?>">Editar</a>
                    </td>
                    <td>
                            <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');"
                             href=" index.php?page=login&id=<?php echo $row[0]; ?>">Ver</a>
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

</main><!-- /.container -->
