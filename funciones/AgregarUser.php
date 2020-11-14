<?php

if($_POST["btn_enviar"]=="registrar"){
include("./funcion-conect.php");

  $Nombre = $_POST['nombre'];
  $Apellido = $_POST['apellido'];
  $Rut = $_POST['rut'];
  $Correo = $_POST['email'];
  $Clave = $_POST['clave'];
  $Direccion = $_POST['direccion'];
  $Celular = $_POST['celular'];


        $sql = "INSERT INTO Usuario(Nombre, Apellido, Rut, Correo, Clave, Direccion, Celular)
         VALUES ('$Nombre','$Apellido','$Rut','$Correo ','$Clave','$Direccion ','$Celular')";
	     	$resultado = mysqli_query($conexion, $sql);
	     	if ($resultado) {
           ?>
           echo "<script> alert('Se han grabado los datos') </script>";
           <?php
         } 
 }

?>
