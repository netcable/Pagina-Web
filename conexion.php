<?php 
    function conexion(){
        $conexion=mysqli_connect('localhost','root','','cable_net','3306');
        if($conexion){
            return $conexion;
        }else{
            return 'Error de conexión';
        }
    }
?>