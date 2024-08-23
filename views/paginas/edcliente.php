<?php
error_reporting(E_ALL);
$usuario_id = $_SESSION['id_usuario'];
// $permisos = $objPermiso->obtenerPermisos($usuario_id);
$idform =(int)$_GET["id"];
require_once './controllers/ClienteController.php';
 $objCliente = new ClienteController();
 $formularios = $objCliente->obtenerFormulario($idform);
 while ($row = $formularios->fetch()) {
  $monto = $row[2];
  $fechaSolicitud = $row[3];
  $tipoFact = $row[4];
  $nitCliente = $row[5];
  $dpiRepresentanteLegal = $row[6];
  $razonSocialCliente = $row[7];
  $nombreComercial = $row[8];
  $direccionCliente = $row[9];
  $telefonoCliente = $row[10];
  $nombreRepre = $row[11];
  $direccionRepre =  $row[12];
  $ciudadRepre =  $row[13];
  $telefonoRepre =  $row[14];
  $celularRepre =  $row[15];
  $emailRepre =  $row[16];
  $nombrePagos =  $row[17];
  $telOficinaPagos =  $row[18];
  $telParticularPagos =  $row[19];
  $telCelularPagos =  $row[20];
  $emailPagos =  $row[21];
  $horarios =  ($row[22]); //json
  $exterior =  $row[23];
  $localSucursales =  $row[24];
  $localCuantos = $row[25];
  $ubicacionSucursales =  $row[26];
  $noEmpleados =  $row[27];
  $jsonHorario = json_decode($horarios,false);

    $referencias = ($row[28]);

  $jsonReferencias = json_decode($referencias,false);
  $lugarAutorizacion = $row[29];
  $fechaAutorizacion = $row[30];
  $Autorizacion = $row[31];
  $firma = $row[32];
  $rtu = $row[33];
  $patente = $row[34];
  $refe1 = $row[35];
  $refe2 = $row[36];
  $refe3 = $row[37];
  //var_dump($jsonHorario->{'lunesde'});
}

