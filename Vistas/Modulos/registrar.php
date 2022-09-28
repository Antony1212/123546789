<?php
$tarea = new TareasC();
$pagina = $tarea->MostrarCategoriaC();

$alm = new TareasC();
$almacen = $alm->MostrarAlmacenC();

$dis = new TareasC();
$distribuidor = $dis->MostrarDistribuidorC();


$registrar = new TareasC();
$registrar->registrarEmpleadosC();
if (isset($_SESSION['nombre']))
  {
    
   $roll=$_SESSION['roll'];
  }

  if($roll=="ADMINISTRADOR"){


?>
			  <div class="col s12 m8 l9"> 
			  	<div class="col s12 m10 l10"> 
					<div class="row">

                			<h3>Registrar Producto</h3>
								
							<form method="post" action="" enctype="multipart/form-data">
								
									
									<div class="input-field col s5">
									<input id="nombreR" type="text" class="validate" name="nombreR"  required>
									<label for="nombreR">Nombre Del Producto</label>
									<span class="helper-text" data-error="Completa el campo" data-success="campo completado">complete este campo</span>
									</div>
								
									<div class="input-field col s1">
										
									</div>
								
									<div class="input-field col s6">
										<textarea id="apellidoR" class="materialize-textarea" name="Descripcion"  required></textarea>
										<label for="apellidoR">Descripcion Del Producto</label>
										<span class="helper-text" data-error="Completa el campo" data-success="campo completado">complete este campo</span>
									</div>

								
									<div class="input-field col s5">
									<input id="marca" type="text" class="validate" name="marca"  required>
										<label for="marca">Marca Del Producto</label>
										<span class="helper-text" data-error="Completa el campo" data-success="campo completado">complete este campo</span>
									</div>

									<div class="input-field col s1">
										
									</div>
								
									<div class="input-field col s6">
										<input id="precio" type="number" class="validate" name="precio"  required>
										<label for="precio">Precio De Venta Del Producto</label>
										<span class="helper-text" data-error="Completa el campo" data-success="campo completado">complete este campo</span>
									</div>

									

									
									<div class="input-field col s5">
									 Fecha De Llegada <input id="date" type="text" class="datepicker" name="fechallegada">
									 </div>
									
									 <div class="input-field col s1">
										
										</div>
									

									
									<div class="input-field col s5">				
									Fecha de Vencimiento De Garantia <input id="date" type="text" class="datepicker" name="vencimientogarantia">
									</div>
									
									<div class="input-field col s3">
										
										</div>


									
									<div class="input-field col s6">
										<input id="stock" type="number" class="validate" name="stock"  required>
										
										<label for="stock">Stock Del Producto</label>
										<span class="helper-text" data-error="Completa el campo" data-success="campo completado">complete este campo</span>
									
									</div>

									

									
									<div class="input-field col s6">
										<select name="Categoria"> 

										<?php foreach($pagina as $key => $value): ?>		
											
											<option value=<?=$value['idCategoriaproducto']?>><?=$value['Nombrecategoria']?></option>

										<?php  endforeach; ?>	
										</select>
											<label>Categoria</label>
									
									</div>
									
									
									<div class="input-field col s6">
										<select name="almacen"> 
											<?php foreach($almacen as $key => $value): ?>		
												
												<option value=<?=$value['idalmacen']?>><?=$value['Nombrealmacen']?></option>

											<?php  endforeach; ?>	
										</select>
											<label>Almacen</label>
									</div>

									<div class="input-field col s6">
										<select name="Distribuidor"> 

											<?php foreach($distribuidor as $key => $value): ?>		
												
												<option value=<?=$value['idDistribuidor']?>><?=$value['NombreDistribuidor']?></option>

											<?php  endforeach; ?>	
											
										</select>
											<label>Distribuidora</label>
									</div>

									
									<div class="input-field col s5">
										<div class="file-field input-field">
											<div class="btn">
												<span>File</span>
												<input type="file" name="imagen">
											</div>
											<div class="file-path-wrapper">
												<input class="file-path validate" type="text" >
												<span class="helper-text" data-error="Error Con La Extencion" data-success="campo completado">Extensiones admitidas png,jpg,gif</span>
											</div>
										</div>	
									</div>		
  
								
									
									
										

									<div class="col s12 m12 l12">

										<button class="btn waves-effect waves-light findbtn" type="submit" value="registrar" >
											Registrar Producto
											<i class="material-icons right">add</i></button>
										</button>
									</div>
							</form>
							</div>
							</div>
							</div>
							</div>




 <?php
}
?>