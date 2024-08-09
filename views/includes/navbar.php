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
               <ion-icon name="menu-outline"></ion-icon>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav text-right">
				<li class="nav-item" >	
					<a class="nav-link" href="#"><?php echo "Usuario: " .$_SESSION['nombre']; ?></a>
				</li>
				<li class="nav-item" >	
					<a class="nav-link" href="index.php?page=cliente"><?php echo "Nuevo Cliente";?></a>
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
   </body>
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<!-- 
     Activar popper si se necesita más adelante -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script> -->
    
    <!-- Función jQuery para cerrar el navbar automáticamente -->
  
<div class="mb-1 pb-1"></div>