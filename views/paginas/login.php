<?php
    require_once 'controllers/UsuarioController.php';
    $usuario = new UsuarioController();
    $usuario->login();
	
    if (isset($_POST['acceder'])) {
        $datos = array(
            'nick'    => $_POST['nick'],
			'password' => $_POST['password'],
			//$ccv_cifrado = aes_encrypt("123", "hunter2");
        );
        $respuesta = $usuario->accesoUsuario($datos);
    }
?>

	<main role="main" class="container">

		<div class="starter-template col-md-6" style="text-align: center;" >
			<img src="./assets/logo.png" style="width: 25%; heigth:auto; " alt="" >
			<h4 class="text-center">CRM Vendedores</h4>
			<hr>
			<div class="row" style="text-align: center;" >
				<div class="col-md-6 offset-3">
					<?php
						if (isset($_GET['mensaje'])) {
							echo "<div class='alert alert-primary' role='alert'>".$_GET['mensaje']."</div>";
						}
					?>
				</div>
			</div>
		</div>
		<div >
			<div class="col-md-6" >
				<form action="index.php?page=login" method="POST" name="loginForm" id="loginForm" class="text-left">
					<div class="form-group">
						<label for="nick">Usuario</label>
						<input type="text" id="nick" name="nick" class="form-control" aria-describedby="nickHelp">
						<small id="nickHelp" class="form-text text-muted">Ingrese el usuario.</small>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" name="password" class="form-control" aria-describedby="passwordHelp">
						<small id="passwordHelp" class="form-text text-muted">Ingrese el password</small>
					</div>
					<button type="submit" name="acceder" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>

	</main><!-- /.container -->
