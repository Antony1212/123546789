<?php
$tarea = new TareasC();
$pagina = $tarea->mostrarProductosOfertaC();
$tarea->AgregarporcentajeC();
?>

<div class="col s12 m9 l9"> 
	<div class="col s12 m8 l8">
			<?php foreach($pagina as $key => $value): ?>
				<?php

                    $fechaactual= date('Y-m-d');
					$fechar=$value['VencGarantia'];
					$Extencion=$value['EstadoProducto'];
					$idprodu=$value['idProducto'];
						?>	

						
						<?php
					

					?>	


					<?php 
				if($Extencion=="Extendido"){
					$fechac=$value['Extenciongarantia'];
					$dateDifference = abs(strtotime($fechac) - strtotime($fechaactual));
					$years  = floor($dateDifference / (365 * 60 * 60 * 24));
                    $months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                    $days   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));
				}else{
					$dateDifference = abs(strtotime($fechar) - strtotime($fechaactual));
					$years  = floor($dateDifference / (365 * 60 * 60 * 24));
                    $months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                    $days   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));

				}
					
				
                    if ($days <= 15) {
                        $culo="deep-orange lighten-3"; 
                    } elseif ($months <= 1) {
                        $culo=" deep-orange lighten-4";
                    } elseif ($months <= 2) {
                        $culo=" lime lighten-4";
                    }elseif ($months <=3 ) {
                        $culo=" green lighten-2";
                    }elseif ($months>=4 ) {
                        $culo=" green lighten-3";
                    }



				?>	

				
				<div class="card-panel<?=$culo?>">
					<table class="striped">
						<thead>
						<tr>
							<th>Estado De Extencion Del Producto</th>	
							<th>Nombre De Producto</th>
							<th>Precio Total</th>
							<th> </th>
						</tr>
						</thead>

						<tbody>
						<tr >

							<?php 
							
							if($Extencion=="Extendido"){
								?>
								<td>Garantia Extendida</td>
								<?php
							}else{
								?>	
								<td> No Se Aplico Aun La Extencion De Garantia</td>
								<?php
							}

							?>	
							
							
							<td><?=$value['Nombreproducto']?></td>
							<td><?=$value['Precioproducto']?></td>
							<td><td><img class="materialboxed" width="100" src="data:image/png;base64,<?php echo base64_encode($value['imagen']);?>"></td></td>
							<td></td>
							
						</tr>
						<tr class="">
							<th>Tiempo Faltante Para El Termino De La Garantia</th>

                            <?php 

                            if($days==0 && $months==0){
                                ?>
                                <td>Expiro El Tiempo De Garantia Recomendamos Ofertar Producto</td>
                                <?php
                            }else{
                                ?>	
                                <td> <?=$months?> meses, <?=$days?> Dias Restantes</td>
                                <?php
                            }

                            ?>	
							<td></td>
							<td></td>  
							
						</tr>

						<tr>
							
						
							
						
						
						
						<form method="post" action="" enctype="multipart/form-data">
						<td>

							<div class="input-field col s12 ">	
								<input id="porcentaje" type="number" class="validate" name="porcentaje" value='<?=$value['descuento']?>'  required>
								<input id="prodId" name="prodId" type="hidden" value="<?=$value['idProducto']?>">
								<label for="porcentaje">Agregar Un Porcentaje De Descuento</label>
								<span class="helper-text" data-error="Completa el campo" data-success="campo completado">complete este campo</span>
							</div>
						</td>
						<td> 		
							<div class="col s12 m12 l12">

								<button class="btn waves-effect waves-light findbtn" type="submit" value="registrar" >
									Agregar Descuento
									<i class="material-icons right">percent</i></button>
								</button>
							</div>
						</td>			
						</form>
							  
							
						</tr>
						
						
						</tbody>
					</table>

				</div>

					

				<?php
				
				
			 ?>
			
 
	<?php  endforeach; ?>
	</div>
	 