<?php
if ($_POST['btnEntrar'] == "acceder") {
  include("./funcion-conect.php");

  $cnn = Conectar();
  $rut = $_POST['rut'];
  $pass = $_POST['password'];

  $sql = "SELECT Rut, Clave FROM Usuario WHERE Rut = '$rut' AND Clave = '$pass'";
  $conec = mysqli_query($cnn, $sql);

  if (mysqli_num_rows($conec) != 0) {
    if ($row = mysqli_fetch_array($conec)) {
      // code...
    }
  }
}
?>
