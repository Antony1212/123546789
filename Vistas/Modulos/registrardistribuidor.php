<?php
$registrar = new TareasC();
$registrar->registrarDistribuidoraC();
if (isset($_SESSION['nombre']))
  {
    
   $roll=$_SESSION['roll'];
  }

  if($roll=="ADMINISTRADOR"){


?>

<div class="col s12 m8 l9"> 
			  	<div class="col s12 m10 l10"> 
					<div class="row">
						
					
                			<h4>Registrar Nueva Distribuidora</h4>
								
							<form method="post" action="">
								
									
									<div class="input-field col s5">
										<input id="nombreR" type="text" class="validate" name="nombred"  required>
											<label for="nombreR">Nombre De La Distribuidora</label>
										<span class="helper-text" data-error="Completa el campo" data-success="campo completado">complete este campo</span>
									</div>
								
									<div class="input-field col s1">
									</div>
								
									<div class="input-field col s5">
										<input id="nombreR" type="text" class="validate" name="Direccion"  required>
										<label for="apellidoR">Direccion De Contacto</label>
										<span class="helper-text" data-error="Completa el campo" data-success="campo completado">complete este campo</span>
									</div>
								

								<div class="row">
									<div class="input-field col s12">

										<input id="email" type="email" class="validate" name="Correo"  required>
											<label for="email">Correo De Contacto</label>
										<span class="helper-text" data-error="Completa el campo" data-success="campo completado">Helper text</span>
									
									</div>
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