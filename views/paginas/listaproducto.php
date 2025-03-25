<?php
$usuario = $_SESSION['nick'];

require_once './controllers/ProductoController.php';
$listaProductos = new ProductoController();


?>

<main role="main" class="container">
    <h1 class="align-center">Listado de Existencias:</h1>
    <div>
        <label for=""><strong>Búsqueda de Artículos:</strong></label>
        <form action="index.php?page=listaproducto"
            method="POST">
            <div class="input-group mb-3">
                <div class="input-group-prepend row-2">
                    <button class="btn btn-primary" type="input">Buscar</button>
                </div>
                <input type="text" class="form-control" name="searchArt"
                    placeholder="Puede buscar por nombre, categoria, código" aria-label=""
                    aria-describedby="basic-addon1">
                <!-- <input type="hidden" value="0" name="searchArt" id="searchArt"> -->
        </form>
    </div>
    <?php if (isset($_POST['searchArt'])) { ?>
        
        
    <div class="panel-body p-20">
        <div class="table-responsive">
            <table id="solicituds" class="responsive table table-striped table-bordered display">
                <thead>
                    <th>#</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Medida</th>
                    <th>Categoria</th>
                    <th>Existencias</th>
                    <th>Precio</th>
                </thead>
                <tbody>
                    <?php
                    $cnt = 1;
                    $productos = $listaProductos->obtenerProductosbyDesc($_POST['searchArt']);
                    while ($row = $productos->fetch()) {

                    ?><tr>
                            <td><?php echo $row[0]; ?></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[5]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[4]; ?></td>
                            <td><?php echo $row[6]; ?></td>
                            <td><?php echo $row[7]; ?></td>
                        </tr>
                    <?php
                        $cnt = $cnt + 1;
                    }


                    ?>
                </tbody>
            </table>
        </div><!-- /.row -->
    </div>
    <?php }?>

</main><!-- /.container -->