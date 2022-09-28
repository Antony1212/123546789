<?php
$tarea = new TareasC();
$carrito = $tarea->MostrarCarritoC();
$tarea->EditarCantidadC();
$tarea->FinCompraC();
$preciof=0;
?>

<ul id="dropdown1" class="dropdown-content "  >
  <a href="#!" class="brand-logo center">adsssssssssssssssssssssssss</a>
</ul>


<div class="col s12 m9 l9"> <!-- Note that "m8 l9" was added -->

  

  <div class="col s12 m8 l8"> 
    <?php foreach($carrito as $key => $value): ?>

      
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
				
		
			

      <?php $PCantidad=$value['Cantidad'];
          
          $Preciot=$PrecioTotal*$PCantidad;
          $preciof=$preciof+$Preciot
      ?>

      <div class="card-panel grey lighten-5 z-depth-1">
        <table class="striped centered">
          <thead>
            <th></th>
            <th>Producto</th>
            <th>Precio Unitario</th>
            <th></th>
            <th>Precio Total</th>
          </thead>

          <tbody>
            <tr>
            
              <td><img class="materialboxed" width="100" src="data:image/png;base64,<?php echo base64_encode($value['imagen']);?>"></td>
              <td><?=$value['Nombreproducto']?></td>
              <td>$<?=$PrecioTotal?></td>
              <td></td>
              <td>$<?=$Preciot?></td>  
            </tr>
            <tr>
            <th>Cantidad</th>

              <td> 
                <a href='index.php?ruta=carrito&id_c=<?=$value['id_c']?>&uso=Menos&cantidad=<?=$value['Cantidad']?>' class="btn-floating  waves-effect  waves-circle waves-teal secondary-content white "><i class="material-icons black-text ">remove</i></a>
              </td> 
  
              <td> 
                <?=$value['Cantidad']?>
              </td>

              <td> 
                <a href='index.php?ruta=carrito&id_c=<?=$value['id_c']?>&uso=Mas&cantidad=<?=$value['Cantidad']?>' class="btn-floating  waves-effect  waves-circle waves-teal  white "><i class="material-icons black-text ">add</i></a>
              </td>
              
              <td>
                <a href='index.php?ruta=carrito&id_c=<?=$value['id_c']?>&uso=Menos&cantidad=1' class="btn-floating  waves-effect  waves-circle waves-red  white "><i class="material-icons black-text ">delete</i></a>  
              </td>
              
            </tr>
            
          </tbody>
        </table>
      </div>
      <?php  endforeach; 
	
  $precioenvio=$preciof+10;
	?> 
  </div>
  
  <div class="col s12 m9 l4"> 

  <div class="card-panel grey lighten-5 z-depth-1">
    <h5>Resumen del pedido</h5>
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s12">

            <table>
              
              <tbody>
                <tr>
                <th>Costo Envio</th>
                  <td>$10.00</td>
                </tr>
                <tr>
                <th>Costo Total De Productos</th>
                 
                  <td>$<?=$preciof?></td>
                </tr>
                
                <tr>
                <th>Precio Total</th>
                  <td>$<?=$precioenvio?></td>
                  
                </tr>
              </tbody>
            </table>
            

             
            </div>
            
          </div>
         
            <a href='index.php?ruta=carrito&estadocompra=finalizado&preciotot=<?=$precioenvio?>' class="waves-effect waves-light btn-large center-align blue darken-1"><i class="material-icons right">attach_money</i>Finalizar Pedido</a>
          
        </div>

  </div>
  

</div>

</div>