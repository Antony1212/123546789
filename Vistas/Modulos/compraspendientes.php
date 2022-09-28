<?php
$tarea = new TareasC();
$pagina = $tarea->MostrarPedidoPC();
//$carrito = $tarea->VerCarritoC();
//$tarea->CarritoC();
$idc="hola";
$count=0;
?>


	
<div class="col s12 m9 l9"> 
	<div class="col s12 m8 l8">
			<?php foreach($pagina as $key => $value): ?>
				<?php 
					$fechaf=$value['Fecha'];
					$fechar=$value['TiempoReserva'];
					$idv=$value['idv'];
					
					
					if($idv==$idc){
						?>	

						
						<?php
						$count=$count+1;

					?>	


					<?php 
				}else{
					
					
					$count=$count+1;
					$idc=$idv;
					$dateDifference = abs(strtotime($fechar) - strtotime($fechaf));
					$days   = floor(($dateDifference - 0 * 365 * 60 * 60 * 24 - 0 * 30 * 60 * 60 *24) / (60 * 60 * 24));

					switch ($days) {

					case 0:
						$culo="deep-orange lighten-3"; 
						break;
					case 1:
						$culo="card-panel deep-orange lighten-4";
						break;
					case 2:
						$culo="card-panel lime lighten-4";
						break;
					case 3:
						$culo="card-panel green lighten-2";
						break;
					case 4:
						$culo="card-panel green lighten-3";
						break;
					}
				?>	

				
				<div class="card-panel grey lighten-5 z-depth-1">
					<table class="striped">
						<thead>
						<tr>
							<th>Estado Pedido</th>	
							<th>Codigo De Compra</th>
							<th>Precio Total</th>
						</tr>
						</thead>

						<tbody>
						<tr >
							
							<td><?=$value['estadoventa']?></td>
							<td><?=$value['codigoventa']?></td>
							<td>S/<?=$value['PrecioTotal']?></td>
							<td></td>
							
						</tr>
						<tr class="<?=$culo?>">
							<th>Tiempo Faltante Para Cancelar Reserva</th>
							<td><?=$days?> Dias Restantes</td>
							<td></td>
							<td></td>  
							
						</tr>

						<tr>
							
						<td> 
							<a href='https://api.whatsapp.com/send?phone=+51996057758&text=Hola+Te+Escribo+Para+Confirmar+El+Pago+De+MI+Pedido+El+Codigo+de+Mi+Pedido+Es+%3A+<?=$value['codigoventa']?>'>
							<button class="btn waves-effect waves-light green accent-4 black-text"><i class="material-icons left ">sms</i>Ir A Whatsapp</button>
						</td>
						<td></td>
						<td></td>
						<td>
							<a href='index.php?ruta=detallepedido&idv=<?=$value['idv']?>'>
							<button class="btn waves-effect waves-light blue lighten-2 black-text"><i class="material-icons left">shopping_cart</i>Detalles De Pedido</button>
									
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
				}
				
			 ?>
			
 
	<?php  endforeach; ?>
	</div>
	 <div class="col s12 m9 l3"> 
	<div class="card-panel grey lighten-5 z-depth-1">
    	<h5>Como Pagar</h5>
          <div class="row valign-wrapper">
            <div class="col s2">
              
            </div>
            <div class="col s12">

			<span class="black-text">
               EL Pago Se Realiza Atraves Del BCP O Un Agente Mediante Tranferencia Bancaria Al Numero De Cuenta;
			   20596980758046.
			   Una ves Realizado El Pago  Enviar Una Foto Del Vaucher O Captura De La Tranferencia Con El Monto Exacto De La Compra Y el Codigo De Compra Que Muestra La Orden.
				El Pedido Cambia De Estado En 24 Horas Despues Del Envio Del Mensaje.
            </span>
            

             
            </div>
            
          </div>
          
        </div>

		
		</div>
  
  </div>
	

		
	
	
        
        
    
  
  

    

        
    


