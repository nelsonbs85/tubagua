<?php

$usuario = $_SESSION['nick'];
$usuario_id = $_SESSION['id_usuario'];

require_once './controllers/ProductoController.php';
?>

<main role="main" class="container">

    <h1 class="align-center">Listado de Recibos:</h1>
    <form action="index.php?page=listadeposito" method="POST">
        <div class="container">
            <h5>Seleccione rango de Fechas: </h5>
            <div class="row justify-content-center">
                <div class="col">
                    <label for="startDate">Del</label>
                    <input id="startDate" name="startDate" class="form-control" type="date" />
                    
                </div>
                <div class="col">
                    <label for="endDate">Al</label>
                    <input id="endDate" name="endDate" class="form-control" type="date" />
                </div>
                <div class="col">
                    <br>
                    <button class="btn btn-primary" type="input">Buscar</button>
                </div>
            </div>
        </div>
    </form>
    <br>
    <div class="panel-body p-20">
        <div class="table-responsive">
            <table id="tsolictud" class="responsive table table-striped table-bordered display">
                <thead>
                    <th>#</th>
                    <th>Fecha</th>
                    <th>Documento</th>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Forma de Pago</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php
                    
                if (isset($_POST['startDate'])) {
                    
                    $startDate =$_POST['startDate'];
                    $endDate =$_POST['endDate'];
                    $listaPedidos = new ProductoController();
                    $pedidos = $listaPedidos->obtenerDepositos($usuario_id,$startDate, $endDate);

                
                        $cnt = 1;
                    while ($row = $pedidos->fetch()) {
                    ?><tr>

                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[4]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[7]; ?></td>
                            <td><?php echo $row[8]; ?></td>

                            <td>

                                <a class="btn btn-success"
                                    href="index.php?page=recibo&idrecibo=<?php echo $row[0] ?> &idCliente=<?php echo $row[5] ?>">Ver
                                </a>
                                <?php if ($row[6] == '0') {  ?>
                                    <a class="btn btn-warning"
                                        href="index.php?page=recibo&idrecibo=<?php echo $row[0] ?> &idCliente=<?php echo $row[5] ?>">Editar
                                    </a>
                            </td>
                        <?php } ?>

                        </tr>
                    <?php
                        $cnt = $cnt + 1;
                    }
                }//fiin if

                    ?>
                </tbody>
            </table>
        </div><!-- /.row -->
    </div>

</main><!-- /.container -->