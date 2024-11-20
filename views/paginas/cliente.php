<?php $usuario=$_SESSION['nick']; 
    require_once './controllers/ClienteController.php' ;
    require_once './controllers/ProductoController.php' ; 
    $objClientes=new ClienteController(); 
    $objDatos=new     ProductoController(); 
    $municipios=$objDatos->obtenerDatos('municipio', 'id');
    $getDeptoFactura = 0;
    $getMuniFactura = 0;
    
    
    if (isset($_GET['id'])){
        $id = $_GET['id']; 
        $busqueda = $objClientes->buscaClientebyId($id);
        while ($row = $busqueda->fetch()) {
           $getCodigo = $row[4];
           $getCui = $row[6];
           $getNit = $row[5];
           $getRazonsocial = $row[8];
           $getNombrecomercial = $row[7];
           $getDeptoFactura = $row[18];
           $getMuniFactura = $row[19];
           $getDireccionFactura = $row[15];
           $getLimitecredito = $row[11];        
           $getDiasCredito = $row[12];
        }
    }else{
        $getCodigo = '';
        $getCui=''; 
        $getNit= '';
        $getRazonsocial =''; 
        $getNombrecomercial = '';
        $getDeptoFactura = 0;
        $getMuniFactura = 0;
        $getDireccionFactura ='' ;
        $getLimitecredito ='';        
        $getDiasCredito ='' ;
    }
    ?>

    <main role="main" required class="container">
        <div>
            <h3>
                Agregar Cliente
            </h3>
        </div>
        <?php if (isset($id)){?>
            <input type="hidden" value ="<?php echo $id; ?>" name="idcliente" id ="idcliente">
            <input type="hidden" value ="<?php echo $getMuniFactura; ?>" name="idmunifact" id ="idmunifact">
        <?php }?>
        <form action="index.php?page=cliente-insertar" method="POST">
        <div required class="col-6">

            <label for="codigo">Código:</label>
            <input type="text" name="codigo" id="codigo" value="<?php echo $getCodigo; ?>" required class="form-control">
            <label for="nit">NIT:</label>
            <input type="text" name="nit" id="nit" required class="form-control" value="<?php echo $getNit; ?>">
            <label for="cui">CUI:</label>
            <input type="text" name="cui" id="cui" required class="form-control" value="<?php echo $getCui; ?>">
        </div>
        <div required class="col-10"></div>
        <label for="nombrecomercial">Nombre Comercial:</label>
        <input type="text" name="nombrecomercial" id="nombrecomercial" required value="<?php echo $getNombrecomercial; ?>" class="form-control">

        <label for="razonsocial">Razón Social:</label>
        <input type="text" name="razonsocial" id="razonsocial" required value="<?php echo $getRazonsocial; ?>" class="form-control">
        </div>
        <div required class="col-6"></div>
        <label for="limite">Limite de Crédito:</label>
        <input type="text" name="limite" id="limite" value="<?php echo $getLimitecredito; ?>" required class="form-control">

        <label for="diascredito">Días Crédito:</label>
        <input type="text" name="diascredito" id="diascredito" value="<?php echo $getDiasCredito; ?>" required class="form-control">
        </div>
        <!-- dirección de facturación -->
        <span class="badge bg-primary">Dirección de Facturación</span>
        <div required class="col-10">
            <label for="deptoFactura">Departamento:</label>
            <select class="form-control" aria-label="Default select example" name="deptoFactura" id="deptoFactura">
                <option selected>Selecione un Departamento:</option>
                <?php
                $deptoFactura = $objDatos->obtenerDatos('departamento', 'id');
                while ($row = $deptoFactura->fetch()) {
                    ?>
                    <option value="<?php echo $row[0]; ?>" <?php echo $row[0] == $getDeptoFactura ? " selected " : ""
                           ?>>
                        <?php echo $row[2]; ?>
                    </option>
                <?php } ?>
            </select>

            <label style="display:none" for="muniFactura" id="labelMuni" name="labelMuni">Municipio:</label>
            <select class="form-control" aria-label="Default select example"  name="muniFactura"
                id="muniFactura">
                <option value= '0' selected>Selecione un Municipio:</option>
                <?php
                $muniFactura = $objDatos->obtenerDatos('municipio', 'id');
                while ($row = $muniFactura->fetch()) {
                    ?>
                    <option value="<?php echo $row[0]; ?>" <?php echo $row[0] == $getMuniFactura ? " selected " : ""
                           ?>>
                        <?php echo str_pad($row[3], 3, '0', STR_PAD_LEFT)
                            . "*" . str_pad($row[0], 3, '0', STR_PAD_LEFT)
                            . trim($row[2]); ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class= "row-2">
            <label for="dirFactura">Dirección:</label>
            <input type="text" class="form-control" name="dirFactura" id="dirFactura" value="<?php echo $getDireccionFactura; ?>" 
            placeholder="Escriba la dirección de facturación">
            <br>
        </div>
        <?php if (isset($id)){ ?>
            <div class="row-2">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <input type="hidden" value="S" name="actualiza" id="actualiza">
            <input type="hidden" value="<?php echo $id;?>" name="idCliente" id="idCliente">
        </div>    
        <?php }else{ ?>
        <div class="row-2">
            <button type="submit" class="btn btn-success">Guardar</button>
            <input type="hidden" value="" name="clienteid" id="clienteid">
            <input type="hidden" value="0" name="idCliente" id="idCliente">

        </div>
        <?php } ?>
        </form>
        <script>
            const deptosFact = document.getElementById('deptoFactura');
            const munisFact = document.getElementById('muniFactura');
            const opciones = Array.from(munisFact.options).map(option => option.value + " " + option.text);
            const idmunifact = document.getElementById('idmunifact');
            
                document.addEventListener("DOMContentLoaded", function() {
                    if (idmunifact.value){
                        munisFact.value = idmunifact.value;
                        //munisFact.textContent = opciones[idmunifact.value].substring(7);
                        //console.log(opciones[idmunifact.value].substring(9));
                //        munisFact.innerHTML = '';
                        const option = document.createElement('option');
                        option.value = idmunifact.value;
                        option.textContent = opciones[idmunifact.value].substring(10);
                
                        munisFact.appendChild(option);
                    }
                });
                 
        
            // console.log(opciones);
                deptosFact.addEventListener('change', (event) => {
                const selectedDeptoFact = event.target.value;
                document.getElementById("labelMuni").style.display = 'inline';
                munisFact.style.display = 'inline';
                munisFact.innerHTML = '';
                opciones.forEach(municipio => {
                    position = municipio.indexOf('*');
                    const valores = {
                        codigo: municipio.substring(position + 1, position + 4),
                        depto: municipio.substring(position - 3, position), //.,
                        desc: municipio.substring(position + 4),
                    }
                    if (parseInt(selectedDeptoFact) == parseInt(valores.depto)) {
            //            console.log(valores);
                        const option = document.createElement('option');
                        option.value = valores.codigo;
                        option.textContent = valores.desc;
                        munisFact.appendChild(option);
              //          console.log(option);
                    }

                });
            });
        </script>

    </main>