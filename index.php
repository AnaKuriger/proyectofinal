<?php
   
   //datos
   $id = $_GET['id'];
   $fname = $_GET ['fname'];
   $apee = $_GET ['apee'];
   $dni = $_GET ['dni'];
   $email = $_GET ['email'];
   $numero = $_GET ['numero'];
   $ayd = $_GET ['ayd'];
   $materias = $_GET ['materias'];

   //conexion a la base de datos

    $direccion = "localhost";
    $basededatos = "registro";
    $usuario = "root";
    $contraseña = "";

    $conexion = mysqli_connect($direccion, $usuario, $contraseña, $basededatos);


    $consulta = "INSERT INTO DATOS (id,nombre,apellido,dni,email,celular,aydi,materias) 
        VALUES('$id','$fname','$apee','$dni','$email','$numero','$ayd','$materias')";

        $resultado = mysqli_query($conexion,$consulta);


        if($resultado == false){
            echo"Error en la consulta";
        }else{
            echo"Registro guardado";
        }


?>
