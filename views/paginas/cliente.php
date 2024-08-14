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
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <h4>2. Datos del Dueño o Representante Legal</h4>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionClientes01">
      <div class="accordion-body">
      <div class="row control-group">
		<div class="row">
			<label class="col-3">Nombre:</label>
			<input  class= "col-9" type="text" id="nombreRepre" name ="nombreRepre">
		</div>
		<div class="row">
				<label class="col-3">Dirección:</label>
				<input  class= "col" type="text" id="dirRepre" name ="dirRepre">
		</div>
		<div class="row">
				<label class="col-3">Ciudad:</label>
				<input  class= "col-9" type="text" id="ciudadRepre" name ="ciudadRepre">
		</div>
		<div class="row">
				<label class="col-3">Teléfono:</label>
				<input  class= "col-9" type="text" id="telRepre" name ="telRepre">
    </div>    
    <div class="row">		
        <label class="col-3">Celular:</label>
				<input  class= "col-9" type="text" id="celRepre" name ="celRepre">
    </div>
		<div class="row">
				<label class="col-3">Email:</label>
				<input  class= "col-9" type="text" id="emailRepre" name ="emailRepre">
		</div>
	</div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <h4>3. Datos de la persona responsable de Pagos</h4>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionClientes01">
      <div class="accordion-body">
      <div class="row control-group">
		<div class="row">
			<label class="col-4">Nombre:</label>
			<input  class= "col-8" type="text" id="nombrePagos" name ="nombrePagos">
		</div>
		<div class="row">
				<label class="col-4">Tel. Oficina:</label>
				<input  class= "col-8" type="text" id="oficinapagos" name ="oficinapagos">
    </div>
    <div class="row">
				<label class="col-4">Tel. Particular:</label>
				<input  class= "col-8" type="text" id="partipagos" name ="partipagos">
        </div>
      <div class="row">
				<label class="col-4">Tel. Celular:</label>
				<input  class= "col-8" type="text" id="celpagos" name ="celpagos">
		</div>
		<div class="row">
				<label class="col-4">Email:</label>
				<input  class= "col-8" type="text" id="emailPagos" name ="emailPagos">
		</div> 	
