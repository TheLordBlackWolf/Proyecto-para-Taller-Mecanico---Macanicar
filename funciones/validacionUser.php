<?php

if($_POST['btnEntrar']=="acceder"){
    include ("../funciones/funcion-conect.php");
    $cnn = Conectar();
    $rut = $_POST['rut'];
    $clave = $_POST['clave'];

    $sql = "SELECT * from usuarios where Rut ='$rut' and Clave ='$clave'";
    $rs = mysqli_query($cnn,$sql);
        if(mysqli_num_rows($rs) != 0 ){
            if($row = mysqli_fetch_array($rs)){
                $nom = $row[1]; // extraigo de la tabla el nombre
                $car = $row[2]; // extraigo de la tabla el cargo
                $tip = $row[8]; // extraigo de la tabla el TIPO

                switch ($tip) {
                    case 1: // Cliente
                        echo "<script>alert('Usted es $nom y es $car')</script>";
                        echo "<script type='text/javascript'>window.location='../vistas/panelUser.php'</script>";
                        break;
                    case 2: // Jefe de Taller
                        echo "<script>alert('Usted es $nom y es $car')</script>";
                        echo "<script type='text/javascript'>window.location='../vistas/panelJefe.php'</script>";
                        break;

                    default:
                        echo "<script>alert('Usted no es Usuario')</script>";
                        echo "<script type='text/javascript'>window.location='index.php'</script>";
                        break;
                }
            }
        }else{
            echo "<script>alert('Usuario o Clave incorrecta')</script>";
        }
}


 ?>
