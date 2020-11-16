<?php
session_start();

include("./funciones/funcion-conect.php");

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
    <title>Bienvenidos Usuarios</title>

    <link rel="stylesheet" href="css/main.css">
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

    <script type="text/javascript" src="Js/ReloadPage.js"></script>

</head>

<body class="text-center">

<form action="" class="form-signin" method="POST">
  <?php
          if(isset($errorLogin)){
              echo $errorLogin;
          }
      ?>
  <img class="mb-4" src="img/avatar/hombreMasca.png" alt="" width="140" height="120">
  <img class="mb-4" src="img/avatar/mujerMasca.png" alt="" width="140" height="120">

  <h1 class="h3 mb-3 font-weight-normal">Inicio de Sesion</h1>
  <br>
  <label for="inputEmail" class="sr-only">Rut</label>
  <input type="text" name="rut" id="inputRut" class="form-control" placeholder="Su rut por favor" required autofocus>
  <br>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" name="clave" id="inputPassword" class="form-control" placeholder="Su clave por favor" required>

  <div class="checkbox mb-3">
    <label style="color:white; font-size: 20px;">
      <input type="checkbox" value="remember-me"> Recordar usuario
    </label>
  </div>
  <button type="submit" name="btnEntrar" value="acceder" class="btn btn-lg btn-primary btn-block">Iniciar Sesion</button>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" onclick="location.href='http://localhost:8888/Mecanicar/vistas/SingUp.php'">Registrese aqui</button>
  <br>
  <span style="color: white; font-size: 20px; list-style: none;">
    <strong></strong>
    <a style=" width: 210px; color: black; border: 2px solid yellow; border-radius: 4px; background-color: white;" href="vistas/SingUp.php">
      ¿Has olvidado tu contraseña?
    </a>
  </span>
  <p class="mt-5 mb-3 text-muted">&copy; Taller mecanico - Mecanicar 2020</p>
</form>
<?php
  include("./funciones/validacionUser.php");
 ?>
</body>
</html>
