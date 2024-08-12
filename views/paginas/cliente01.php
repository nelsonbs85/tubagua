<?php
$usuario_id = $_SESSION['id_usuario'];
// $permisos = $objPermiso->obtenerPermisos($usuario_id);

// require_once './controllers/CategoriaController.php';
// $objCategoria = new CategoriaController();
// $categorias = $objCategoria->obtenerCategorias();

?>

<main role="main" class="container">
<div class="accordion" id="accordionClientes01">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" 
      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <h4>1. Datos de la Empresa Solicitante</h4>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionClientes01">
      <div class="accordion-body">
        <div class="row control-group container">
						<label><strong>Tipo de Facturación:</strong></label>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="chkNatural">
							<label class="form-check-label" for="flexCheckDefault">
								Persona Natural
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="chkJuridico">
							<label class="form-check-label" for="flexCheckChecked">
								Persona Jurídica
							</label>
						</div>
                        <div class="row">
                            <label class="col">NIT:</label>
                            <input class="col" type="text" id="nit" name ="nit">
                        </div>    
                        <div class="row">
                            <label class="col">DPI Representante Legal:</label>
                            <input class="col" type="text" id="dpiRepresentante" name ="dpi">
                        </div>
                    <div class="row">
                            <label class="col">Nombre o Razón Comercial:</label>
                            <input  class= "col" type="text" id="razon" name ="rzoncomercial">
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
        </div>
    </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionClientes01">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionClientes01">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
</main>