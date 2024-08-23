<?php

$usuario = $_SESSION['nick'];

require_once './controllers/ClienteController.php';
$listaClientes = new ClienteController();
$clientes = $listaClientes->obtenerClientes();

?>
 
<main role="main" class="container">

<h1 class="align-center" >Listado de solicitudes usuario:<h1><h3><?php echo $_SESSION['nombre']?></h3>
<div class="panel-body p-20">
    <div class="table-responsive">
    <table id="solicitud" class="responsive table table-striped table-bordered display">     
            <thead>
                <th>#</th>
                <th>Nit</th>
                <th>Razón Social</th>
                <th>Fecha Sol.</th>
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
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[2];?></td>
                    <td>
                        <?php if ($row[31]!='A'){?>
                            Estado: Ingresada<br>
                            <a  class="btn btn-warning"href=" index.php?page=edcliente&id=<?php echo $row[0]; ?>">Editar</a>
                        
                        <?php }else{?>
                            Estado Completada<br>
                            <a  class="btn btn-primary "
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