?>
<main role="main" class="container">
	<div class="row-2" style="height: 100px;"></div>
	<div class="row-2">
		<div class="accordion" id="accordionClientes01">
			<form action="index.php?page=cliente-editar" method="POST">
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" 
						data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">		  
							<h4 class= "col-10">1. Datos de la Empresa Solicitante: </h4>
							<h4 class= "col-2"> <span class="badge text-bg-warning"><?php echo "Solicitud #" .$_GET["id"]; ?></span></h4>
						</button>
					</h2>
					<input  class="form-control" type  ="hidden" value =" <?php echo $idform?>" name="idform" id ="idform" >
					<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionClientes01">
						<div class="accordion-body">
							<div class="row">
								<span class="text-bg-success"><h4><strong>Solicitud de Crédito</strong></h4> </span> 
								<div class="col">
									<label>Monto Solicitado:</label>
									<input type ="number" placeholder="Q.000,000" id= "monto" name="monto" class=" col form-control" value = "<?php echo number_format($monto, 2, '.', ''); ?>">
								</div>
							  <div class="col">
									<label>Fecha:</label>
									<input  class="form-control col" type ="date" name= "fecha" id ="fecha" value ="<?php echo $fechaSolicitud ?>">
                </div>
						</div>
					</div>
					<div class="row control-group container">
							<label><strong>Tipo de Facturación:</strong></label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="tipoPersona" id="tipoPersona" value="N" 
									<?php if ($tipoFact=='N'){
										echo 'Checked';
										}
									?>
								>
								<label class="form-check-label" for="exampleRadios1">
									Persona Natural
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="tipoPersona" checked id="TipoPersona" value="J"
									<?php if ($tipoFact=='J'){
									echo 'Checked';
									}
								?>
								>
								<label class="form-check-label" for="exampleRadios2">
									Persona Jurídica
								</label>
							</div>            
							<div class="row">
								<label class="col">NIT:</label>
								<input  class="col form-control"   type="text" id="nit" name ="nit" value ="<?php echo $nitCliente ?>">
							</div>    
							<div class="row">
								<label class="col">DPI Representante Legal:</label>
								<input  class="col form-control"   type="text" id="dpiRepre" name ="dpiRepre" value ="<?php echo $dpiRepresentanteLegal ?>">
							</div>
							<div class="row">
								<label class="col">Nombre o Razón Comercial:</label>
								<input  class= "col form-control" type="text" id="razon" name ="razon" value ="<?php echo $razonSocialCliente ?>">
							</div>
							<div class="row">
								<label class="col ">Nombre Comercial:</label>
								<input  class= "col form-control" type="text" id="nombreComercial" name ="nombreComercial" value ="<?php echo $razonSocialCliente ?>">
							</div>
							<div class="row">
								<label class="col">Dirección:</label>
									<input  class= "col form-control" type="text" id="direccion" name ="direccion" value ="<?php echo $direccionCliente ?>">
							</div>
							<div class="row">
								<label class="col">Teléfono:</label>
								<input  class= "col form-control" type="text" id="tel" name ="tel" value ="<?php echo $telefonoCliente ?>">
							</div>
						</div>
						<button type="submit" class="btn btn-primary" <?php if ($Autorizacion=='A'){echo 'disabled';}else{echo '';} ?>>Guardar</button>
					</div>       
				</div><!-- acordion item 1  -->
      <!-- acordeon 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h4>2. Datos del Dueño o Representante Legal</h4>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionClientes01">
              <div class="accordion-body">
                <div class="row form-group container">
                  <div class="row">
                    <label class="col">Nombre:</label>
                    <input class= "col form-control" type="text" id="nombreRepre" name ="nombreRepre" value ="<?php echo $nombreRepre ?>">
                  </div>
                  <div class="row">
                    <label class="col">Dirección:</label>
                    <input  class= "col form-control" type="text" id="dirRepre" name ="direccionRepre" value ="<?php echo $direccionRepre ?>">
                  </div>
                  <div class="row">
                    <label class="col">Ciudad:</label>
                    <input  class= "col form-control" type="text" id="ciudadRepre" name ="ciudadRepre" value ="<?php echo $ciudadRepre ?>">
                  </div>
                  <div class="row">
                    <label class="col">Teléfono:</label>
                    <input  class= "col form-control" type="text" id="telRepre" name ="telefonoRepre" value ="<?php echo $telefonoRepre ?>">
                  </div>    
                  <div class="row">		
                    <label class="col">Celular:</label>
                    <input  class= "col form-control" type="text" id="celRepre" name ="celularRepre" value ="<?php echo $celularRepre ?>">
                  </div>     
                  <div class="row">
                    <label class="col">Email:</label>
                    <input  class= "col form-control" type="email" id="emailRepre" name ="emailRepre" value ="<?php echo $emailRepre ?>">
                  </div>
                  <div class="col-2">
                    <button type="submit" class="btn btn-primary" <?php if ($Autorizacion=='A'){echo 'disabled';}else{echo '';} ?>>Guardar</button>
                  </div>             
                </div>
              </div>
            </div>
        </div><!-- acordion item 2  -->
        <!-- Acordeon 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h4>3. Datos de la persona responsable de Pagos</h4>
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionClientes01">
              <div class="accordion-body">  
                  <div class="row form-group  container">
                      <div class="row">
                        <label class="col">Nombre:</label>
                        <input  class= "col form-control" type="text" id="nombrePagos" name ="nombrePagos" value ="<?php echo $nombrePagos ?>">
                      </div>
                      <div class="row">
                        <label class="col">Tel. Oficina:</label>
                        <input  class= "col form-control" type="text" id="telOficinaPagos" name ="telOficinaPagos" value ="<?php echo $telOficinaPagos ?>">
                      </div>
                      <div class="row">
                        <label class="col">Tel. Particular:</label>
                        <input  class= "col form-control" type="text" id="telParticularPagos" name ="telParticularPagos" value ="<?php echo $telParticularPagos ?>">
                      </div>
                      <div class="row">
                        <label class="col">Tel. Celular:</label>
                        <input  class= "col form-control" type="text" id="telCelularPagos" name ="telCelularPagos" value ="<?php echo $telCelularPagos ?>">
                      </div>
                      <div class="row">
                        <label class="col">Email:</label>
                        <input  class= "col form-control" type="email" id="emailPagos" name ="emailPagos" value ="<?php echo $emailPagos ?>">
                      </div> 	
                      <div class="col-2">
                        <button type="submit" class="btn btn-primary" <?php if ($Autorizacion=='A'){echo 'disabled';}else{echo '';} ?>>Guardar</button>
                      </div>             
                </div>
            </div>
          </div>
      </div><!-- acordion item 2  -->
        <!-- acordeon 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <h4>4. Datos del Local de Venta</h4>
              </button>
            </h2>
          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionClientes01">
            <div class="accordion-body">
              <div class="row form-group  container">
                      <label >Días y horarios de atención al público:</label>
                      <div class="row">
                          <label class="col" for="">Lunes de:</label>
                          <input  class="col form-control" type ="time" name="lunesde" id="lunesde"  value="<?php echo $jsonHorario->{'lunesde'};?>">
                          <label class="col" for="">a:</label>
                          <input  class="col form-control" type ="time" name="lunesa" id="lunesa" value="<?php echo $jsonHorario->{'lunesa'};?>">
                      </div>
                      <div class="row">
                          <label class="col" for="">Martes de:</label>
                          <input  class="col form-control" type ="time" name="martesde" id="martesde" value="<?php echo $jsonHorario->{'martesde'};?>">
                          <label class="col" for="">a:</label>
                          <input  class="col form-control" type ="time" name="martesa" id="martesa" value="<?php echo $jsonHorario->{'martesa'};?>">
                      </div>
                      <div class="row">
                          <label class="col" for="">Miércoles de:</label>
                          <input  class="col form-control" type ="time" name="miercolesde" id="miercolesde" value="<?php echo $jsonHorario->{'miercolesde'};?>">
                          <label class="col" for="">a:</label>
                          <input  class="col form-control" type ="time" name="miercolesa" id="miercolesa" value="<?php echo $jsonHorario->{'miercolesa'};?>">
                      </div>
                      <div class="row">
                          <label class="col" for="" >Jueves de:</label>
                          <input  class="col form-control" type ="time" name="juevesde" id="juevesde" value="<?php echo $jsonHorario->{'juevesde'};?>">
                          <label class="col" for="">a:</label>
                          <input  class="col form-control" type ="time" name="juevesa" id="juevesa" value="<?php echo $jsonHorario->{'juevesa'};?>">
                      </div>
                      <div class="row">
                          <label class="col" for="">Viernes de:</label>
                          <input  class="col form-control" type ="time"  name="viernesde" id="viernesde" value="<?php echo $jsonHorario->{'viernesde'};?>">
                          <label class="col" for="">a:</label>
                          <input  class="col form-control" type ="time"  name="viernesa" id="viernesa" value="<?php echo $jsonHorario->{'viernesa'};?>">
                      </div>
                      <div class="row">
                          <label class="col" for="">Sábado de:</label>
                          <input  class="col form-control" type ="time" name="sabadode" id="sabadode" value="<?php echo $jsonHorario->{'sabadode'};?>">
                          <label class="col" for="">a:</label>
                          <input  class="col form-control" type ="time" name="sabadoa" id="sabadoa" value="<?php echo $jsonHorario->{'sabadoa'};?>">
                      </div>
                      <div class="row">
                          <label class="col" for="">Domingo de:</label>
                          <input  class="col form-control" type ="time"  name="domingode" id="domingode" value="<?php echo $jsonHorario->{'domingode'};?>">
                          <label class="col" for="">a:</label>
                          <input  class="col form-control" type ="time"  name="domingoa" id="domingoa" value="<?php echo $jsonHorario->{'domingoa'};?>">
                      </div>
                      <label><strong>¿Su local tiene señalamiento visible al exterior?</strong></label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" checked name="localExterior" id="localExterior" value="S" 
                          <?php if ($exterior=='S'){
                              echo 'Checked';
                            }
                          ?>
                        >
                        <label class="form-check-label" for="exampleRadios1">
                        Si
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="localExterior" id="localExterior" value="N"
                        <?php if ($exterior=='N'){
                                    echo 'Checked';
                        }
                        ?>
                        >
                        <label class="form-check-label" for="exampleRadios2">
                        No
                        </label>
                      </div>         
                      <div class ="row">
                        <label class="col" >No. de Empleados:	</label>
                        <input class="col form-control" type="number" id="noEmpleados" name ="noEmpleados" value = "<?php echo $noEmpleados?>">
                        
                      </div>
                      <br>
                      <label><strong>¿Tiene Sucursales?</strong></label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio"  checked name="localSucursales" id="localSucursales" value="S" 
                        <?php if ($localSucursales=='S'){
                              echo 'Checked';
                            }
                          ?>
                        >
                        <label class="form-check-label" for="exampleRadios1">
                        Si
                        </label>
                      </div>
                      <div class ="row">
                        <label class="col">¿Cuantos?</label>
                        <input  class="col form-control" type ="number" name="localCuantos" id="localCuantos" value = "<?php echo $localCuantos?>">
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="localSucursales" id="localSucursales" value="N"
                          <?php if ($localSucursales=='N'){
                                echo 'Checked';
                              }
                            ?>
                          >
                          
                          <label class="form-check-label" for="exampleRadios2">
                            No
                          </label>
                      </div>           
                      <div class="row">
                        <label class="col">Ubicación de Sucursales:	</label>
                        <textarea class="col form-control"cols="10" rows="3" id="ubicacionsucursales" name ="ubicacionSucursales" 
                        > <?php echo trim($ubicacionSucursales)?></textarea>
                      </div>
                      <div class="col-2">
                          <button type="submit" class="btn btn-primary" <?php if ($Autorizacion=='A'){echo 'disabled';}else{echo '';} ?>>Guardar</button>
                      </div>             
             </div>
            </div>
          </div> <!-- colapse item 4 -->
        </div> <!-- acordion item 4 -->
        <!-- acordeon 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <h4>5. Referencias Comerciales</h4>
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse container" data-bs-parent="#accordionClientes01">
              <div class="accordion-body">
                <table class="table table-success table-striped-columns">
                  <tbody> 
                    <tr>
                      <td>Empresa:</td>
                      <td  width="50%" ><input class="col form-control"type="text"name="emp1" id ="emp1" value="<?php echo $jsonReferencias->{'emp1'};?>"></td>
                      <td>Contacto:</td>
                      <td width="50%"><input class="col form-control" type="text" name="cnt1" id ="cnt1" value="<?php echo $jsonReferencias->{'cnt1'};?>"></td>
                    </tr>
                    <tr>
                      <td>Ciudad:</td>
                      <td  width="50%" ><input class="col form-control"type="text"name="city1" id ="city1" value="<?php echo $jsonReferencias->{'city1'};?>"></td>
                      <td>Dirección:</td>
                      <td width="50%"><input class="col form-control" type="text" name="dir1" id ="dir1" value="<?php echo $jsonReferencias->{'dir1'};?>"></td>
                    </tr>
                    <tr>
                      <td>Telefono:</td>
                      <td  width="50%" ><input class="col form-control"type="text"name="tel1" id ="tel1" value="<?php echo $jsonReferencias->{'tel1'};?>"></td>
                      <td>Email:</td>
                      <td width="50%"><input class="col form-control" type="text" name="email1" id ="email1" value="<?php echo $jsonReferencias->{'email1'};?>"> </td>
                    </tr>
                    <tr><td></td></tr>
                    <tr>
                      <td>Empresa:</td>
                      <td  width="50%" ><input class="col form-control"type="text"name="emp2" id ="emp2" value="<?php echo $jsonReferencias->{'emp2'};?>"></td>
                      <td>Contacto:</td>
                      <td width="50%"><input class="col form-control" type="text" name="cnt2" id ="cnt2" value="<?php echo $jsonReferencias->{'cnt2'};?>"></td>
                    </tr>
                    <tr>
                      <td>Ciudad:</td>
                      <td  width="50%" ><input class="col form-control"type="text"name="city2" id ="city2" value="<?php echo $jsonReferencias->{'city2'};?>"></td>
                      <td>Dirección:</td>
                      <td width="50%"><input class="col form-control" type="text" name="dir2" id ="dir2" value="<?php echo $jsonReferencias->{'dir2'};?>"></td>
                    </tr>
                    <tr>
                      <td>Telefono:</td>
                      <td  width="50%" ><input class="col form-control"type="text"name="tel2" id ="tel2" value="<?php echo $jsonReferencias->{'tel2'};?>"></td>
                      <td>Email:</td>
                      <td width="50%"><input class="col form-control" type="text" name="email2" id ="email2" value="<?php echo $jsonReferencias->{'email2'};?>"></td>
                    </tr>
                    <tr><td></td></tr>
                    <tr>
                      <td>Empresa:</td>
                      <td  width="50%" ><input class="col form-control"type="text"name="emp3" id ="emp3" value="<?php echo $jsonReferencias->{'emp3'};?>"></td>
                      <td>Contacto:</td>
                      <td width="50%"><input class="col form-control" type="text" name="cnt3" id ="cnt3" value="<?php echo $jsonReferencias->{'cnt3'};?>"></td>
                    </tr>
                    <tr>
                      <td>Ciudad:</td>
                      <td  width="50%" ><input class="col form-control"type="text"name="city3" id ="city3" value="<?php echo $jsonReferencias->{'city3'};?>"></td>
                      <td>Dirección:</td>
                      <td width="50%"><input class="col form-control" type="text" name="dir3" id ="dir3" value="<?php echo $jsonReferencias->{'dir3'};?>"></td>
                    </tr>
                    <tr>
                      <td>Telefono:</td>
                      <td  width="50%" ><input class="col form-control"type="text"name="tel3" id ="tel3" value="<?php echo $jsonReferencias->{'tel3'};?>"></td>
                      <td>Email:</td>
                      <td width="50%"><input class="col form-control" type="text" name="email3" id ="email3" value="<?php echo $jsonReferencias->{'email3'};?>"></td>
                    </tr>
                  </tbody>
                </table>
                <div class="col-2">
                    <button type="submit" class="btn btn-primary" <?php if ($Autorizacion=='A'){echo 'disabled';}else{echo '';} ?>>Guardar</button>
                </div>             
              </div>
            </div>
        </div>
      </form> <!--Form principal -->
        <!-- carga de archivos -->
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                <h4>Requisitos Adicionales</h4>
              </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse container" data-bs-parent="#accordionClientes01">
              <div class="accordion-body">
                  <table class="table table-success table-striped-columns">
                    <tbody>
                    <td>
                        RTU
                      </td>
                      <td>
                        <form action="index.php?page=subir-archivo"  method="post" enctype="multipart/form-data">
                          <input type="file" name="uploadfile" id= "uploadfile" >
                          <input type="hidden" name ="idForm" id="idForm" value = "<?php echo $idform;?>">
                          <input type="hidden" name ="orden" id="orden" value = '1'>
                          <input class="btn btn-primary" type="submit" value="Subir Archivo"  <?php if ($rtu) { echo 'disabled';}?>>
                        </form>
                      </td>
                      <td>
                      <?php if (!$rtu) { ?> 
                      <i class="bi bi-ban"></i>
                      <?php }else{ ?>
                        <a href="<?php echo $rtu;?>">Descargar
                        <i class="bi bi-check-circle-fill"></i></a>
                      <?php } ?>
                      </td>          
                    </tr>
                      <td>
                        Patente de Comercio y Empresa
                      </td>
                      <td>
                        <form action="index.php?page=subir-archivo"  method="post" enctype="multipart/form-data">
                          <input type="file" name="uploadfile" id= "uploadfile" >
                          <input type="hidden" name ="idForm" id="idForm" value = "<?php echo $idform;?>">
                          <input type="hidden" name ="orden" id="orden" value = '2'>
                          <input class="btn btn-primary" type="submit" value="Subir Archivo"  <?php if ($patente) { echo 'disabled';}?>>
                        </form>
                      </td>
                      <td>
                      <?php if (!$patente) { ?> 
                      <i class="bi bi-ban"></i>
                      <?php }else{ ?>
                        <a href="<?php echo $patente;?>">Descargar
                        <i class="bi bi-check-circle-fill"></i></a>
                      <?php } ?>
                      </td>
                    </tr>
                    <td>
                        Referencia # 1
                      </td>
                      <td>
                      <form action="index.php?page=subir-archivo"  method="post" enctype="multipart/form-data">
                          <input type="file" name="uploadfile" id= "uploadfile" >
                          <input type="hidden" name ="idForm" id="idForm" value = "<?php echo $idform;?>">
                          <input type="hidden" name ="orden" id="orden" value = '3'>
                          <input class="btn btn-primary" type="submit" value="Subir Archivo"  <?php if ($refe1) { echo 'disabled';}?>>
                        </form>
                      </td>
                      <td>
                      <?php if (!$refe1) { ?> 
                      <i class="bi bi-ban"></i>
                      <?php }else{ ?>
                        <a href="<?php echo $refe1; ?>">Descargar
                        <i class="bi bi-check-circle-fill"></i></a>
                      <?php } ?>
                      </td>
                    </tr>    
                    </tr>
                    <td>
                        Referencia # 2
                      </td>
                      <td>
                      <form action="index.php?page=subir-archivo"  method="post" enctype="multipart/form-data">
                          <input type="file" name="uploadfile" id= "uploadfile" >
                          <input type="hidden" name ="idForm" id="idForm" value = "<?php echo $idform;?>">
                          <input type="hidden" name ="orden" id="orden" value = '4'>
                          <input class="btn btn-primary" type="submit" value="Subir Archivo"  <?php if ($refe2) { echo 'disabled';}?>>
                      </form>
                      </td>
                      <td>
                      <?php if (!$refe2) { ?> 
                      <i class="bi bi-ban"></i>
                      <?php }else{ ?>
                        <a href="<?php echo $refe2; ?>">Descargar
                        <i class="bi bi-check-circle-fill"></i></a>
                      <?php } ?>
                      </td>
                    </tr>    
                    </tr>
                    <td>
                        Referencia # 3
                      </td>
                      <td>
                      <form action="index.php?page=subir-archivo"  method="post" enctype="multipart/form-data">
                          <input type="file" name="uploadfile" id= "uploadfile" >
                          <input type="hidden" name ="idForm" id="idForm" value = "<?php echo $idform;?>">
                          <input type="hidden" name ="orden" id="orden" value = '5'>
                          <input class="btn btn-primary" type="submit" value="Subir Archivo"  <?php if ($refe3) { echo 'disabled';}?>>
                        </form>
                      </td>
                      <td>
                      <?php if (!$refe3) { ?> 
                      <i class="bi bi-ban"></i>
                      <?php }else{ ?>
                        <a href="<?php echo $refe3; ?>">Descargar
                        <i class="bi bi-check-circle-fill"></i></a>
                      <?php } ?>
                      </td>
                    </tr>    
                    
                    </tbody>
                  </table>
              </div>
            </div>
        </div> <!-- acordion item 6 -->
        
 <!-- acordeon 6 -->
 <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed danger" type="button" data-bs-toggle="collapse" 
      data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        <h4>Autorización del Solicitante</h4>
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionClientes01">
      <div class="accordion-body">
		      <div class="row control-group container">
        
			      Autorizo a TUBAGUA, S.A. a coroborar la información aquí presentada a su entera satisfacción y así
			      mismo declaro que la información proporcionada en esta solicitud es verdadera
            
            <table class="table table-success table-striped-columns">
              <tbody>
              <thead>
                <th scope="col">Lugar y Fecha</th>
                <th scope="col">Firma</th>
              </thead>
              <tr>
              <?php if ($Autorizacion!='A'){?>
                <form id="signatureform" action="index.php?page=autoriza-form" method="POST">
                  <td>
                  <input  class="form-control" type  ="hidden" value =" <?php echo $idform?>" name="idform" id ="idform" >

                    <input  class="form-control" type ="text"name="lugarAutorizacion" id ="lugarAutorizacion"></br>
                    <input  class="form-control" type ="date"name="fechaAutorizacion" id ="fechaAutorizacion">
                  </td>
                  <td > 
                    <input  class="form-control" type ="hidden" name="signaturesubmit" value="1">  
                    <canvas id="signature-pad"  style="border:1px solid #000;"></canvas>
                    <!-- <button id="save-svg">Autorizar</button> -->
                    <textarea  id="svg-data"  name="svg-data" readonly style="display:none"></textarea>                   
                    <div class="row">
                        <div class="col-2">
                          <button type="submit" id="save-svg" class="btn btn-primary" >Autorizar</button>                 
                        </div>    
              </form>
                        <div class="col-2"></div>
                
                        <div class="col-2">
                          <button type="submit" id="clear-svg" class="btn btn-danger" >Limpiar</button>
                        </div> 
                        
                    </div>
                    
                  </td>
                  
                  <?php 
                    }else{            
                  ?>
                  <td>
                      <input  class="form-control" type ="text"name="lugarAutorizacion" id ="lugarAutorizacion" value = "<?php echo $lugarAutorizacion ?>"></br>
                      <input  class="form-control" type ="date"name="fechaAutorizacion" id ="fechaAutorizacion" value = "<?php echo $fechaAutorizacion ?>">      
                  </td>
				         <td class = "col"> 
                    <div class ="">
                    <?php echo $firma ?>
                     <!-- <img src="<?php echo $firma ?>" width="100%" height="100%" style="border:1px solid #000; background-size:cover"> -->
                    </div>
                    
                    <!-- <img src="<?php echo $firma ?>" alt=""> -->
                  </td>
                  
              <?php } ?>
			      	</tbody>
			      </table>
          </div>
       </div>
  </div>
 </div>
 <!-- acordeon 6 -->
      <!-- carga de archivos -->
                <style>
    
                    body {
                      /* display: flex; */
                      flex-direction: column;
                      align-items: center;
                      justify-content: center;
                      height: 100vh; 
                      margin: 0;
                      font-family: Arial, sans-serif;
                      }
                      .svg-background {
                      width: 300px;
                      height: 200px;
                      background-image: url('<?php echo $firma ?>');
                      background-size: contain;
                      background-repeat: no-repeat;
                  }

                      canvas {
                          /* margin-bottom: 20px; */
                      }

                      textarea {
                          /* margin-top: 20px; */
                          /* width: 40; */
                      }
                  </style>
                  <script>
                        const canvas = document.getElementById('signature-pad');
                        const signaturePad = new SignaturePad(canvas);

                        document.getElementById('save-svg').addEventListener('click', () => {
                          const svgData = signaturePad.toDataURL('image/svg+xml');
                            var dataURI =svgData;
                            
                            var svg = atob(dataURI.replace(/data:image\/svg\+xml;base64,/, ''));
                            let expr=/viewBox=\"0 0 \d{1,3} \d{1,3}/gm;
                           svg = svg.replace(expr,'viewBox=\"0 0 300 150');
                           console.log(svg);
                            document.getElementById('svg-data').value = svg;
                        });
                        document.getElementById('clear-svg').addEventListener('click', () => {
                          //  const svgData = signaturePad.toDataURL('image/svg+xml');
                            //document.getElementById('svg-data').value = svgData;
                            const context = canvas.getContext('2d');
                            context.clearRect(0, 0, canvas.width, canvas.height);
                        });
                  </script>
  </div>    <!-- acordeon principal -->
  </div>    <!-- row 2 -->
</main>