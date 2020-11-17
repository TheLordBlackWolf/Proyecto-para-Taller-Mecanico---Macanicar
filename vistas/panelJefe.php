<?php

session_start();

include("../funciones/funcion-conect.php");
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <meta name="theme-color" content="#563d7c">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Bienvenidos Usuarios</title>

    <link rel="stylesheet" href="../css/style-jefe.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
<link href="../src/bootstrap-4.5.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <link href="signin.css" rel="stylesheet">

    <script type="text/javascript" src="../Js/mostrarForm.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>

<body class="text-center" style="background-image: url(../img/fondos/fondo.jpg); background-size: cover;">

  <ul class="nav justify-content-center navbar-dark bg-dark" style="height: 90px;">
      <img src="../img/mecanico/jefe.png" width="60" height="60" class="d-inline-block align-top" alt="" loading="lazy" style="margin: 10px;">
    <li class="nav-item" style="margin-top: 15px;">

<button type="submit" class="btn btn-primary" name="button" value="MostrarForm" onclick="mostrarForm(form);" >Buscar Orden</button>

    </li>
    <li class="nav-item" style="margin-top: 15px; margin: 16px;">
      <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal1">Modificar Orden</button>
    </li>
    <li class="nav-item" style="margin-top: 15px; margin: 16px;">
      <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal2">Borrar Orden </button>
    </li>
    <li class="nav-item" style="margin-top: 16px;">
      <button type="button" class="btn btn-outline-danger">Cerrar Sesion</button>
    </li>
  </ul>
  <div class="class-mecanico">
    <img src="../img/mecanico/jefe.png" width="160" height="160" class="d-inline-block align-top" alt="" loading="lazy">
  </div>

<form id="form" action="" method="POST" style="display: none;">
        <center><b><h2>Buscar orden</h2></b></center><br><center>
            <?php // incluir links?>
            <label for="">Ingrese el numero de orden</label>
            <input type="text" name="numOrden">
            <br>
              <input type="submit" name="btnBuscar" value="cargarOrden">

        <?php include("../funciPanelEmpleado/buscarOrden.php"); ?>
</form>

</body>
</html>
