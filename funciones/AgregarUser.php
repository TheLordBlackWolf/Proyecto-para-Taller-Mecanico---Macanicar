<?php

if($_POST["btn_enviar"]=="registrar"){
include("./funcion-conect.php");

  $cnn = Conectar();
  $Nombre = $_POST['nombre'];
  $Apellido = $_POST['apellido'];
  $Rut = $_POST['rut'];
  $Correo = $_POST['email'];
  $Clave = $_POST['clave'];
  $Direccion = $_POST['direccion'];
  $Celular = $_POST['celular'];
  $Cargo = $_POST['cargo'];


        $sql = "INSERT INTO Usuario(Nombre, Apellido, Rut, Correo, Clave, Direccion, Celular, Cargo)
         VALUES ('$Nombre','$Apellido','$Rut','$Correo ','$Clave','$Direccion ','$Celular', '$Cargo')";
	     	$resultado = mysqli_query($cnn, $sql);
	     	if ($resultado) {
           ?>
           echo "<script> alert('Se han grabado los datos') </script>";
           <?php
         }
 }

?>
