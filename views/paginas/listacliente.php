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
    <table id="solicitud" class="responsive table table-striped table-bordered display">     
            <thead>
                <th>#</th>
                <th>Nit</th>
                <th>Razón Social</th>
                <th>Monto</th>
                <th> Acción</th>
            </thead>
            <tbody >
                <?php 
                $cnt= 1;
                while ($row = $clientes->fetch()) {

                ?><tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[5];?></td>
                    <td><?php echo $row[7];?></td>
                    <td><?php echo $row[2];?></td>
                    <td>
                        <?php if ($row[31]!='A'){?>
                            Estado: Ingresada<br>
                            <a  class="btn btn-warning"href=" index.php?page=edcliente&id=<?php echo $row[0]; ?>">Editar</a>
                        
                        <?php }else{?>
                            Estado Autorizada<br>
                            <a  class="btn btn-success "
                             href=" index.php?page=edcliente&id=<?php echo $row[0]; ?>">Ver</a>
                        <?php }?>
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
