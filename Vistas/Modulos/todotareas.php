<?php
$tarea = new TareasC();
$pagina = $tarea->BusquedaC();
$datosa =$_GET['busqueda'];

?>

<?php
if ($datosa=="categoria") {
	$count=0;
	?>

<div class="col s12 m9 l9"> <!-- Note that "m8 l9" was added -->
	 
	
	

		 
			 
			 
			 
		 <div class="col s12 m6 l6">		
			 
				 
				 <div class="col s9">
		 <table id="t1" border="1" class="striped white">
		 
		 <thead>
          <tr>
              <th>Numero</th>
              <th>Nombre De Categoria</th>
              <th>Buscar</th>
          </tr>
        </thead>
		<?php foreach($pagina as $key => $value): 
			
			$count=$count+1;
			?>



			 <tbody>
			 
				 <tr>
				 <div class="col s9">

				 </div>
				 <div class="col s3">
				 	<td><?=$count?></td>
					<td><?=$value['Nombrecategoria']?></td>
					<td>
					<a href='index.php?ruta=busquedacategoria&idcatego=<?=$value['idCategoriaproducto']?>'>
						<button class="btn waves-effect waves-lime lighten-4 btn-flat "><i class="material-icons left">search</i>Detalles</button>		
					</td>
					</div>
				 </tr>

				 
				 
			 </tbody>
			 <?php  endforeach; ?>			 
		 </table> 
	 
	 </div>
	 </div>

 </div>
<?php
}

?>


 
