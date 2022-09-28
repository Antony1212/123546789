<?php
$registrar = new TareasC();
$registrar->registrarUsuarioC();

?>
 <!-- Vistas/Modulos/registrar.php -->


		
	<div class="container">		
		<div class="mansonry row col m6 s12" style="position: relative" >
		<div class="container">	
        <h5>Registrar Datos Del Cliente</h5>
        </div>
    </div>
	<div class="container">		
		<div class="mansonry row col m6 s12" style="position: relative" >
	<div class="row">
    <form method="post" action="" class="col s12">
      <div class="row">
        <div class="input-field col s6">
		<input id="last_name" type="text" class="validate" name="nombreR">
          <label for="last_name">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="apellidos">
          <label for="last_name">Apellido</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s6">
		<input id="last_name" type="text" class="validate" name="dni">
          <label for="last_name">N° De D.N.I O R.U.C</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="telefono">
          <label for="last_name">N° De Telfono</label>
        </div>
      </div>
	  <div class="row">
	  <div class="input-field col s12">
		<select name="departamento"> 
			<option value="" disabled selected>Seleccione El Departamento</option>
			<option value="Amazonas">Amazonas</option>
			<option value="Áncash">Áncash</option>
			<option value="Apurímac">Apurímac</option>
			<option value="Arequipa">Arequipa</option>
			<option value="Ayacucho">Ayacucho</option>
			<option value="Cajamarca">Cajamarca</option>
			<option value="Callao">Callao</option>
			<option value="Cusco">Cusco</option>
			<option value="Huancavelica">Huancavelica</option>
			<option value="Huánuco">Huánuco</option>
			<option value="Ica">Ica</option>
			<option value="Junín">Junín</option>
			<option value="La Libertad">La Libertad</option>
			<option value="Lambayeque">Lambayeque</option>
			<option value="Lima">Lima</option>
			<option value="Loreto">Loreto</option>
			<option value="Madre de Dios">Madre de Dios</option>
			<option value="Moquegua">Moquegua</option>
			<option value="Pasco">Pasco</option>
			<option value="Piura">Piura</option>
			<option value="Puno">Puno</option>
			<option value="San Martín">San Martín</option>
			<option value="Tacna">Tacna</option>
			<option value="Tumbes">Tumbes</option>
			<option value="Ucayali">Ucayali</option>
			</select>
			<label>Seleccione El Departamento Al Que Pertenece Tu Ciudad</label>
		</div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="direccion">
          <label for="last_name">Direccion</label>
        </div>
      </div>
	  <button class="btn waves-effect waves-light findbtn" type="submit" value="registrar"  >Registrar Usuario<i class="material-icons right">account_circle</i></button>
    </form>
	</div>
  </div>
  </div>
    </div>