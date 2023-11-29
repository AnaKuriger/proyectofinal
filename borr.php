<?php
   
//datos
   $id = $_GET['id'];
   $fname = $_GET ['fname'];
   $apee = $_GET ['apee'];

//conexion a la base de datos

    $direccion = "localhost";
    $basededatos = "registro";
    $usuario = "root";
    $contraseña = "";

    $conexion = mysqli_connect($direccion, $usuario, $contraseña, $basededatos);

//borrar
    $consulta = "DELETE FROM datos WHERE id='$id'";

        $resultado = mysqli_query($conexion,$consulta);

//te aparece un mensaje
        if($resultado == false){
            echo"Error en la consulta";
        }else{
            echo"Registro borrado";
        }


?>
