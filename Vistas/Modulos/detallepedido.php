<?php
$tarea = new TareasC();
$pagina = $tarea->MostrarPedidoCC();
//$carrito = $tarea->VerCarritoC();
//$tarea->CarritoC();


?>


	
<div class="col s12 m9 l9"> 
	<div class="col s12 m10 l10">
		<div class="card-panel grey lighten-5 z-depth-1">
			<table class="striped">
			
						<thead>
							<h5>Detalles Del Pedido</h5>
						<tr>
							<th>Descripción</th>
							<th>Cantidad</th>	
							<th>Marca</th>
							<th>Precio Unidad</th>
							<th>Precio Total</th>
						</tr>	
						</thead>
			<?php foreach($pagina as $key => $value): ?>

				<?php 
				
				$de=$value['descuento'];
				$do=$value['Precioproducto'];
				if($de>0){
					$Precio=$value['Precioproducto']*$value['descuento'];
					$PrecioTotal=$Precio/100;
					$PrecioTotal=$do-$PrecioTotal;
				}else{
					$PrecioTotal=$value['Precioproducto'];

				}
				
				?>
			
				<?php 
					$ca=$value['Cantidad'];
					
				$toca=$ca*$PrecioTotal;
				
				?>	
						<tbody>
						<tr>
							<td><img class="materialboxed" width="100" src="data:image/png;base64,<?php echo base64_encode($value['imagen']);?>"><?=$value['Nombreproducto']?></td>
							<td><?=$value['Cantidad']?></td>
							<td><?=$value['Marcaprod']?></td>
							<td>S/<?=$PrecioTotal?></td>
							<td>S/<?=$toca?></td>
							
						</tr>
						

						
						
					

					

				<?php
				
				
			 ?>
			
 
	<?php  endforeach; ?>

			<tr>
				<th>Costos por envio</th>
				<td></td>
				<td></td>
				<td></td>
				<td>S/10</td>
			</tr>
			<tr>
				<th>Precio Total Del Pedido</th>
				<td></td>
				<td></td>
				<td></td>
				<td>S/<?=$value['PrecioTotal']?></td>
			</tr>
			<tr>
				
				<td></td>
				<td></td>
				<td>
					<a href='index.php?ruta=compraspendientes'>
					<button class="btn waves-effect waves-light blue lighten-2 black-text"><i class="material-icons left">arrow_back</i>Volver A Lista De Pedidos</button></td>
				<td></td>
				<td></td>
			</tr>	
			</tbody>
			</table>
		</div>
	</div> 
</div>
	

		
	
	
        
        
    
  
  

    

        
    


