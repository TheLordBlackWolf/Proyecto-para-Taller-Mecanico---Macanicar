<<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Crear Orden de Trabajo</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-orden.css" />
    <link rel="stylesheet" href="css/style-redes.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="../src/js/alert.js"></script>
    <script>
      $(function () {
          $.datepicker.setDefaults($.datepicker.regional["es"]);
          $("#datepicker").datepicker({firstDay: 1});});
        </script>
</head>
  <body>

    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="img/logo1.jpg" width="160" height="80" class="d-inline-block align-top" alt="">
        <strong style="font-family: serif; font-size: 40px; color: black; list-style: none; text-align: center;"><a href="index.php">MECANICAR</a></strong>
      </a>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="servicios.php">SERVICIOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto.php">CONTACTENOS</a>
        </li>
      </ul>
    </div>
  </nav>
    </nav>

    <header id="reg-header">
      <div style="height: 595px;" id="frm-loginReg">
        <form method="" action="">
          <h2>Crear Orden de Trabajo</h2>

          <div class="form-vert">
            <label style="font-size: 17px;">Nombre Chofer de entrega</label>
              <input type="text" name="nombre" placeholder="ingrese su nombre">
            <label style="font-size: 17px;">Apelldios Chofer de entrega</label>
              <input type="text" name="apellidos" placeholder="ingrese su apellidos">
              <label style="margin-left: 200px;" style="font-size: 20px;">Rut Chofer</label>
                <input style="margin-left: -30px; width: 350px;" type="text" name="apellidos" placeholder="ingrese su apellidos">

              <label style="margin-left: -670px; position: absolute; margin-top: 110px; font-size: 17px;" for="start">Seleccione el dia de entrega :</label>
              <div style="width: 200px; margin-top: 90px;" id="datepicker"></div>

                <label style="margin-left: 500px; margin-top: -270px; font-size: 17px;">Descripcion</label>
                <input type="textarea" value="" placeholder="Ingrese los detalles del vehiculo" style="margin-left: 500px; margin-top: -240px; width: 430px; height: 240px;" />

                <input name="cbipeliculas" type="checkbox" style="margin-top: 45px; display: inline-flex;" />
                <p style="margin-left: 30px; margin-top: -24px;">Acepta los terminos y condiciones.</p>
                <input name="cbipeliculas" type="checkbox" style="margin-top: 10px; margin: 5px;" />
                <p style="margin-left: 30px; margin-top: -24px;">Al dejar a un segundo chofer a cargo el cliente se hara cargo en caso de daños.</p>
        </div>
        <div class="caja">
              <button type="button" class="btn btn-primary" onclick="location.href='http://localhost:8888/SistMecanicar/src/php/fichaTec.php'">Regresar</button>
              <button type="button" class="btn btn-primary" onclick="location.href='http://localhost:8888/SistMecanicar/src/php/gracias.php'">Enviar Orden</button>
              </div>
        </div>
      </form>
    </div>
  </header>
  </div>
</form>
</body>
</html>
