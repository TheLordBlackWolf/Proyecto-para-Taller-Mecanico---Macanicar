
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">

    <title>Registre una nueva ficha tecnica </title>

    <link rel="stylesheet" href="../css/parche-fichatec.css">
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

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

  </head>

<body class="text-center">

  <form method="POST" action="" class="form-signin">
  		<?php error_reporting(0); ?>

    <img class="mb-4" src="../img/mecanico/plantilla-2.png" alt="" width="120" height="110">
    <img class="mb-4" src="../img/mecanico/llave-inglesa.png" alt="" width="120" height="110">

    <h1 class="h3 mb-3 font-weight-normal">Agregue otro auto y<br>Ficha tecnica </h1>

    <label for="" class="sr-only">Fecha Ingreso</label>
    <input type="text" name="fechaIngreso" id="" class="form-control" placeholder="Ingreso del vehiculo" required autofocus>
    <br>
    <label for="inputApellido" class="sr-only">Patente</label>
    <input type="text" name="patente" id=""  class="form-control" placeholder="Patente de su vehiculo" required>
    <br>
    <label for="inputRut" class="sr-only">Marca</label>
    <input type="text" name="marca" id="" class="form-control" placeholder="Marca de su vehiculo" required>
    <br>
    <label for="inputCorreo" class="sr-only">Modelo</label>
    <input type="text" name="modelo" id="" class="form-control" placeholder="Modelo de su vehiculo" required>
    <br>
    <label for="inputClave" class="sr-only">Año</label>
    <input type="text" name="año" id="" class="form-control" placeholder="Año de su vehiculor" required>
    <br>
    <label for="inputClave" class="sr-only">Color</label>
    <input type="text" name="color" id="" class="form-control" placeholder="Color de su vehiculo" required>
    <br>
    <label for="inputDireccion" class="sr-only">Tipo de combustible</label>
    <input type="text" name="tipoCombustible" id="" class="form-control" placeholder="Tipo de combustible que usa" required>
    <br>
    <label for="inputCelular" class="sr-only">Compañia de Seguro</label>
    <input type="text" name="compaSeguro" id="" class="form-control" placeholder="Compañia de Seguro vehicular" required>
    <br>
    <label for="inputClave" class="sr-only">Kilometraje</label>
    <input type="text" name="kilometraje" id="" class="form-control" placeholder="Kilometraje actual" required>
    <br>
    <button type="submit" name="btnAgregar" value="agregarFicha" class="btn btn-lg btn-primary btn-block">Agregar ficha tecnica</button>
    <button class="btn btn-lg btn-primary btn-block" type="button" onclick="location.href='http://localhost:8888/Mecanicar/vistas/panelUser.php/'">Cancelar</button>

    <p class="mt-5 mb-3 text-muted" style="color: white;">&copy; Taller mecanico - Mecanicar 2020</p>
  </form>

  <script src="../Js/scriptValidacion.js" type="text/javascript" ></script>
  </body>
  </html>


</body>
</html>
