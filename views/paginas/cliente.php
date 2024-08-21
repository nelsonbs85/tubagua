<?php
$usuario_id = $_SESSION['id_usuario'];
// $permisos = $objPermiso->obtenerPermisos($usuario_id);

// require_once './controllers/CategoriaController.php';
// $objCategoria = new CategoriaController();
// $categorias = $objCategoria->obtenerCategorias();

require_once './controllers/ClienteController.php';
 $objCliente = new ClienteController();

?>

<main role="main" class="container">
  <!-- inicio -->
<!-- <div class="row">
		<span class="text-bg-success"><h4><strong>Solicitud de Crédito</strong></h4> </span> 
		<div class="col">
			<label>Monto Solicitado:</label>
			<input type="number" placeholder="Q.000,000" id= "monto" name="monto">
		</div>
		<div class="col">
			<label>Fecha:</label>
			<input type="date" name= "fecha" id ="fecha">
		</div>
	</div> -->

   <!--    -->
<div class="accordion" id="accordionClientes01">
  <form action="index.php?page=cliente-insertar" method="POST">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" 
      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <h4 class= "col-10">1. Datos de la Empresa Solicitante</h4>
        <h4 class= "col-2"> <span class="badge text-bg-warning"></span></h4>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionClientes01">
      <div class="accordion-body">
    
<div class="row">
		<div class="col">
			<label>Monto Solicitado:</label>
			<input type="number" placeholder="Q.000,000" id= "monto" name="monto">
		</div>
		<div class="col">
			<label>Fecha:</label>
			<input type="date" name= "fecha" id ="fecha">
		</div>
	</div>

        <div class="row control-group container">
						<label><strong>Tipo de Facturación:</strong></label>
						<div class="form-check">
            <input class="form-check-input" type="radio" name="tipoPersona" id="tipoPersona" value="N" >
            <label class="form-check-label" for="exampleRadios1">
              Persona Natural
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="tipoPersona" id="TipoPersona" value="J">
            <label class="form-check-label" for="exampleRadios2">
              Persona Jurídica
            </label>
          </div>
                        <div class="row">
                            <label class="col">NIT:</label>
                            <input class="col" type="text" id="nit" name ="nit">
                        </div>    
                        <div class="row">
                            <label class="col">DPI Representante Legal:</label>
                            <input class="col" type="text" id="dpiRepre" name ="dpiRepre">
                        </div>
                    <div class="row">
                            <label class="col">Nombre o Razón Comercial:</label>
                            <input  class= "col" type="text" id="razon" name ="razon">
                    </div>
                    <div class="row">
                            <label class="col">Nombre Comercial:</label>
                            <input  class= "col" type="text" id="nombreComercial" name ="nombreComercial">
                    </div>
                    <div class="row">
                            <label class="col">Dirección:</label>
                            <input  class= "col" type="text" id="direccion" name ="direccion">
                    </div>
                    <div class="row">
                            <label class="col">Teléfono:</label>
                            <input  class= "col" type="text" id="tel" name ="tel">
                    </div>
			    </div>
		    </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        
        </div>
        </form>
      </div>
      </div>
    </div>
  </div>

</div>
</main>