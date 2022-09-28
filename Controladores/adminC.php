<?php  //Controladores/adminC.php

class AdminC{
    public function IngresoC(){

        if(isset($_SESSION['Ingreso'])) {
            header("location: index.php?ruta=empleados");
        }

        if(isset($_POST["usuarioI"] ))
        {

            $datosC = array(

                        "usuario"=>$_POST["usuarioI"], 
                        "clave"=>$_POST["claveI"]);

            $tablaBD = "usuario";

            $inicio = AdminM::IngresoM($datosC, $tablaBD);

            if (!$inicio) echo"Usuario no encontrado";


            elseif ($inicio->num_rows)
            {
                $pw_temp=$_POST['claveI'];
                $row = $inicio->fetch_array(MYSQLI_NUM);
                $inicio->close();
                if (password_verify($pw_temp, $row[2])){
                  
                    $username=$row[1];
                    $id_u=$row[0];
                    $roll=$row[3];
                    
                    $inicio = AdminM::guardarUsuarioM($id_u);
                    if (!$inicio) echo"Usuario no encontrado";


                    if  ($inicio->num_rows)
                        {
                            
                            $row = $inicio->fetch_array(MYSQLI_NUM);
                            $inicio->close();
                            
                                $_SESSION['username']=$username;
                                $_SESSION['id_u']=$id_u;
                                $_SESSION['roll'] =$roll;
                                $_SESSION['nombre']=$row[0];
                                $_SESSION['apellido']=$row[1];
                                $_SESSION['correo']=$row[3];
                                session_start();
                                setcookie('username',$_SESSION['username'],time()+ 5);
                                $GLOBALS['entrada']=true;
                                $_SESSION['Ingreso']=true;
                                header("location: index.php?ruta=empleados");  
                               
                        
                        } 

                    
                }else {
                echo "CLAVE O CONTRASEÑA INCORECTA INTENTE NUEVAMENTE";
                }
         
            }
        }
    }

    public function RegistroC(){

       
        if(isset($_SESSION['registrar'])) header("location:index.php?ruta=registrarse");

        if(isset($_POST["correo"])){
            if($_POST['clave2']==$_POST['claveI'])
            {

                    $datosC = array(    
                                "usuario"=>$_POST["correo"], 
                                "clave"=>$_POST["claveI"]);
                                
                    $tablaBD = "usuario";

                    $res = AdminM::RegistroM($datosC, $tablaBD);

                    if (!$res) {echo"EL NOMBRE DE USUARIO YA SE ENCUENTRA EN USO"; }
 
                    else{
                        $datosC = array(    
                            "usuario"=>$_POST["correo"], 
                            "contraseña"=>$_POST["claveI"]);
    
                         $tablaBD = "usuario";
    
                         $res= AdminM::IngresoM($datosC, $tablaBD);
                    

                        if ($res->num_rows)
                        {
                            $pw_temp=$_POST['claveI'];
                            $row = $res->fetch_array(MYSQLI_NUM);
                            $res->close();
                        
                            
                                $_SESSION['username']=$row[1];
                                $_SESSION['id_u']=$row[0];
                                

                                //cookie
                                setcookie('nombre',$_SESSION['nombre'],time()+ 5);
                                $GLOBALS['entrada']=true;
                                $_SESSION['Ingreso']=true;
                                header("location: index.php?ruta=registrarusuario");

                        }
                    }
                    

            }

            else
            {
                echo "VERIFIQUE LA  CONTRASEÑA INTENTE NUEVAMENTE ";
            }
        }
    }
    


    public function salirC(){
        session_destroy();
        header("location:index.php?=ingreso");
    }

   
}
?>