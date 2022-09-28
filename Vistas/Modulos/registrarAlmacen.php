<?php
$registrar = new TareasC();
$registrar->registrarAlmacenC();
if (isset($_SESSION['nombre']))
  {
    
   $roll=$_SESSION['roll'];
  }

  if($roll=="ADMINISTRADOR"){


?>

<div class="col s12 m8 l9"> 
			  	<div class="col s12 m10 l10"> 
					<div class="row">
						
					
                			<h4>Registrar Nuevo Almacen</h4>
								
							<form method="post" action="">
								
									
									<div class="input-field col s5">
										<input id="nombreR" type="text" class="validate" name="nombrea"  required>
											<label for="nombreR">Nombre De Almacen</label>
										<span class="helper-text" data-error="Completa el campo" data-success="campo completado">complete este campo</span>
									</div>
								
									<div class="input-field col s1">
									</div>
								
									<div class="input-field col s5">
										<input id="nombreR" type="text" class="validate" name="Direccion"  required>
										<label for="apellidoR">Direccion De Contacto Almacen</label>
										<span class="helper-text" data-error="Completa el campo" data-success="campo completado">complete este campo</span>
									</div>
								

								
								

										<div style="text-align: center">

										<button class="btn waves-effect waves-light findbtn" type="submit" value="registrar" >
											Registrar Producto
											<i class="material-icons right">add</i></button>
										</button>
										</div>
							</form>	

							</div>
						</div>
					</div>
 <?php
}
?>		