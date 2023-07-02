<?php 

    # Obtenemos los datos
    $full_name=$_GET['full_name'];
    $dni=$_GET['dni'];
    $telefono=$_GET['telefono'];
    $email=$_GET['email'];
    $departamento=$_GET['departamento'];
    $provincia=$_GET['provincia'];
    $distrito=$_GET['distrito'];
    $direccion=$_GET['direccion'];
    $servicio=$_GET['servicio'];

    # Llamar ala conexión
    include_once 'conexion.php';
    $conexion=conexion();

    # Realizamos la inserción
    $sql="INSERT INTO ventas(full_name,dni,telefono,email,departamento,provincia,distrito,direccion,idservicio) VALUES('$full_name','$dni','$telefono','$email','$departamento','$provincia','$distrito','$direccion','$servicio')";	
    $query=mysqli_query($conexion,$sql);
    if($query){
        header('refresh:0;url=index.html?insertado');
    }

?>