</div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        <h4>4. Datos del Local de Venta</h4>
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionClientes01">
      <div class="accordion-body">
       <div class="row">
          <label >Días y horarios de atención al público:</label>
            <div class="row">
                <label class="col-3" for="">Lunes de:</label>
                <input type="time" class ="col-3" name="lunesde" id="lunesde">
                <label class="col-1" for="">a:</label>
                <input type="time" class ="col-3" name="lunesa" id="lunesa">
            </div>
            <div class="row">
                <label class="col-3" for="">Martes de:</label>
                <input type="time" class ="col-3" name="martesde" id="martesde">
                <label class="col-1" for="">a:</label>
                <input type="time" class ="col-3" name="martesa" id="martesa">
            </div>
            <div class="row">
                <label class="col-3" for="">Miércoles de:</label>
                <input type="time" class ="col-3" name="miercolesde" id="miercolesde">
                <label class="col-1" for="">a:</label>
                <input type="time" class ="col-3" name="miercolesa" id="miercolesa">
            </div>
            <div class="row">
                <label class="col-3" for="">Jueves de:</label>
                <input type="time" class ="col-3" name="juevesde" id="juevesde">
                <label class="col-1" for="">a:</label>
                <input type="time" class ="col-3" name="juevesa" id="juevesa">
            </div>
            <div class="row">
                <label class="col-3" for="">Viernes de:</label>
                <input type="time" class ="col-3" name="viernesde" id="viernesde">
                <label class="col-1" for="">a:</label>
                <input type="time" class ="col-3" name="viernesa" id="viernesa">
            </div>
            <div class="row">
                <label class="col-3" for="">Sábado de:</label>
                <input type="time" class ="col-3" name="sabadode" id="sabadode">
                <label class="col-1" for="">a:</label>
                <input type="time" class ="col-3" name="sabadoa" id="sabadoa">
            </div>
            <div class="row">
                <label class="col-3" for="">Domingo de:</label>
                <input type="time" class ="col-3" name="domingode" id="domingode">
                <label class="col-1" for="">a:</label>
                <input type="time" class ="col-3" name="domingoa" id="domingoa">
            </div>
          <label >Su local tiene señalamiento visible al exterior? </label>
          <div class="col-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="viSi">
                <label class="form-check-label" for="flexCheckDefault">
                SI</label>
              </div>
          </div>
          <div class="col-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="viNo">
                <label class="form-check-label" for="flexCheckChecked">
                  NO
                </label>
              </div>
          </div>
        </div>
        <label >No. de Empleados:	</label>
				<input type="number" id="noEmpleados" name ="noEmpleados">
        <br>
        <label >Tiene Sucursales? </label>
				<div class="col-4">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="viSi">
							<label class="form-check-label" for="flexCheckDefault">
							SI</label>
							<label >¿Cuantas?:	</label>
							<input type="number" id="cuantas" name ="cuantas">
						</div>
				</div>
				<div class="col-4">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="viNo">
							<label class="form-check-label" for="flexCheckChecked">
								NO
							</label>
						</div>
				</div>
				
			<label >Ubicación de Sucursales:	</label>
      <br>
			<textarea class="col-10" id="ubicacion" name ="ubicacion" ></textarea>
		  
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
       data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        <h4>5. Referencias Comerciales</h4>
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionClientes01">
      <div class="accordion-body">
      <table class="table table-success table-striped-columns">
          <tbody>
            <tr>
              <td>Empresa:</td>
              <td  width="50%" ><input class="col-12"type="text"name="emp1" id ="emp1"></td>
              <td>Contacto:</td>
              <td width="50%"><input class="col-12" type="text" name="cnt1" id ="cnt1"></td>
            </tr>
            <tr>
              <td>Ciudad:</td>
              <td  width="50%" ><input class="col-12"type="text"name="city1" id ="city1"></td>
              <td>Dirección:</td>
              <td width="50%"><input class="col-12" type="text" name="dir1" id ="dir1"></td>
            </tr>
            <tr>
              <td>Telefono:</td>
              <td  width="50%" ><input class="col-12"type="text"name="tel1" id ="tel1"></td>
              <td>Email:</td>
              <td width="50%"><input class="col-12" type="text" name="email1" id ="email1"></td>
            </tr>
            <tr><td></td></tr>
            <tr>
              <td>Empresa:</td>
              <td  width="50%" ><input class="col-12"type="text"name="emp2" id ="emp2"></td>
              <td>Contacto:</td>
              <td width="50%"><input class="col-12" type="text" name="cnt2" id ="cnt2"></td>
            </tr>
            <tr>
              <td>Ciudad:</td>
              <td  width="50%" ><input class="col-12"type="text"name="city2" id ="city2"></td>
              <td>Dirección:</td>
              <td width="50%"><input class="col-12" type="text" name="dir2" id ="dir2"></td>
            </tr>
            <tr>
              <td>Telefono:</td>
              <td  width="50%" ><input class="col-12"type="text"name="tel2" id ="tel2"></td>
              <td>Email:</td>
              <td width="50%"><input class="col-12" type="text" name="email2" id ="email2"></td>
            </tr>
            <tr><td></td></tr>
            <tr>
              <td>Empresa:</td>
              <td  width="50%" ><input class="col-12"type="text"name="emp3" id ="emp3"></td>
              <td>Contacto:</td>
              <td width="50%"><input class="col-12" type="text" name="cnt3" id ="cnt3"></td>
            </tr>
            <tr>
              <td>Ciudad:</td>
              <td  width="50%" ><input class="col-12"type="text"name="city3" id ="city3"></td>
              <td>Dirección:</td>
              <td width="50%"><input class="col-12" type="text" name="dir3" id ="dir3"></td>
            </tr>
            <tr>
              <td>Telefono:</td>
              <td  width="50%" ><input class="col-12"type="text"name="tel3" id ="tel3"></td>
              <td>Email:</td>
              <td width="50%"><input class="col-12" type="text" name="email3" id ="email3"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed danger" type="button" data-bs-toggle="collapse" 
      data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        <h4>Autorización del Solicitante</h4>
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionClientes01">
      <div class="accordion-body">
      <div class="row control-group">
		Autorizo a TUBAGUA, S.A. a coroborar la información aquí presentada a su entera satisfacción y así
		mismo declaro que la información proporcionada en esta solicitud es verdadera
		<table class="table table-success table-striped-columns">
		<tbody>
			<thead>
			<th scope="col">Lugar y Fecha</th>
			<th scope="col">Firma</th>
			</thead>
			<tr>
				<td><input type="text"name="lugar" id ="lugar"></br>
				<input type="date"name="fecha" id ="fecha"></td>
				<td class = "col-6"> <div id="canvasDiv"></div>
  			</td>
			</tr>
		</tbody>
		</table>
	</div> 
      </div>
    </div>
  </div>

