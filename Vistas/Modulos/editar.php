<?php
$tarea = new TareasC();
$pagina = $tarea->editarEmpleadoC();
$tarea->actualizarEmpleadoC();
if($_SESSION['roll']=="ADMINISTRADOR"){
?>
<br>
<main>
	<div class="container">
    <div class="container">		
      <div class="mansonry row col m6 s12" style="position: relative" >
        <div class="row">
  
            <?php foreach($pagina as $key => $value): ?>		
              <div class="card">
    
			          <table id="t1" border="1" class="striped white">
				
				          <tbody>
				
                    
                    <tr>
                    <th>Nombre</th>
                    <td><?=$value['Nombrecliente']?></td>
                    </tr>

                    <tr>
                    <th>Apellido</th>
                    <td><?=$value['Apellidocliente']?></td>
                    </tr>

                    <tr>
                    <th>Numero De Telefono</th>
                    <td><?=$value['Numerotel']?></td>
                    </tr>

                    <tr>
                    <th>Documento</th>
                    <td><?=$value['doccliente']?></td>
                    </tr>
                    <tr>
                    <th>Rango</th>
                    <td><?=$value['roll']?></td>
                    </tr>


			
          
 	
					
                  </tbody>
              </table>
	          </div>
            <?php  endforeach; ?>
          </div>
         </div>
      </div>
      </div>
</main>
<?php
}
?>