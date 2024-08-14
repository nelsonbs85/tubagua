<?php
    require_once 'controllers/UsuarioController.php';
    $usuario = new UsuarioController();

    if (isset($_POST['salir'])) {
        $usuario->cerrarSesion();
    }
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
         <div class="container">
            <a class="navbar-brand" href="index.php?page=inicio">
			<?php echo "Inicio"; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
               data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
               aria-label="Toggle navigation">
               <i class="bi bi-menu-button-wide"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav text-right">
				<li class="nav-item" >	
					<a class="nav-link" href="#"><?php echo "Usuario: " .$_SESSION['nombre']; ?></a>
				</li>
				<li class="nav-item" >	
					<a class="nav-link" href="index.php?page=cliente"><?php echo "Nuevo Cliente";?></a>
				</li>
                <li class="nav-item" >	
					<a class="nav-link" href="index.php?page=listacliente">
                        <?php echo "Lista de Solicitudes";?></a>
				</li>
				<li class="nav-item">
					<form action="" method="POST" name="logoutForm" id="logoutForm">
						<button type="submit" class="btn btn-link nav-link" name="salir">Cerrar sesión</button>
					</form>
				</li>
			</ul>
            </div>
         </div>
      </nav>
  
<!-- <div class="mb-1 pb-1"></div> -->