</div>
<script>
    $(document).ready(() => {
        var canvasDiv = document.getElementById('canvasDiv');
        var canvas = document.createElement('canvas');
        canvas.setAttribute('id', 'canvas');
        canvasDiv.appendChild(canvas);
        $("#canvas").attr('height', $("#canvasDiv").outerHeight());
        $("#canvas").attr('width', $("#canvasDiv").width());
        if (typeof G_vmlCanvasManager != 'undefined') {
            canvas = G_vmlCanvasManager.initElement(canvas);
        }
        
        context = canvas.getContext("2d");
        $('#canvas').mousedown(function(e) {
            var offset = $(this).offset()
            var mouseX = e.pageX - this.offsetLeft;
            var mouseY = e.pageY - this.offsetTop;

            paint = true;
            addClick(e.pageX - offset.left, e.pageY - offset.top);
            redraw();
        });

        $('#canvas').mousemove(function(e) {
            if (paint) {
                var offset = $(this).offset()
                //addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop, true);
                addClick(e.pageX - offset.left, e.pageY - offset.top, true);
                console.log(e.pageX, offset.left, e.pageY, offset.top);
                redraw();
            }
        });

        $('#canvas').mouseup(function(e) {
            paint = false;
        });

        $('#canvas').mouseleave(function(e) {
            paint = false;
        });

        var clickX = new Array();
        var clickY = new Array();
        var clickDrag = new Array();
        var paint;

        function addClick(x, y, dragging) {
            clickX.push(x);
            clickY.push(y);
            clickDrag.push(dragging);
        }

        $("#reset-btn").click(function() {
            context.clearRect(0, 0, window.innerWidth, window.innerWidth);
            clickX = [];
            clickY = [];
            clickDrag = [];
        });

        $(document).on('click', '#btn-save', function() {
            var mycanvas = document.getElementById('canvas');
            var img = mycanvas.toDataURL("image/png");
            anchor = $("#signature");
            anchor.val(img);
            $("#signatureform").submit();
        });

        var drawing = false;
        var mousePos = {
            x: 0,
            y: 0
        };
        var lastPos = mousePos;

        canvas.addEventListener("touchstart", function(e) {
            mousePos = getTouchPos(canvas, e);
            var touch = e.touches[0];
            var mouseEvent = new MouseEvent("mousedown", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }, false);


        canvas.addEventListener("touchend", function(e) {
            var mouseEvent = new MouseEvent("mouseup", {});
            canvas.dispatchEvent(mouseEvent);
        }, false);


        canvas.addEventListener("touchmove", function(e) {

            var touch = e.touches[0];
            var offset = $('#canvas').offset();
            var mouseEvent = new MouseEvent("mousemove", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }, false);



        // Get the position of a touch relative to the canvas
        function getTouchPos(canvasDiv, touchEvent) {
            var rect = canvasDiv.getBoundingClientRect();
            return {
                x: touchEvent.touches[0].clientX - rect.left,
                y: touchEvent.touches[0].clientY - rect.top
            };
        }


        var elem = document.getElementById("canvas");

        var defaultPrevent = function(e) {
            e.preventDefault();
        }
        elem.addEventListener("touchstart", defaultPrevent);
        elem.addEventListener("touchmove", defaultPrevent);


        function redraw() {
            //
            lastPos = mousePos;
            for (var i = 0; i < clickX.length; i++) {
                context.beginPath();
                if (clickDrag[i] && i) {
                    context.moveTo(clickX[i - 1], clickY[i - 1]);
                } else {
                    context.moveTo(clickX[i] - 1, clickY[i]);
                }
                context.lineTo(clickX[i], clickY[i]);
                context.closePath();
                context.stroke();
            }
        }
    })

</script>
</main>