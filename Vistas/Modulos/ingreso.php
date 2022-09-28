<?php
$ingreso = new AdminC();
$ingreso->IngresoC();
?>
	
	
	<body class="bodyLogin">
		<div class="container">
		
			<div class="row">
			
				<div class= "col s12 m12 l8 offset-12 loginDiv">
					<div class="row loginContainer">
						<div class="col s12 m6 l6">
							<div class="col s11 offset-s1">
								<img src="Vistas/css/imagenes/logo.png" class="responsive-img" >
							</div>
						</div>
						<div class="col s12 m5 l5 offset-l1 offset-m1">
							<div class="loginTitle">
								<h5>Inicio de Session sistema de ventas</h5>
								<div class="col s12">

									<form method="post" action="">
				
									<div class="row">
									<div class="input-field col s12">
										<input id="email" type="email" class="validate"  name="usuarioI" required>
										<label for="email">Introdusca Su Correo</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="password" type="password" class="validate"  name="claveI" required>
										<label for="password">Introdusca Su Contraseña</label>
									</div>
								</div>
										<button class="btn waves-effect waves-light findbtn" type="submit" value="Ingresar"  >Ingresar<i class="material-icons right">send</i></button>
										
									</form>
								
									<div class="fixed-action-btn toolbar" id="btn-flotante"> 
										<a  class="btn-floating btn-large green" >
											<i class="large material-icons">add</i>
										</a>
										<ul> 
											<li><a href="index.php?ruta=registrou" class="btn-floating "><i class="text">Registrar Usuario </i></a></li>
											<li><a href="index.php?ruta=recuperarcontra" class="btn-floating "><i class="text">Recuperar Cuenta </i> </a></li>
											
										</ul>
									</div>
									
								</div>
							</div>
						</div>
		
					</div>
				</div>	
			</div>
		</div>	

	</body>

	
				









