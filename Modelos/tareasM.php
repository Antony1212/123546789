<?php  //Modelos/empleadosM.php
require_once "conexionBD.php";

class TareasM extends ConexionBD{
 
    public function registrarEmpleadosM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        
        $nombre = $datosC['nombreR'] ;
        $Descripcion = $datosC['Descripcion'];
        $marca = $datosC['marca'];
        $precio =  $datosC['precio'] ;
        $fechallegada= $datosC['fechallegada'] ;
        $vencimientogarantia=$datosC['vencimientogarantia'];
        $stock=$datosC['stock'];
        $Categoria=$datosC['Categoria'];
        $almacen=$datosC['almacen'];
        $Distribuidor=$datosC['Distribuidor'];
        $binariosImagen=$datosC['binariosImagen'] ;

        



        
        $query = "INSERT INTO $tablaBD VALUES 
            (null,'$nombre', '$Descripcion',  '$marca' , '$fechallegada',' $vencimientogarantia',  '$stock',$Categoria ,$almacen ,$Distribuidor,$precio,$binariosImagen)";
        echo "$query";
        $result = $cbd->query($query);

        return $result;
    }

    public function registrarDistribuidoraM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        
        $nombred = $datosC['nombred'] ;
        $Direccion = $datosC['Direccion'];
        $Correo = $datosC['Correo'];
        
        $query = "INSERT INTO `distribuidor` VALUES (null,'$nombred', '$Direccion' , '$Correo')";

        $result = $cbd->query($query);

        return $result;
    }

    public function registrarAlmacenM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        
        $nombred = $datosC['nombrea'] ;
        $Direccion = $datosC['Direccion'];
        
        
        $query = "INSERT INTO `almacen` VALUES (null,'$nombred', '$Direccion',NULL)";
        echo "$query";
        $result = $cbd->query($query);

        return $result;
    }



    public function registrarUsuarioM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        
        $nombre = $datosC['nombreR'] ;
        $apellidoR = $datosC['apellidoR'] ;
        $dni = $datosC['dni'];
        $telefono = $datosC['telefono'];
        $departamento =  $datosC['departamento'] ;
        $direccion =  $datosC['direccion'] ;
        
        $id_u=$datosC['id_u'];
        $correo=$datosC['correo'];
        $query = "INSERT INTO $tablaBD VALUES 
            ('$id_u', '$dni',  '$nombre' , '$apellidoR',
            'Persona Natural','$correo','$telefono','$departamento','$direccion')";

        $result = $cbd->query($query);
         

        return $result;
    }

    public function mostrarEmpleadosM($tablaBD){

        $cbd = ConexionBD::cBD();


        $query = "SELECT * FROM producto ORDER BY `descuento` DESC";

        $result = $cbd->query($query);
        return $result;
    }

    public function mostrarCategoriaMM($tablaBD,$datosC){
        $cbd = ConexionBD::cBD();
        
        $idcatego = $datosC['idcatego'] ;

        $query = "SELECT * FROM $tablaBD  Where Categoriaproducto_idCategoriaproducto=$idcatego  order by descuento desc";
        
        
        $result = $cbd->query($query);
        return $result;
       
    }

    public function mostrarPedidosGarantiaM($tablaBD){
        $cbd = ConexionBD::cBD();
        
        $query = "SELECT * FROM $tablaBD Where EstadoProducto= 'normal' order by `VencGarantia` ASC";
        $result = $cbd->query($query);
        return $result;
    }

    public function mostrarEmpleadosbM($tablaBD){
        $cbd = ConexionBD::cBD();
        
        $query = "SELECT idProducto,Nombreproducto, Descripcionproducto, Marcaprod, Cantidadproducto, Precioproducto,imagen FROM $tablaBD  order by `Cantidadproducto` ASC";
        $result = $cbd->query($query);
        return $result;
    }

    public function MostrarPedidoPM($tablaBD){
        $cbd = ConexionBD::cBD();

        $IU=$_SESSION['id_u'];
        
        $query = "SELECT * FROM `venta` as v,carrito as c WHERE estadoventa= 'Pago Pendiente' and id_u=$IU and id_v=idv and TiempoReserva>=Fecha  ORDER BY TiempoReserva ASC";
        $result = $cbd->query($query);
        return $result;
    }

    public function MostrarPedidoCM($datosC){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $IU=$_SESSION['id_u'];
        
        $query = "SELECT * FROM `venta` as v,carrito as c,producto as p WHERE estadoventa= 'Pago Pendiente' and id_u=$IU and id_v=$idv and idv=$idv and TiempoReserva>=Fecha and idProducto=id_p ORDER BY TiempoReserva ASC";
        $result = $cbd->query($query);
        return $result;
    }

    public function BorrarProductoM($datosC){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $IU=$_SESSION['id_u'];
      
        $query = "DELETE FROM `producto` WHERE `idProducto` = $idprod";
        $result = $cbd->query($query);
        return $result;
    }

    public function mostrarProductosOfertaM($tablaBD){
        $cbd = ConexionBD::cBD();
        
        $query = "SELECT * FROM `producto` order by Extenciongarantia DESC";
        $result = $cbd->query($query);
        return $result;
    }

    public function RenovarExtencionM($datosC){
        $cbd = ConexionBD::cBD();
        extract($datosC);

        $fechaactual= date('Y-m-d');
        $date_future = strtotime('+359 day', strtotime($fechaactual));
        $date_future = date('Y-m-d', $date_future);
       
       
        $query = " UPDATE `producto` SET `Extenciongarantia` = '$date_future', EstadoProducto= 'Extendido' WHERE `idProducto` = $idprodu";
        $result = $cbd->query($query);
        return $result;
    }

    public function mostrarEmpleadostodoM($tablaBD){
        $cbd = ConexionBD::cBD();
        
        
        $query = "SELECT Titulo, Contenido, f_registro, f_vencimiento, id_tarea, prioridad, id_t, estado  
                FROM $tablaBD WHERE privatarea = 'Publico' order by f_vencimiento desc";
        $result = $cbd->query($query);
        return $result;
    }

   
    

    public function editarEmpleadoM($tablaBD){
        $cbd = ConexionBD::cBD();
        
        $query = "SELECT idusuario, correo, roll, doccliente, Nombrecliente, Apellidocliente, Numerotel FROM usuario,datoscliente WHERE idusuario=id_usuario";
        $result = $cbd->query($query);
        return $result;
       
    }

    public function MostrarCategoriaM($tablaBD){
        $cbd = ConexionBD::cBD();
        
        $query = "SELECT * FROM categoriaproducto";
        $result = $cbd->query($query);
        return $result;
       
    }

    public function MostrarDistribuidorM($tablaBD){
        $cbd = ConexionBD::cBD();
        
        $query = "SELECT * FROM distribuidor";
        $result = $cbd->query($query);
        return $result;
       
    }

    public function EditarCantidadMenosM($datosC){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $cant=$cantidad-1;
        
        $query = "UPDATE `carrito` SET `Cantidad` = ' $cant' WHERE `id_c` = $id_c";
        $result = $cbd->query($query);
        return $result;
       
    }

    public function EditarCantidadMasM($datosC){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $cant=$cantidad+1;
        $query = "UPDATE `carrito` SET `Cantidad` = '$cant' WHERE `id_c` = $id_c";
        $result = $cbd->query($query);
        return $result;
       
    }

    public function FinCompraM($datosC){
        $cbd = ConexionBD::cBD();
        extract($datosC);

        $fechaactual= date('Y-m-d H:i:s');
        $date_future = strtotime('+365 day', strtotime($fechaactual));
        $date_future = date('Y-m-d H:i:s', $date_future);
        
        $fechaactual= date('Y-m-d H:i:s');
        $date_reserva = strtotime('+4 day', strtotime($fechaactual));
        $date_reserva = date('Y-m-d H:i:s', $date_reserva);

        $cod123 = rand(1000,9999);
        $cod1f="$cod123$fechaactual";

        
        $query = "INSERT INTO `venta` VALUES (NULL,'$fechaactual','$cod1f','Boleta','$preciotot','$date_future','Pago Pendiente','$date_reserva')";
        $result = $cbd->query($query);
        $select = "SELECT * FROM `venta` WHERE Fecha='$fechaactual' AND codigoventa='$cod1f' AND PrecioTotal='$preciotot'";
        $result1 = $cbd->query($select);
        return $result1;
       
    }

    public function FinalizarCompraM($datosC){

        $cbd = ConexionBD::cBD();
        $ID_U=$_SESSION['id_u'];
        extract($datosC);
        
       $query = "UPDATE `carrito` SET `Estado`='Pendiente De Pago',`idv`=$id_v WHERE id_u= $ID_U AND Estado='pendiente'";
       $result = $cbd->query($query);
        
       return $result;
       
    }

    public function BorrarcarritoM($datosC){
        $cbd = ConexionBD::cBD();
        extract($datosC);
       
        
        $query = "DELETE FROM `carrito` WHERE `id_c` = $id_c";
        $result = $cbd->query($query);
        return $result;
       
    }

    public function MostrarAlmacenM($tablaBD){
        $cbd = ConexionBD::cBD();
        
        $query = "SELECT * FROM almacen";
        $result = $cbd->query($query);
        return $result;
       
    }

    public function actualizarEmpleadoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        
        $id = $datosC['id'] ;
        $nombre = $datosC['nombre'];
        $apellido = $datosC['apellido'];
        $puesto =  $datosC['puesto'] ;
        $salario= $datosC['salario'] ;
        

        $query = "UPDATE tarea SET Titulo='$nombre', Contenido='$apellido',f_vencimiento='$puesto', prioridad='$salario'  WHERE id_t ='$id'";
        
        $resultado = $cbd->query($query);
        return $resultado;    
    }

    public function AgregarporcentajeM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        
        $porcentaje = $datosC['porcentaje'] ;
        $prodId = $datosC['prodId'] ;
        

        $query = "UPDATE $tablaBD SET descuento='$porcentaje'  WHERE idProducto ='$prodId'";
        
        $resultado = $cbd->query($query);
        return $resultado;    
    }

    public function actualizarUsuarioM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        
       
        $nombre = $datosC['nombre'];
        $apellido = $datosC['apellido'];
        $correo =  $datosC['Correo'] ;
        $id =  $_SESSION['id_u'] ;
        

        $query = "UPDATE $tablaBD SET nombre='$nombre', apellido='$apellido', correo='$correo'  WHERE id_u ='$id'";
        
        $resultado = $cbd->query($query);
        return $resultado;    
    }

    public function borrarEmpleadoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $query = "DELETE FROM tarea WHERE id_t='$id_t'";
        
        $resultado = $cbd->query($query);
    }

    public function entregarEmpleadoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $query = "UPDATE tarea SET estado = 'Entregado' WHERE `id_t` = $id_t";
        
        
        $resultado = $cbd->query($query);
    }
    public function VerCarritoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $IDU=$_SESSION['id_u'];

        $query = "SELECT `id_u`, `id_p`, `Cantidad`, `Estado`, `id_c` FROM `carrito` WHERE id_u=$IDU AND id_p=$idproducto AND Estado= 'pendiente' ";

        $resultado = $cbd->query($query);

        return $resultado;
    }

    public function VerCarrito1M($tablaBD){
        $cbd = ConexionBD::cBD();
        
        $IDU=$_SESSION['id_u'];


        $query = "SELECT  `id_p`, `Cantidad`, `Estado`, `id_c` FROM `carrito` WHERE Estado= 'pendiente' AND  id_u=$IDU ";

        $resultado = $cbd->query($query);

        return $resultado;
    }

    public function MostrarCarritoM($tablaBD){
        $cbd = ConexionBD::cBD();
        
        $IDU=$_SESSION['id_u'];
        
        $query = "SELECT * FROM `carrito`as c,producto as p WHERE  Estado= 'pendiente' AND id_p=p.idProducto AND id_u=$IDU AND Cantidad>=1";

        $resultado = $cbd->query($query);   

        return $resultado;
    }

    public function VCarritoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $IDU=$_SESSION['id_u'];
        $c=$cantidad+1;
        
        $query = "UPDATE `carrito` SET `Cantidad` = $c WHERE `id_c` = $id_c;";

        $resultado = $cbd->query($query);

        return $resultado;
    }

    public function CarritoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $IDU=$_SESSION['id_u'];

        $query = "INSERT INTO `carrito` (`id_u`, `id_p`, `Cantidad`, `Estado`) VALUES ('$IDU', '$idproducto', '1', 'pendiente')";
        
        
        $resultado = $cbd->query($query);
    }

    public function publicoEmpleadoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $query = "UPDATE tarea SET privatarea = 'Publico' WHERE `id_t` = $id_t";
        
        
        $resultado = $cbd->query($query);
    }

    public function recuperarContraverM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();

        $email = $datosC['email'];
        $usuario = $datosC['usuario'];   


        $query = "SELECT * FROM usuarios, datosusuario WHERE usuarios.username ='$usuario' AND datosusuario.correo='$email'";
        $result = $cbd->query($query);
       
        return $result;
    }
    public function VerificarCodM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        
       
        $id_u = $datosC['id_u'];  


        $query = "SELECT * from usuarios WHERE  id_u= $id_u";

        $resultado = $cbd->query($query);
        return $resultado;
    }

    public function recuperarContraM($datosC, $tablaBD, $contraseña){
        $cbd = ConexionBD::cBD();

        $codigo = rand(1000,9999);
        $password = password_hash($contraseña, PASSWORD_DEFAULT);
        $id_u = $datosC['id_u'];  
        
        $query = "UPDATE usuarios SET password = '$password' , codigo = '$codigo' WHERE id_u =$id_u ";
        
        
        $resultado = $cbd->query($query);
        return $resultado;
    }
} 
?>