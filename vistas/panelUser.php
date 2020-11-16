<?php
session_start();
    if( isset($_SESSION['datoTip'])){
        echo "El usuario conectado es: ".$_SESSION['datoNom'];
    }else{
        session_destroy();
        header("Location: ../index.php");
    }
?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Panel de usuario </title>

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

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

  </head>

<body class="text-center">
  <form method="POST" action="">

<h1><center>MENU DEL Usuario</center></h1>
    <?php
    error_reporting(0);
    ?>
   <h1>Mi perfil </h1>

<input type="text" name="rut" value="<?php echo $_SESSION['datoRut'];?>">
<input type="text" name="tipoUsuario" value="<?php echo $_SESSION['datoTip'];?>">

<br><br><br><br><br><br>
<input type="submit" name="btnSalir" value="Cerrar Sesion">

<?php
if($_POST['btnSalir']=="Cerrar Sesion"){
    session_destroy();
    header("Location: index.php");
}
?>
</form>

</body>
</html>
