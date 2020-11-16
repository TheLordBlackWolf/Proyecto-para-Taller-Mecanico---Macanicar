<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Registrese </title>

    <link rel="stylesheet" href="../css/main.css">
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
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

  </head>

<body class="text-center">

<form method="POST" action="" class="form-signin">
		<?php error_reporting(0); ?>

  <img class="mb-4" src="../img/avatar/empresario.png" alt="" width="140" height="120">

  <h1 class="h3 mb-3 font-weight-normal">Por favor, complete el formulario</h1>

  <label for="" class="sr-only">Nombre</label>
  <input type="text" name="nombre" id="" class="form-control" placeholder="Su Nombre por favor" required autofocus>

  <label for="inputApellido" class="sr-only">Apellido</label>
  <input type="text" name="apellido" id=""  class="form-control" placeholder="Su Apellido por favor" required>

  <label for="inputRut" class="sr-only">Rut</label>
  <input type="text" name="rut" id="" class="form-control" placeholder="Su Rut por favor" required>

  <label for="inputCorreo" class="sr-only">Correo</label>
  <input type="text" name="email" id="" class="form-control" placeholder="Su Correo por favor" required>

  <label for="inputClave" class="sr-only">Clave</label>
  <input type="password" name="clave" id="" class="form-control" placeholder="Su Clave por favor" required>

  <label for="inputDireccion" class="sr-only" style="color: white;">Direccion</label>
  <input type="text" name="direccion" id="" class="form-control" placeholder="Su Direccion por favor" required>

  <label for="inputCelular" class="sr-only">Celular</label>
  <input type="text" name="celular" id="" class="form-control" placeholder="Su Celular por favor" required>
  <br>

  <select id="primary" class="" name="TipoUsuario" style="width: 300px; height: 250px;">
    <option value="">Seleccione tipo de usuario</option>
    <option value="cliente" style="height: 100px;">Cliente</option>
    <option value="empleado">Empleado</option>
  </select>
  <br><br>
  <select id="secondary" name="CargoEmpleado" style="width: 300px; height: 250px;">
    <option value="">Seleccione su Cargo</option>
    <option value="cliente" style="height: 100px;">Jefe de taller</option>
    <option value="empleado">Mecanico</option>
  </select>
  <br><br>
  <button type="submit" name="btn_enviar" value="registrar" class="btn btn-lg btn-primary btn-block">Registrar Usuario</button>
  <button class="btn btn-lg btn-primary btn-block" type="" onclick="location.href='http://localhost:8888/Mecanicar/'">Iniciar Sesion</button>

  <p class="mt-5 mb-3 text-muted" style="color: white;">&copy; Taller mecanico - Mecanicar 2020</p>
</form>

<?php
include('../funciones/funcion-conect.php');
include('../funciones/AgregarUser.php');
 ?>
<script type="text/javascript" src="../Js/comboBox.js">
</script>

</body>
</html>
