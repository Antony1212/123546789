<?php  // Controladores/empleadosC.php
class TareasC {
    function __construct(){
        $this->tareasM = new TareasM();
    }

    public function registrarEmpleadosC(){
        
       
            if(isset($_POST['nombreR'])){
                $check = getimagesize($_FILES["imagen"]["tmp_name"]);
                if($check !== false){
                    

                    $tipoArchivo = $_FILES['imagen']['type'];
                    $nombreArchivo = $_FILES['imagen']['name'];
                    $tamanoArchivo = $_FILES['imagen']['size'];
                    
                    $image = $_FILES['imagen']['tmp_name'];
                    $binariosImagen = addslashes(file_get_contents($image));
                   
                    $datosC =array();
                    $datosC['nombreR'] = $_POST['nombreR'];
                    $datosC['Descripcion'] = $_POST['Descripcion'];
                    $datosC['marca'] = $_POST['marca'];
                    $datosC['precio'] = $_POST['precio'];
                
                    $datosC['fechallegada'] = $_POST['fechallegada'];
                    $datosC['vencimientogarantia'] = $_POST['vencimientogarantia'];
                    $datosC['stock'] = $_POST['stock'];
                    $datosC['Categoria'] = $_POST['Categoria'];
                    $datosC['almacen'] = $_POST['almacen'];
                    $datosC['binariosImagen'] =  $binariosImagen;
                    $datosC['Distribuidor'] = $_POST['Distribuidor'];       

                    $tablaBD = 'producto';

                    
                    
                    $pagina = $this->tareasM->registrarEmpleadosM($datosC, $tablaBD);


            
        }
        }     
        
    }

    public function registrarDistribuidoraC(){
        
       
        if(isset($_POST['nombred'])){
           
                $datosC =array();
                $datosC['nombred'] = $_POST['nombred'];
                $datosC['Direccion'] = $_POST['Direccion'];     
                $datosC['Correo'] = $_POST['Correo'];    

                $tablaBD = 'distribuidor';

                $pagina = $this->tareasM->registrarDistribuidoraM($datosC, $tablaBD);
                ?>
                        
                <script>
                $.confirm({
                        theme:'Material',
                        title: 'Exito',
                        content: "La Distribuidora se agrego satisfactoriamente",
                        type: 'green',
                        typeAnimated: true,
                        columnClass: 'medium',
                        buttons: {
                            tryAgain: {
                                text: 'Volver Al Menu Principal ',
                                btnClass: 'btn-blue',
                                action: function(){
                                    location.href="index.php?ruta=empleados";
                                }
                            },
                            trypago: {
                                text: 'Ingresar Otra Distribuidora ',
                                btnClass: 'btn-blue',
                                action: function(){
                                    location.href="index.php?ruta=registrardistribuidor";
                                }
                            },
               
                        }
                });
                </script>
            <?php         
        }
    }
    
    public function registrarAlmacenC(){
        
       
        if(isset($_POST['nombrea'])){
           
                $datosC =array();
                $datosC['nombrea'] = $_POST['nombrea'];
                $datosC['Direccion'] = $_POST['Direccion'];     
                
                $tablaBD = 'distribuidor';

                $pagina = $this->tareasM->registrarAlmacenM($datosC, $tablaBD);
                ?>
                        
                <script>
                $.confirm({
                        theme:'Material',
                        title: 'Exito',
                        content: "El Almacen se agrego satisfactoriamente",
                        type: 'green',
                        typeAnimated: true,
                        columnClass: 'medium',
                        buttons: {
                            tryAgain: {
                                text: 'Volver Al Menu Principal ',
                                btnClass: 'btn-blue',
                                action: function(){
                                    location.href="index.php?ruta=empleados";
                                }
                            },
                            trypago: {
                                text: 'Ingresar Otro Almacen ',
                                btnClass: 'btn-blue',
                                action: function(){
                                    location.href="index.php?ruta=registrarAlmacen";
                                }
                            },
               
                        }
                });
                </script>
            <?php         
        }
    }  
    


    public function registrarUsuarioC(){
        if(isset($_POST['nombreR'])){
            
            $datosC =array();
            $datosC['nombreR'] = $_POST['nombreR'];
            $datosC['apellidoR'] = $_POST['apellidos'];
            $datosC['dni'] = $_POST['dni'];
            $datosC['telefono'] = $_POST['telefono'];
            $datosC['departamento'] = $_POST['departamento'];
            $datosC['direccion'] = $_POST['direccion'];


            $datosC['id_u'] = htmlspecialchars($_SESSION['id_u']);
            $datosC['correo'] = htmlspecialchars($_SESSION['username']);


            $tablaBD = 'datoscliente';

            
            
            $pagina = $this->tareasM->registrarUsuarioM($datosC, $tablaBD);
            

            header('location: index.php?ruta=salir');
         
            

        }
    }

