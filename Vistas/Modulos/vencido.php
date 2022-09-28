<?php
$tarea = new TareasC();
$pagina = $tarea->mostrarEmpleadosC();

?>
<main>
	<div class="container">
		


	

	
		
	<?php foreach($pagina as $key => $value): ?>
		<?php 
			switch ($value['prioridad']) {
				case 1:
					$prioridad="Alta";
					break;
				case 2:
					$prioridad="Media";
					break;
				case 3:
					$prioridad="Baja";
					break;
			}
		 ?>
		 <?php 
			if (($value['f_vencimiento']<$fechaactual)&&($value['estado']=="Pendiente")){

				
		 ?>

			
	<div class="container">		
		<div class="mansonry row col m6 s12" style="position: relative" >
			<div class="card">
			<table id="t1" border="1" class="striped red">
				
				<tbody>
				
					
					<tr>
					<th>Titulo</th>
					<td><?=$value['Titulo']?></td>
					</tr>

					<tr>
					<th>Contenido</th>
					<td><?=$value['Contenido']?></td>
					</tr>

					<tr>
					<th>Fecha de Registro</th>
					<td><?=$value['f_registro']?></td>
					</tr>

					<tr>
					<th>Fecha de Entrega</th>
					<td><?=$value['f_vencimiento']?></td>
					</tr>

					<tr>
					<th>Importancia</th>
					<td><?=$prioridad?></td>
					</tr>

					<tr>
						<th>Estado de Tarea</th>
						<td>Vencido</td>
					</tr>

					<tr>
					<th>Editar O Borrar</th>
							
						<td><a href='#'>
							<button class="btn waves-effect waves-light editarbtn disabled"><i class="material-icons left">edit</i>Editar</button></td>
						<td><a href='#'>
							<button class="btn waves-effect waves-light borrarbtn disabled"><i class="material-icons left">delete</i>Borrar</button></td>
					</tr>
				</tbody>
		</table>
	</div>
 </div>
 </div>
 <?php  }  ?>

	<?php  endforeach;  ?>

	</main>
