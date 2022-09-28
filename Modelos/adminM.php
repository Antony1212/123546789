<?php  //Modelos/adminM.php
    require_once "conexionBD.php";

    class AdminM extends ConexionBD{
        static public function IngresoM($datosC, $tablaBD){
            $cbd = ConexionBD::cBD();
            $usuario = $datosC['usuario'];
            $clave = $datosC['clave'];

            
           

            $query = "SELECT * FROM $tablaBD WHERE correo='$usuario'";

            $result = $cbd->query($query);
            return $result;
        }
        static public function RegistroM($datosC, $tablaBD){
            $cbd = ConexionBD::cBD();
            $codigo= rand(1000,9999);
            $usuario =   $datosC['usuario'];
            $clave =  $datosC['clave'];
            $password = password_hash($clave, PASSWORD_DEFAULT);
            
            $query="INSERT INTO  $tablaBD (idusuario,correo,password,roll,codigo)  VALUES (null,'$usuario','$password','CLIENTE',$codigo)";

            $result = $cbd->query($query);

            return $result;
            
            
        }
        static public function guardarUsuarioM($id_u){
            $cbd = ConexionBD::cBD();
            
           
            $query = "SELECT Nombrecliente, Apellidocliente, EmailCliente, Numerotel, doccliente  
                    FROM datoscliente WHERE id_usuario='$id_u'";
            $result = $cbd->query($query);
            return $result;
        }
        

    }
    
?>