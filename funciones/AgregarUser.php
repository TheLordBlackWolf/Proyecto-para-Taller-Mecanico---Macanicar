<?php

if ($_POST['btn_enviar'] == 'registrar') {
  include "conectar.php";

  $cnn = connectar();
  $Nombre = $_POST['nombre'];
  $Apellido = $_POST['apellido'];
  $Rut = $_POST['rut'];
  $Correo = $_POST['correo'];
  $Clave = $_POST['clave'];
  $Direccion = $_POST['direccion'];
  $Celular = $_POST['celular'];

  $sql = "INSERT INTO Usuario
	     	 VALUES('$Nombre','$Apellido','$Rut','$Correo','$Clave','$Direccion','$Celular')";
	     	mysqli_query($cnn, $sql);
	     	echo "<script> alert('Se han grabado los datos') </script>";
 }

?>
