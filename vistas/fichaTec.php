<<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Ficha Tecnica</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-fichatec.css" />
    <link rel="stylesheet" href="css/style-redes.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </head>
  <body style="background-image: url(img/contact/back-fondo.jpeg); background-repeat: no-repeat; background-size: cover;">

    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="img/logo1.jpg" width="160" height="80" class="d-inline-block align-top" alt="">
        <strong style="font-family: serif; font-size: 40px; color: black; list-style: none; text-align: center;"><a href="index.php">MECANICAR</a></strong>
      </a>

      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-family: Vegur, Georgia, "Times New Roman", sans-serif;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" style="font-size: 20px; font-family: serif;" href="index.php">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: 20px; font-family: serif;" href="servicios.php">SERVICIOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: 20px; font-family: serif;" href="contacto.php">CONTACTENOS</a>
        </li>
      </ul>
    </div>
  </nav>
    </nav>

    <header id="reg-header">
      <div style="height: 595px;" id="frm-loginReg">
        <form method="" action="">
              <form method="post">
          <?php error_reporting(0); ?>
          <br>
          <br>
              <center class="titulo" style="font-size: 50px; font-family: serif;"><b>Ficha Tecnica Vehiculo</b></center>
              <center>
          <br>
          <br>
              <table border="0" class="texto2">
                  <tr>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td>Rut:</td>
                      <td><input type="text" name="txtRut" value=""></td>
                  </tr>
                  <tr>
                      <td>Fono:</td>
                      <td><input type="text" name="txtFon" value=""></td>
                  </tr>

                  <tr>
                      <td>Patente:</td>
                      <td><input type="text" name="txtPatent" value=""></td>
                  </tr>
                  <tr>
                      <td>Marca:</td>
                      <td>
                          <select name="txtMarca">
                              <option value=""></option>
                              <option value="Audi">Audi</option>
                              <option value="BMW">BMW</option>
                              <option value="Chery">Chery</option>
                              <option value="Chevrolet">Chevrolet</option>
                              <option value="Ford">Ford</option>
                              <option value="Dodge">Dodge</option>
                              <option value="Fiat">Fiat</option>
                              <option value="Honda">Honda</option>
                          </select>
                      </td>
                  </tr>
                  <tr>
                      <td>Modelo :</td>
                      <td><input type="text" name="txtModel" value=""></td>
                  </tr>
                  <tr>
                      <td>Año :</td>
                      <td><input type="date" name="txtan" value="" ></td>
                  </tr>
                  <tr>
                      <td>Combustible:</td>
                      <td>
                          <select name="txtCon">
                              <option value="">       </option>
                              <option value="Eléctrico">Combustible flexible</option>
                              <option value="Eléctrico híbrido">Eléctrico híbrido</option>
                              <option value="Hidrógeno">Hidrógeno</option>
                              <option value="Eléctrico">Eléctrico</option>
                              <option value="Eléctrico híbrido">Gas natural vehicular</option>
                              <option value="Eléctrico">Gas licuado del petróleo</option>
                          </select>
                      </td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <tr>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <tr>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <tr>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <tr>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                  </tr>
              </table>

              <div class="caja" >
                    <button type="button" class="btn btn-primary" onclick="location.href='http://localhost:8888/SistMecanicar/src/php/index.php'">Salir</button>
                    <button type="button" class="btn btn-primary" onclick="location.href='http://localhost:8888/SistMecanicar/src/php/ordenTrabajo.php'">Siguiente</button>
                    </div>
        </div>
      </form>
  </header>

  <div class="sticky-container">
    <ul class="sticky">
        <li>
            <img src="img/icon-redes/facebook.png" width="32" height="32">
            <p><a href="https://www.facebook.com/" target="_blank">Siguenos en<br>Facebook</a></p>
        </li>
        <li>
            <img src="img/icon-redes/twitter.png" width="32" height="32">
            <p><a href="https://twitter.com/" target="_blank">Siguenos en<br>Twitter</a></p>
        </li>
        <li>
            <img src="img/icon-redes/gmail.png" width="32" height="32">
            <p><a href="https://plus.google.com/" target="_blank">Escribenos a<br>Gmail</a></p>
        </li>
        <li>
            <img src="img/icon-redes/in-prueba.png" width="32" height="32">
            <p><a href="https://www.linkedin.com/" target="_blank">Siguenos en<br>LinkedIn</a></p>
        </li>
    </ul>
</div>
  </div>
</form>

<footer style="margin-top: 60px;">
<!-- Este será nuestro pie de página -->
<p>Todos los derechos reservados 2020, Empresa Taller Mecanico <strong style="color: white;"><a href="#">Mecanicar.</a></strong></p>
</footer>
  </body>
</html>
