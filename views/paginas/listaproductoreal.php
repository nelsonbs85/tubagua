<?php
$usuario = $_SESSION['nick'];

require_once './controllers/ProductoController.php';
$listaProductos = new ProductoController();
$productos = $listaProductos->obtenerProductosreal();

?>
 
<main role="main" class="container">

<h1 class="align-center" >Listado de Existencias:</h1>
<div class="panel-body p-20">
    <div class="table-responsive">
    <table id="solicitud" class="responsive table table-striped table-bordered display">     
            <thead>
                <th>#</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Medida</th>
                <th>Existencias</th>
                <th>Cant. No. Aut.</th>
                <th>Precio</th>
            </thead>
            <tbody >
                <?php 
                $cnt= 1;
                while ($row = $productos->fetch()) {

                ?><tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[5];?></td>
                    <td><?php echo $row[3];?></td>
                    <!-- <td><?php echo $row[4];?></td> -->
                    <td><?php echo $row[6];?></td>
                    <td><?php echo $row[8];?></td>
                    <td><?php echo $row[7];?></td>
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
