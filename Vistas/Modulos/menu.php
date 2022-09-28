<?php if($rutasC->sesionIniciadaC()): ?>
  
  

	<?php else: 
  if (isset($_SESSION['nombre']))

  {
    $N=$_SESSION['nombre'];
    $roll=$_SESSION['roll'];
    $A=$_SESSION['apellido'];
   $C=$_SESSION['correo'];

   ?>
   <header>
      <div class="navbar-fixed">
        <nav class="navbar white">
          <div class="nav-wrapper ">
            <ul id="nav-mobile" class="right navcolor" data-target="sidenav-bar">
            <li>
              <a class="dropdown-trigger" href="#!" data-target="dropdown1">
              <i class="material-icons black-text">settings</i></a></li>
            </ul><a  href="#" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
          </div>
        </nav>
      </div>
      
        </li>
      </ul>

      
      
    </header>
    
        
      </div>

    </div>
  </div>
</div>
<div class="row">
<div class="col s0 m3 l3"> <!-- Note that "m4 l3" was added -->
  <!-- Grey navigation panel

        This content will be:
    3-columns-wide on large screens,
    4-columns-wide on medium screens,
    12-columns-wide on small screens  -->


<ul id="sidenav-left" class="sidenav sidenav-fixed" style="transform: translateX(-105%);">

			<li>
				<div class="user-view">
					<div class="background">
					<img src="Vistas/css/imagenes/fondopequeño.jpg" alt="">
					</div>
					<a href="#" class="circle">
						<img src="Vistas/css/imagenes/logo.png" alt="" class="circle"></a>
                <a href="#name"><span class="black-text name"><b><?="$N $A"?> </b></span></a>
                <a href="#email"><span class="black-text email"><b><?="$C"?></b></span></a>
      					<a href="#roll"><span class="black-text email"><b><?="$roll"?></b></span></a>
				</div>
			</li>
    <!--  <div class="col s12">
        <li class="search">
          <div class="search-wrapper">
            <input id="search" placeholder="Search"><i class="material-icons">search</i>
            <div class="search-results"></div>
          </div>
        </li>
      </div>-->
      <?php  if ($roll == "ADMINISTRADOR")
      {
      ?>    
      
        <ul class="collapsible collapsible-accordion">
        <li class="active">
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" tabindex="0">Administrar Producto</a>
              <div class="collapsible-body" style="display: block;">
                <ul>
                  <li><a href="index.php?ruta=registrar">Registrar Productos</a></li>
                  <li><a href="index.php?ruta=registrardistribuidor">Registrar Distribuidora</a></li>
                  <li><a href="index.php?ruta=registrarAlmacen">Registrar Almacen</a></li>
                  <li><a href="index.php?ruta=empleados">lista de Productos</a></li>
                  <li><a href="index.php?ruta=archivado">Borrar Productos</a></li>
                  <li><a href="index.php?ruta=privacidad">Extender Garantia</a></li>
                  <li><a href="index.php?ruta=todo">Ofertar Productos</a></li>
                  
                </ul>
              </div>
            </li>
      </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" tabindex="0">Administrar Clientes</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="index.php?ruta=editar">Lista De Clientes</a></li>
                  <li><a href="buttons.html">Editar Roll De Clientes</a></li>
                  
                </ul>
              </div>
            </li>

            <li class="bold"><a class="collapsible-header waves-effect waves-teal" tabindex="0">Reportes de venta</a>
              <div class="collapsible-body" ><span>
                <ul>
                  <li><a href="auto-init.html">Auto Init</a></li>
                  <li><a href="carousel.html">Carousel</a></li>
                  <li class="active"><a href="collapsible.html">Collapsible</a></li>
                  <li><a href="dropdown.html">Dropdown</a></li>
                  <li><a href="feature-discovery.html">FeatureDiscovery</a></li>
                  <li><a href="media.html">Media</a></li>
                  <li><a href="modals.html">Modals</a></li>
                  <li><a href="parallax.html">Parallax</a></li>
                  <li><a href="pushpin.html">Pushpin</a></li>
                  <li><a href="scrollspy.html">Scrollspy</a></li>
                  <li><a href="sidenav.html">Sidenav</a></li>
                  <li><a href="tabs.html">Tabs</a></li>
                  <li><a href="toasts.html">Toasts</a></li>
                  <li><a href="tooltips.html">Tooltips</a></li>
                  <li><a href="waves.html">Waves</a></li>
                </ul>
                </span>
              </div>
            </li>
           

            
          
          
        <li><div class="divider"></div></li>
              

        <?php   
     }else{
        ?>  
        
       

          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" tabindex="0">Buscar Producto</a>
              <div class="collapsible-body">
                <ul>
                  <li>
                  
                  <li><a href="index.php?ruta=empleados">lista de Productos</a></li>
                  <li><a href="index.php?ruta=todotareas&busqueda=categoria">Buscar Producto Por Categoria</a></li>
                  <li><a href="index.php?ruta=todotareas&busqueda=Marca">Buscar Producto por Marca</a></li>
                  <li><a href="index.php?ruta=todotareas&busqueda=Nombre">Buscar Producto Por Nombre</a></li>
                  
                
                  </li>
                  
                 
                  
                </ul>
                
              </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" tabindex="0">Buscar Servicios</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="">Instalacion De Internet</a></li>
                  <li><a href="">Instalacion De Camaras De Seguridad</a></li>
                  <li><a href="">Reparacion de Computadoras</a></li>
                  <li><a href="">Mantenimiento de Computadoras</a></li>
                  
              </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" tabindex="0">Reportes de Compra</a>
              <div class="collapsible-body" ><span>
                <ul>
                  <li><a href="auto-init.html">Todas La Compras</a></li>
                  <li><a href="carousel.html">Todos los Servicios</a></li>
                  <li><a href="index.php?ruta=compraspendientes">Compras en proceso</a></li>
                  <li class="active"><a href="collapsible.html">Compras Terminadas</a></li>
                  
                  <li><a href="feature-discovery.html">Compras rechazadas</a></li>
                  <li><a href="media.html">Servicios Adquiridos</a></li>
                  <li><a href="modals.html">Reporte de Pago</a></li>
                  
                </ul>
                </span>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal" tabindex="0">Forms</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="autocomplete.html">Autocomplete</a></li>
                  <li><a href="checkboxes.html">Checkboxes</a></li>
                  <li><a href="chips.html">Chips</a></li>
                  <li><a href="pickers.html">Pickers</a></li>
                  <li><a href="radio-buttons.html">Radio Buttons</a></li>
                  <li><a href="range.html">Range</a></li>
                  <li><a href="select.html">Select</a></li>
                  <li><a href="switches.html">Switches</a></li>
                  <li><a href="text-inputs.html">Text Inputs</a></li>
                </ul>
              </div>
            </li>
          </ul>
          
            
          
          
        
              

        <?php
     }
        ?>

        
		</ul>
    </div>
		

   <?php


    
  }else{
    ?>

<header>
      <div class="navbar-fixed">
        <nav class="navbar white">
          <div class="nav-wrapper ">
            <ul id="nav-mobile" class="right navcolor" data-target="sidenav-bar">
            <li>
              <a class="dropdown-trigger" href="#!" data-target="dropdown1">
              <i class="material-icons black-text">settings</i></a></li>
            </ul><a  href="#" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
          </div>
        </nav>
      </div>
      
        </li>
      </ul>

      
      
    </header>
    
        
      </div>

    </div>
  </div>
</div>

<ul id="sidenav-center" class="sidenav sidenav-fixed" style="transform: translateX(-105%);">

			<li>
				<div class="user-view">
					<div class="background">
					<img src="Vistas/css/imagenes/fondopequeño.jpg" alt="">
					</div>
					<a href="#" class="circle">
						<img src="Vistas/css/imagenes/logo.-" alt="" class="circle"></a>
						
				</div>
			</li>
        
		</ul>
    
		
    
    
		

    <?php
  }  
    
    ?>

  <ul id="dropdown1" class="dropdown-content "  >
      <li><a href="index.php?ruta=editarusuario"><i class="material-icons">account_circle</i>Editar Perfil</a></li>
      <li><a href="index.php?ruta=salir"><i class="material-icons">power_settings_new</i>Cerrar Session</a></li>
  </ul>
		
	<?php endif; ?>


