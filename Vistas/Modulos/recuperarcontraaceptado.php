<?php
$ingreso = new TareasC();
$ingreso->recuperarContraC();


$id_u=$_GET['id_u']

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
								<h5>Registre Nueva Contraseña</h5>
								
								<div class="col s12">

									<form method="post" action="">
										Ingrese Nueva Contraseña:
										<input type="hidden"  name="id_u" value="<?=$id_u?>">
										<input type="password" placeholder="contraseña" name="contra" required>
										<input type="password" placeholder="confirme contraseña" name="contraconfirm" required>
										Ingrese el codigo enviado a su correo proporcionado:
										<input type="text" placeholder="example@gmail.com" maxlength="4" name="clave" required>
										<button class="btn waves-effect waves-light findbtn" type="submit" value=""  >Ingresar<i class="material-icons right">search</i></button>
										
									</form>
								
									
									
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>	

	</body>