    //mostrar empleados
    public function mostrarEmpleadosC(){
        
        $tablaBD = 'producto';
        $pagina = $this->tareasM->mostrarEmpleadosM($tablaBD);
        return $pagina;
       
    }

    public function mostrarCategoriaMC(){
        
        if(isset($_GET['idcatego'])){

            $tablaBD = 'producto';

            $datosC =array();
            $datosC['idcatego'] = $_GET['idcatego'];

            $pagina = $this->tareasM->mostrarCategoriaMM($tablaBD,$datosC);
            return $pagina;


        }
    }

    public function mostrarPedidosGarantiaC(){
        $tablaBD = 'producto';
        $pagina = $this->tareasM-> mostrarPedidosGarantiaM($tablaBD);
        return $pagina;
    }

    public function mostrarEmpleadosbC(){
        $tablaBD = 'producto';
        $pagina = $this->tareasM->mostrarEmpleadosbM($tablaBD);
        return $pagina;
    }

    public function MostrarPedidoPC(){
        $tablaBD = 'venta';
        $pagina = $this->tareasM->MostrarPedidoPM($tablaBD);
        return $pagina;
    }

    public function BorrarProductoC(){
        if(isset($_GET['idprod'])){
            
            
            $datosC = array('idprod' => $_GET['idprod']);

            $pagina = $this->tareasM->BorrarProductoM($datosC);
            

                ?>
                        
                <script>
                $.confirm({
                        theme:'Material',
                        title: 'Exito',
                        content: "El Producto Se Borro Correctamente",
                        type: 'green',
                        typeAnimated: true,
                        columnClass: 'medium',
                        buttons: {
                            tryAgain: {
                                text: 'Volver Al Menu Principal ',
                                btnClass: 'btn-blue',
                                action: function(){
                                    location.href="index.php?ruta=empleados";
                                }
                            },
                            trypago: {
                                text: 'Borrar Mas Productos ',
                                btnClass: 'btn-blue',
                                action: function(){
                                    location.href="index.php?ruta=archivado";
                                }
                            },
               
                        }
                });
                </script>
            <?php   

            
            
        }
        
    }

    public function RenovarExtencionC(){
        if(isset($_GET['idprodu'])){
            
            
            $datosC = array('idprodu' => $_GET['idprodu']);

            $pagina = $this->tareasM->RenovarExtencionM($datosC);
            

                ?>
                        
                <script>
                $.confirm({
                        theme:'Material',
                        title: 'Exito',
                        content: "La Garantia Del Producto Se Extendio Correctamente",
                        type: 'green',
                        typeAnimated: true,
                        columnClass: 'medium',
                        buttons: {
                            tryAgain: {
                                text: 'Volver Al Menu Principal ',
                                btnClass: 'btn-blue',
                                action: function(){
                                    location.href="index.php?ruta=empleados";
                                }
                            },
                            trypago: {
                                text: 'Ver Garantia De Productos ',
                                btnClass: 'btn-blue',
                                action: function(){
                                    location.href="index.php?ruta=privacidad";
                                }
                            },
               
                        }
                });
                </script>
            <?php   

            
            
        }
        
    }
    
    public function MostrarPedidoCC(){
        if(isset($_GET['idv'])){
            
            
            $datosC = array('idv' => $_GET['idv']);

            $pagina = $this->tareasM->MostrarPedidoCM($datosC);
            return $pagina;
        }
        
    }

    public function mostrarEmpleadostodoC(){
        $tablaBD = 'tarea';
        $pagina = $this->tareasM->mostrarEmpleadostodoM($tablaBD);
        return $pagina;
    }

    public function mostrarProductosOfertaC(){
        $tablaBD = 'preducto';
        $pagina = $this->tareasM->mostrarProductosOfertaM($tablaBD);
        return $pagina;
    }

    public function mostrarUsuarioC(){
        $tablaBD = 'datosusuaario';
        $pagina = $this->tareasM->mostrarUsuarioM($tablaBD);
        return $pagina;
    }

    //editar empleados
    public function editarEmpleadoC(){
      
            $tablaBD = 'usuario';
            $pagina = $this->tareasM->editarEmpleadoM( $tablaBD);
            return $pagina;
        
    }
    public function MostrarCategoriaC(){
      
        $tablaBD = 'usuario';
        $pagina = $this->tareasM->MostrarCategoriaM( $tablaBD);
        return $pagina;
    
    }
    public function MostrarDistribuidorC(){
      
        $tablaBD = 'usuario';
        $pagina = $this->tareasM->MostrarDistribuidorM( $tablaBD);
        return $pagina;
    
    }
    public function MostrarAlmacenC(){
      
        $tablaBD = 'usuario';
        $pagina = $this->tareasM->MostrarAlmacenM( $tablaBD);
        return $pagina;
    
    }

