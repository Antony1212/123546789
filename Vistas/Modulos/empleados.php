<?php
$tarea = new TareasC();
$pagina = $tarea->mostrarEmpleadosC();
$carrito = $tarea->VerCarritoC();
$tarea->CarritoC();

?>

<div class="col s12 m9 l9"> <!-- Note that "m8 l9" was added -->
	 
	
		<?php foreach($pagina as $key => $value): ?>

			<?php 
				
				$cadena =$value['Descripcionproducto'];
				$subcadena = substr ( $cadena,0,97);
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
				
			<div class="col s12 m6 l6">	
			<?php 
				
				
				if($de>0){
							
			?>

				<div class="col s3">
					<a class="btn-floating btn-large waves-effect waves-light red"><?=$de?>%</a>
					<div class="col s12">
			<?php 		
				}else{
			
			?>
				<div class="col s3">
					
				<div class="col s12">

			<?php
					
				}
				
			?>	
				
					
						
					</div>
					<div class="col s12">
						
					</div>
					<div class="col s12">
						
					</div>
					<div class="col s12">
						<img class="materialboxed responsive-img" width="100"  src="data:image/png;base64,<?php echo base64_encode($value['imagen']);?>">
					</div>
        				
					</div>
					<div class="col s9">
			<table id="t1" border="1" class="striped white">
				<tbody>
				
					<tr>
						<th>Nombre</th>
						<td><?=$value['Nombreproducto']?></td>
					</tr>

					<tr>
						<th>Descripcion</th>
						<td><?=$subcadena?>...</td>
					</tr>

					<tr>
						<th>Marca</th>
						<td><?=$value['Marcaprod']?></td>
					</tr>

					<tr>
						<th>Stock</th>
						<td><?=$value['Cantidadproducto']?></td>
					</tr>


					<tr>
						<th>Precio Del producto $</th>
						<td><?=$value['Precioproducto']?></td>	
					</tr>

					<tr>
						<th>Precio Del producto Con Descuento$</th>
						<td><?=$PrecioTotal?></td>	
					</tr>
					
					<tr>
					<td> <a href='index.php?ruta=editar&idproducto=<?=$value['idProducto']?>'>
						<button class="btn waves-effect waves-light editarbtn"><i class="material-icons left">visibility_on</i>Detalles</button></td>
					<td><a href='index.php?ruta=empleados&idproducto=<?=$value['idProducto'] ?>'>
						<button class="btn waves-effect waves-light borrarbtn"><i class="material-icons left">add_shopping_cart</i>Añadir al carrito</button>
									
					</td>
					</tr>
				</tbody>
			</table>
			
		
		</div>
		</div>
		<?php 
			if ($key%2==0){
			
			}else{ 
			?>	

			<div class="col s12">
			</div>

			<?php
			}
			 ?>		
 
	<?php  endforeach; ?>
	
	
</div>	 
	<div class="fixed-action-btn toolbar" > 
		<a class="btn-floating btn-large tooltipped" data-position="left" data-tooltip="Tiene <?=$carrito?> Productos En El carrito de compra Click en el icono para ir al carrito" href='index.php?ruta=carrito'>
			
			<i class="material-icons">shopping_cart</i>
		</a>
	</div>
	
		
	
	
        
        
    
  
  

    

        
    


