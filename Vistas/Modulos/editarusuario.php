<?php
$tarea = new TareasC();
$tarea->actualizarUsuarioC();

$n=$_SESSION['nombre'];
$a=$_SESSION['apellido'];
$c=$_SESSION['correo'];

?>
<br>
<main>
	<div class="container">
		
	<div class="container">		
		<div class="mansonry row col m6 s12" style="position: relative" >
		<div class="row">
    		<h5></h5>
			
<h3>Editar Tarea</h3>
<form method="post" action="">
	
<div class="row">
    <div class="input-field col s6">
      <input value='<?=$n?>' id="nombre" type="text" class="validate" name="nombre"  required>
      <label class="active" for="nombre">Editar Nombre</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input value='<?=$a?>' id="apellido" type="text" class="validate" name="apellido"  required>
      <label class="active" for="apellido">Editar Apellido</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s6">
      <input value='<?=$c?>' id="Correo" type="text" class="validate" name="Correo"  required>
      <label class="active" for="Correo">Editar E-mail</label>
    </div>
  </div>
	
	<button class="btn waves-effect waves-light findbtn" type="submit" value="Actualizar" name ="actualizar" >Editar Tarea<i class="material-icons right">send</i></button>
										
</form>

</div>
 </div>
 </div>
 </main>