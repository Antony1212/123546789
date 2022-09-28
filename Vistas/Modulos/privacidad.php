<?php
$tarea = new TareasC();
$pagina = $tarea->mostrarPedidosGarantiaC();
//$carrito = $tarea->VerCarritoC();
$tarea->RenovarExtencionC();


?>


	
<div class="col s12 m9 l9"> 
	<div class="col s12 m8 l8">
			<?php foreach($pagina as $key => $value): ?>
				<?php

                    $fechaactual= date('Y-m-d');
					$fechar=$value['VencGarantia'];
					$idprodu=$value['idProducto'];
					
					
					
						?>	

						
						<?php
					

					?>	


					<?php 
				
					$dateDifference = abs(strtotime($fechar) - strtotime($fechaactual));
					
                    $months = floor(($dateDifference - 0 * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                    $days   = floor(($dateDifference - 0 * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));

                
                        if( $fechaactual < $fechar){
                                
                            }else{
                                $days = 0;
                                $months = 0;
                            }
                                
                            if ($days <= 15) {
                                $culo="deep-orange lighten-3"; 
                            } elseif ($months <= 1) {
                                $culo="card-panel deep-orange lighten-4";
                            } elseif ($months <= 2) {
                                $culo="card-panel lime lighten-4";
                            }elseif ($months <=3 ) {
                                $culo="card-panel green lighten-2";
                            }elseif ($months>=4 ) {
                                $culo="card-panel green lighten-3";
                            }


				?>	

				
				<div class="<?=$culo?>">
					<table class="striped">
						<thead>
						<tr>
							<th>Estado De Extencion Del Producto</th>	
							<th>Nombre De Producto</th>
							<th>Precio Total</th>
						</tr>
						</thead>

						<tbody>
						<tr >
							
							<td>SIn Extencion</td>
							<td><?=$value['Nombreproducto']?></td>
							<td><td><img class="materialboxed" width="100" src="data:image/png;base64,<?php echo base64_encode($value['imagen']);?>"></td></td>
							<td></td>
							
						</tr>
						<tr class="">
							<th>Tiempo Faltante Para El Termino De La Garantia</th>

                            <?php 

                            if($days==0 && $months==0){
                                ?>
                                <td>Expiro El Tiempo De Garantia Solicitar Una Extencion Inmeditamente</td>
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
							
						<td> 
							
						</td>
						
						
						<td>
							<a href='index.php?ruta=privacidad&idprodu=<?=$idprodu?>'>
							<button class="btn waves-effect waves-light blue lighten-2 black-text"><i class="material-icons left">autorenew</i>Renovar La Extencion</button>
									
						</td>
							  
							
						</tr>
						<tr>

						<ul class="collapsible popout " id="2">
							
							
						</ul>
						</tr>
						
						</tbody>
					</table>

				</div>

					

				<?php
				
				
			 ?>
			
 
	<?php  endforeach; ?>
	</div>
	 