    //actualizar empleados
    public function actualizarEmpleadoC(){
        if(isset($_POST['actualizar'])){
            $datosC = array(    'id'=>$_POST['id_t'],
                                'nombre'=>$_POST['nombreE'],
                                'apellido'=>$_POST['apellidoE'],
                                
                               'puesto' => $_POST['puestoE'],
                                'salario' => $_POST['salarioE'],
                          );
            $tablaBD = 'tarea';
            $pagina = $this->tareasM->actualizarEmpleadoM($datosC, $tablaBD);
            header('location: index.php?rutas=empleados');
            return $pagina;
        }
    }

    public function AgregarporcentajeC(){
        if(isset($_POST['porcentaje'])){
            $datosC = array(    'prodId'=>$_POST['prodId'],
                                'porcentaje'=>$_POST['porcentaje']);

            $tablaBD = 'producto';

            $pagina = $this->tareasM->AgregarporcentajeM($datosC, $tablaBD);
            
            ?>
                        
                <script>
                $.confirm({
                        theme:'Material',
                        title: 'El Descuento Se Aplico Correctamente',
                        content: "El Descuento Del Producto Se Aplico Correctamente",
                        type: 'blue',
                        typeAnimated: true,
                        columnClass: 'medium',
                        buttons: {
                            tryAgain: {
                                text: 'Volver Al Menu Principal ',
                                btnClass: 'btn-blue',
                                action: function(){
                                    location.href="index.php?ruta=empleados";
                                }
                            },
                            trypago: {
                                text: 'Ver Descuento De Productos ',
                                btnClass: 'btn-blue',
                                action: function(){
                                    location.href="index.php?ruta=todo";
                                }
                            },
               
                        }
                });
                </script>
            <?php 



        }
    }


    public function actualizarUsuarioC(){
        if(isset($_POST['actualizar'])){
            $datosC = array(    
                                'Correo'=>$_POST['Correo'],
                                'nombre'=>$_POST['nombre'],
                                'apellido'=>$_POST['apellido'],
                          );
            $tablaBD = 'datosusuario';
            $pagina = $this->tareasM->actualizarUsuarioM($datosC, $tablaBD);
                                $_SESSION['nombre']=$_POST['nombre'];
                                $_SESSION['apellido']=$_POST['apellido'];
                                $_SESSION['correo']=$_POST['Correo'];
            header('location: index.php?rutas=empleado');
            return $pagina;
        }
    }

    public function entregarEmpleadoC(){
        if(isset($_GET['id_t'])){
            $datosC = array('id_t' => $_GET['id_t']);
            $tablaBD = 'tarea';
           
            $this->tareasM->entregarEmpleadoM($datosC, $tablaBD);
            header('location: index.php?rutas=empleados');
        }
    }
    public function CarritoC(){
        if(isset($_GET['idproducto'])){

            $datosC = array('idproducto' => $_GET['idproducto']);
            $tablaBD = 'carrito';

            $result=$this->tareasM->VerCarritoM($datosC, $tablaBD);
             $counter=mysqli_num_rows($result);
           
            if ($counter>=1) {
                $row = $result->fetch_array(MYSQLI_NUM);
                $datosC = array('cantidad' => $row[2],
                                'id_c' => $row[4]);

                $rest=$this->tareasM->VCarritoM($datosC, $tablaBD);
                header('location: index.php?rutas=empleados');

            }else{

                $this->tareasM->CarritoM($datosC, $tablaBD);
                header('location: index.php?rutas=empleados');   

            }
            


            
        }
    }

    public function VerCarritoC(){
      
        $tablaBD = 'usuario';
        $carrito = $this->tareasM->VerCarrito1M( $tablaBD);
        $counter=mysqli_num_rows($carrito);
        return $counter;    
        
    }

    public function MostrarCarritoC(){
      
        $tablaBD = 'usuario';
        $carrito = $this->tareasM->MostrarCarritoM( $tablaBD);
        
        return $carrito;    
        
    }

    public function publicoEmpleadoC(){
        if(isset($_GET['id_t'])){
            $datosC = array('id_t' => $_GET['id_t']);
            $tablaBD = 'tarea';
           
            $this->tareasM->publicoEmpleadoM($datosC, $tablaBD);
            header('location: index.php?rutas=empleados');
        }
    }

    public function BusquedaC(){
        if(isset($_GET['busqueda'])){

            $datos =$_GET['busqueda'];
           
           if ($datos=="categoria") {
            $tablaBD = 'usuario';
            $categoria = $this->tareasM->MostrarCategoriaM( $tablaBD);
            return $categoria;     

           }
           
            
        }
    }

