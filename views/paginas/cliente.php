<?php
$usuario_id = $_SESSION['id_usuario'];
?>

<main role="main" class="container">
	<div class="row">
		<span class="text-bg-success"><strong>Solicitud de Crédito</strong> </span> 
		<div class="col">
			<label>Monto Solicitado:</label>
			<input type="number">
		</div>
		<div class="col">
			<label>Fecha:</label>
			<input type="date">
		</div>
	</div><!-- /.row -->
</br>
	<div class="row control-group">
			<span class="text-bg-success"><strong>1. Datos de la Emprea Solicitante</strong> </span> 
				<div class="row">
					<div class="col-4">
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
					</div>
				</div>
	</div>
	<div class="row control-group">
		<div>
		<label class="col-1">NIT:</label>
			<input class="col-3" type="text" id="nit" name ="nit">
			<label class="col-4">DPI Representante Legal:</label>
			<input class="col-3" type="text" id="dpiRepresentante" name ="dpi">
		</div>
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

	 <!-- 2. Datos del Dueño y Representante legal  -->
</br>
	 <div class="row control-group">
			<span class="text-bg-success"><strong>2. Datos del Dueño y Representante Legal</strong> </span> 
		<div class="row">
			<label class="col">Nombre:</label>
			<input  class= "col" type="text" id="nombreRepre" name ="nombreRepre">
		</div>
		<div class="row">
				<label class="col">Dirección:</label>
				<input  class= "col" type="text" id="dirRepre" name ="dirRepre">
		</div>
		<div class="row">
				<label class="col">Ciudad:</label>
				<input  class= "col" type="text" id="ciudadRepre" name ="ciudadRepre">
		</div>
		<div class="row">
				<label class="col">Teléfono:</label>
				<input  class= "col" type="text" id="telRepre" name ="telRepre">
				<label class="col">Celular:</label>
				<input  class= "col" type="text" id="celRepre" name ="celRepre">
		</div>
		<div class="row">
				<label class="col">Email:</label>
				<input  class= "col" type="text" id="emailRepre" name ="emailRepre">
		</div>
	</div>
 <!-- 3. DATOS DE LA PERSONA RESPONSABLE DE PAGOS -->
 </br>
	 <div class="row control-group">
			<span class="text-bg-success"><strong>3. Datos de la persona responsable de Pagos</strong> </span> 
		<div class="row">
			<label class="col">Nombre:</label>
			<input  class= "col" type="text" id="nombrePagos" name ="nombrePagos">
		</div>
		<div class="row">
				<label class="col">Tel. Oficina:</label>
				<input  class= "col" type="text" id="oficinapagos" name ="oficinapagos">
				<label class="col">Tel. Particular:</label>
				<input  class= "col" type="text" id="partipagos" name ="partipagos">
				<label class="col">Tel. Celular:</label>
				<input  class= "col" type="text" id="celpagos" name ="celpagos">
		</div>
		<div class="row">
				<label class="col">Email:</label>
				<input  class= "col" type="text" id="emailPagos" name ="emailPagos">
		</div> 	
<!-- 4. DATOS DEL LOCAL DE VENTA-->
</br>
	 <div class="row control-group">
			<span class="text-bg-success"><strong>4. Datos del Local de Venta</strong> </span> 
		<div class="row">
			<div class="col">
				<label >Días y horarios de atención al público:</label>
			</div>
			<div class="col">
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
		</div>
		<div class="row">
			<div class="col">
				<label for="">Lunes				de:</label><input type= "time" name="deLunes" id ="deLunes">
				<label for="">		a:</label> <input type= "time" name="aLunes" id ="aLunes">
				</br>
				<label for="">Martes			de:</label><input type= "time" name="deMartes" id ="deMartes">
				<label for="">		a:</label> <input type= "time" name="aMartes" id ="aMartes">
				</br>
				<label for="">Miercoles			de:</label><input type= "time" name="deMartes" id ="deMartes">
				<label for="">		a:</label> <input type= "time" name="aMartes" id ="aMartes">
				</br>
				<label for="">Jueves			de:</label><input type= "time" name="deMartes" id ="deMartes">
				<label for="">		a:</label> <input type= "time" name="aMartes" id ="aMartes">
				</br>
				<label for="">Viernes			de:</label><input type= "time" name="deMartes" id ="deMartes">
				<label for="">		a:</label> <input type= "time" name="aMartes" id ="aMartes">
				</br>
				<label for="">Sábado			de:</label><input type= "time" name="deMartes" id ="deMartes">
				<label for="">		a:</label> <input type= "time" name="aMartes" id ="aMartes">
				</br>
				<label for="">Domingo			de:</label><input type= "time" name="deMartes" id ="deMartes">
				<label for="">		a:</label> <input type= "time" name="aMartes" id ="aMartes">
			</div>
			<div class="col">
				<label >No. de Empleados:	</label>
				<input type="number" id="noEmpleados" name ="noEmpleados">
				</br>
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
			<input class="col-6" type="text" id="ubicacion" name ="ubicacion">
			</div>
		</div>
	</div>
	<!-- 5. REFERENCIAS COMERCIALES-->
</br>	 
</br>	 
	<div class="row control-group">
		<span class="text-bg-success"><strong>5. Referencias Comerciales</strong> </span> 
		Proporcione los datos de tres empresas con las cuales tiene credito vigente
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
		<!-- 6. Autorización del Solicitante-->
</br>	 
</br>	 
	<div class="row control-group">
		<span class="text-bg-success"><strong>AUTORIZACIÓN DEL SOLICITANTE</strong> </span> 
		Autorizo a TUBAGUA, S.A. a coroborar la información aquí presentada a su entera satisfacción y así
		mismo declaro que la información proporcionada en esta solicitud es verdadera
		<table class="table table-success table-striped-columns">
		<tbody>
			<thead>
			<th scope="col">Lugar</th>
			<th scope="col">Fecha</th>
			<th scope="col">Firma</th>
			</thead>
			<tr>
				<td><input type="text"name="lugar" id ="lugar"></td>
				<td><input type="date"name="fecha" id ="fecha"></td>
				<td class = "col-6"> <div id="canvasDiv"></div>
				
                <br>
                <button type="button" class="btn btn-danger" id="reset-btn">Clear</button>
                <button type="button" class="btn btn-success" id="btn-save">Save</button>
	
			</td>
			</tr>
		</tbody>
		</table>
	</div>
	</main><!-- /.container -->
	
