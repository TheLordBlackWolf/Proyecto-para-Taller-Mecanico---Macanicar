<?php
// validamos el request para el login del sitio.
if (!isset($_SESSION)) {
  session_start();
}

$con = new mysqli("LocalHost","root","root","DB_TallerMecanico");

// chequeamos la conexion
if (mysqli_connect_error()) {
    die('Falló al conectar a MySQL: (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

//verificamoss el archivo include
// nos sevirá para validar datos dentro del sistema
if (is_file ('SingUp.php')){
     include ('SingUp.php');
    }
    else {
    include ('SingUp.php');
}

?>
