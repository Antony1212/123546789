<?php
$tarea = new TareasC();
$pagina = $tarea->mostrarEmpleadosbC();
$tarea->BorrarProductoC();
$count=0;
?>
<div class="col s12 m9 l9"> <!-- Note that "m8 l9" was added -->
	 
	
	 <?php foreach($pagina as $key => $value): ?>

		 <?php 
			 
			 $cadena =$value['Descripcionproducto'];
			 $subcadena = substr ( $cadena,0,97);
			 $count=$count+1;
			 ?>
			 
		 <div class="col s12 m6 l6">		
			 
				 <div class="col s3">
				 
				 <div class="col s12">
					 
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
				 <td> </td>
				 <td><a href='index.php?ruta=archivado&idprod=<?=$value['idProducto'] ?>'>
					 <button class="btn waves-effect waves-light borrarbtn"><i class="material-icons left">delete</i>Borrar Producto</button>
								 
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
 
