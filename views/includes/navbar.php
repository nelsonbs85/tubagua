<?php
ob_start() ;
if (!isset($_SESSION['id_usuario'])) {
    session_start();
}
    require_once 'controllers/UsuarioController.php';
    $usuario = new UsuarioController();

    if (isset($_POST['salir'])) {
        $usuario->cerrarSesion();
    }
?>

<nav class="navbar navbar-fixed-top navbar-expand-md navbar-dark bg-dark">
         <div class="container">
            <a class="navbar-brand" href="index.php?page=inicio">
			<?php echo "Inicio";?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
               data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
               aria-label="Toggle navigation">
               <i class="bi bi-menu-button-wide"></i>
            </button>
            <span class="badge bg-secondary"><?php echo "Usuario: " .$_SESSION['nombre'];?></span>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-right">                   
                    <li class="nav-item dropdown" >	
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Solicitud de Crédito
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php?page=formulario">Crear Solicitud</a>
                                <a class="dropdown-item" href="index.php?page=listaformulario">Lista de Solicitudes</a>
                            </div>
                    </li>
                    <li class="nav-item dropdown" >	
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Clientes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php?page=cliente">Crear Cliente</a>
                                <a class="dropdown-item" href="index.php?page=listaclientes">Lista de Clientes</a>
                            </div>
                    </li>
                    <li class="nav-item dropdown" >	
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Depositos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php?page=listafacturas">Lista de Facturas</a>
                                <a class="dropdown-item" href="index.php?page=listadepositos">Lista de Depositos</a>
                                <a class="dropdown-item" href="index.php?page=recibo">Crear Recibo</a>
                                <a class="dropdown-item" href="index.php?page=estadocuenta">Estado de Cuenta</a>
                            </div>
                    </li>
                    <li class="nav-item dropdown" >	
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php?page=listaproducto">Listado de Existencias</a>
                                <a class="dropdown-item" href="index.php?page=listaproductoreal">Listado de Existencias Real</a>
                                <a class="dropdown-item" href="index.php?page=pedido">Hacer Pedido</a>
                                <a class="dropdown-item" href="index.php?page=listapedido">Lista de Pedidos</a>
                            </div>
                    </li>
                    <li class="nav-item">
                        <form action="" method="POST" name="logoutForm" id="logoutForm">
                            <button type="submit" class="btn btn-link nav-link" name="salir">Cerrar sesión</button>
                        </form>
                    </li>
                    
                </ul>
               
            </div>
        </div>
         <!-- <style>
        #header{
        position: absolute;
        width: 100%;
        z-index: 100;
        }
        </style> -->        
</nav>