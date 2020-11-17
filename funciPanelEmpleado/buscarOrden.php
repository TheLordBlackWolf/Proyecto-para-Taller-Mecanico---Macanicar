    <?php
        if($_POST['btnBuscar']=="cargarOrden"){

            include("../funciones/funcion-conect.php");

            $cnn = Conectar();
            $numOrden = $_POST['numOrden'];

            $rs = mysqli_query($cnn,"SELECT * FROM OrdenTrabajo WHERE Id_Ft = '$numOrden'");
                  echo "<table aling='center' border='1'>";
                  echo "<tr aling='center'>";
                  echo "<td><b>FechaIngreso</td>";
                  echo "<td><b>Patente</td>";
                  echo "<td><b>Marca</td>";
                  echo "<td><b>Modelo</td>";
                  echo "<td><b>Ano</td>";
                  echo "<td><b>TipoCombustible</td>";
                  echo "<td><b>NumMotor</td>";
                  echo "<td><b>CompaniaSeguro</td>";
                  echo "<td><b>Color</td>";
                  echo "<td><b>Kilometraje</td>";
                  echo "<td><b>NivelCombustible</td>";
                  echo "</tr>";
            while ($row = mysqli_fetch_array($rs)) {
                 echo "<tr>";
                 echo "<td>$row[0]</td>";
                 echo "<td>$row[1]</td>";
                 echo "<td>$row[2]</td>";
                 echo "<td>$row[3]</td>";
                 echo "<td>$row[4]</td>";
                 echo "<td>$row[5]</td>";
                 echo "<td>$row[6]</td>";
                 echo "<td>$row[7]</td>";
                 echo "<td>$row[8]</td>";
                 echo "<td>$row[9]</td>";
                 echo "<td>$row[10]</td>";
                 echo "<td>$row[11]</td>";
                 echo "</tr>";
             }
                echo "</table>";
         }

     ?>