    public function EditarCantidadC(){

        if(isset($_GET['id_c'])){
            
            $uso=$_GET['uso'];
            
            $datosC = array(    'cantidad' => $_GET['cantidad'],
                                'id_c' => $_GET['id_c']);
            
            if($uso=="Menos"){
                $co=$_GET['cantidad']-1;    

                
                if($co==0){
                    $this->tareasM->BorrarcarritoM($datosC);
                    header('location:index.php?ruta=carrito');
                }else{
                    $this->tareasM->EditarCantidadMenosM($datosC);
                    header('location:index.php?ruta=carrito');
                    
                }

            }elseif($uso=="Mas"){
            
                $this->tareasM->EditarCantidadMasM($datosC);
                header('location:index.php?ruta=carrito');
                
            }
            
            
            
        }
    }

    public function FinCompraC(){

        if(isset($_GET['estadocompra'])){
            
            $estadocompra=$_GET['estadocompra'];

            $pre=$_GET['preciotot'];

            if($estadocompra=="finalizado"){
                
                $datosC = array('preciotot' => $pre);
                
                   $compra=$this->tareasM->FinCompraM($datosC);
                    
                   $row = $compra->fetch_array(MYSQLI_NUM);
                   $datosC = array('id_v' => $row[0]);
                   $compra=$this->tareasM->FinalizarCompraM($datosC);

                   ?>
                        
                        <script>
                        $.confirm({
                                theme:'Material',
                                title: 'Compra Reservada',
                                content: "La Compra fue  Reservada Exitosamente porfavor Page El Monto Indicado Dentro de las 48 horas ",
                                type: 'green',
                                typeAnimated: true,
                                columnClass: 'medium',
                                buttons: {
                                    tryAgain: {
                                        text: 'Volver Al Menu Principal ',
                                        btnClass: 'btn-blue',
                                        action: function(){
                                            location.href="index.php?ruta=empleados";
                                        }
                                    },
                                    trypago: {
                                        text: 'Ir A Pagar Compra ',
                                        btnClass: 'btn-blue',
                                        action: function(){
                                            location.href="index.php?ruta=empleados";
                                        }
                                    },
                       
                                }
                        });
                        </script>
                    <?php

            }
            
            
            
        }
    }

    //borrar empleado
    public function borrarEmpleadoC(){
        if(isset($_GET['id_t'])){
            $datosC = array('id_t' => $_GET['id_t']);
            $tablaBD = 'tarea';
           
            $this->tareasM->borrarEmpleadoM($datosC, $tablaBD);
            header('location: index.php?rutas=empleados');
        }
    }

    public function recuperarContraverC(){
        if(isset($_POST['usuario'])){
            $datosC = array(
                            'usuario' => $_POST['usuario'],    
                            'email' => $_POST['email']);
            $tablaBD = 'datosusuario';
           
            $pagina =  $this->tareasM->recuperarContraverM($datosC, $tablaBD);
            $email=$_POST['email'];
            if ($pagina->num_rows)
                        {
                            
                            $row = $pagina->fetch_array(MYSQLI_NUM);
                            
                            
                                $id_U=$row[2];
                                $id_Ue=$row[8];
                                $codigo=$row[3];
                                $message = "El Codigo de confirmacion  de su cuenta es: $codigo";
                                if ($id_U==$id_Ue)
                                {
                                   
                                    mail("$email", 'Recuperacion de contraseña ', $message);
                                    header("location: index.php?ruta=recuperarcontraaceptado&id_u=$id_U");

                                }
                                

                        }


            
        }
    }

    public function recuperarContraC(){
        if(isset($_POST['id_u'])){
            if($_POST['contra']==$_POST['contraconfirm']){
            $datosC = array(
                            'id_u' => $_POST['id_u'], 
                            'codigo' => $_POST['clave'],              
                            
                            'contraconfirm' => $_POST['contraconfirm']);

            $tablaBD = 'usuarios';

           
            $pagina = $this->tareasM->VerificarCodM($datosC, $tablaBD);
            $contraseña= $_POST['contraconfirm']; 
           $codigo= $_POST['clave'];
            if ($pagina->num_rows)
            {
                
                $row = $pagina->fetch_array(MYSQLI_NUM);
                
                
                    $codigom=$row[3];
                    
                    
                    
                    if ($codigo==$codigom)
                    {
                       
                        $pagina = $this->tareasM->recuperarContraM($datosC, $tablaBD,$contraseña, $codigo);
                        header("location: index.php?ruta=ingreso&mensage=editadocorrectamente");
                    }else{
                    echo "introdusca el codigo correcto ";
                    }
                    

            }
            



            
        }else{
            echo "VERIFIQUE LA  CONTRASEÑA INTENTE NUEVAMENTE ";
        }
            
        }else{
            
        }
        
        
    }

   
}
?>