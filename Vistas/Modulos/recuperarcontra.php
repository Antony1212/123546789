<?php
$ingreso = new TareasC();
$ingreso->recuperarContraverC();
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
								<h5>Recuperar Contraseña</h5>
								<div class="col s12">

									<form method="post" action="">
										Ingrese el nombre de usuario:
										<input type="text" placeholder="Usuario" name="usuario" required>
										Ingrese el correo electronico:
										<input type="email" placeholder="example@gmail.com" name="email" required>
										
										<button class="btn waves-effect waves-light findbtn" type="submit" value="Recuperar"  >Recuperar<i class="material-icons right">search</i></button>
										
									</form>
								
									<div class="fixed-action-btn toolbar" id="btn-flotante"> 
										<a  class="btn-floating btn-large green" >
											<i class="large material-icons">add</i>
										</a>
										<ul> 

											<li><a href="index.php?ruta=ingreso" class="btn-floating "><i class="text">Iniciar Session </i> </a></li>
											<li><a href="index.php?ruta=registrou" class="btn-floating "><i class="text">Registrar Usuario </i></a></li>
											
											
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
