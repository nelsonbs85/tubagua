<?php

$usuario = $_SESSION['nick'];

require_once './controllers/ClienteController.php';
$clientes = new ClienteController();
$listaclientes = $clientes->buscaClientes();

?>
 
<main role="main" class="container">

<h1 class="align-center" >Listado de Clientes:</h1>
<div class="panel-body p-20">
    <div class="table-responsive">
    <table id="solicitud" class="responsive table table-striped table-bordered display">     
            <thead>
                <th>#</th>
                <th>Código</th>
                <th>Nit</th>
                <th>Razón Social</th>
                <!-- <th>Nombre Comercial.</th> -->
                <th>Acción</th>
            </thead>
            <tbody >
                <?php 
                $cnt= 1;
                while ($row = $listaclientes->fetch()) {

                ?><tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[4];?></td>
                    <td><?php echo $row[5];?></td>
                    <td><?php echo $row[8];?></td>
                    <!-- <td><?php echo $row[7];?></td> -->
                    
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

</main><!-- /.container -->
