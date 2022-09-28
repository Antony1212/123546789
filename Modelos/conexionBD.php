<?php  //Modelos/conexcionBD.php
class ConexionBD{
    static public function cBD(){
        //$cbd = new mysqli('localhost','id18465475_antony123','e79kOi}Z$rJZ%dlP','id18465475_proyectog');
        $cbd = new mysqli('localhost','root','','arios');
        return $cbd;
    }
}
?>