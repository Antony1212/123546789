

<?php
$registro= new AdminC();
$registro->RegistroC();
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
								<h5>Registrar Usuario</h5>
								<div class="col s12">

								<form method="post" action="" class="col s12">
								<div class="row">
									<div class="input-field col s12">
										<input id="email" type="email" class="validate" name="correo" required>
										<label for="email">Correo electronico</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<input id="password" type="password" class="validate" name="claveI" required>
										<label for="password">Contraseña</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="password" type="password" class="validate"  name="clave2" required>
										<label for="password">Repita Contraseña</label>
									</div>
								</div>
									
									<button class="btn waves-effect waves-light findbtn" type="submit" value="registrar"  >Registrar<i class="material-icons right">add</i></button>
										
								</form>
								

								
									<div class="fixed-action-btn toolbar" id="btn-flotante"> 
										<a  class="btn-floating btn-large green" >
											<i class="large material-icons">add</i>
										</a>
										<ul> 
											<li><a href="index.php?ruta=ingreso" class="btn-floating "><i class="text">Iniciar Session </i></a></li>
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






