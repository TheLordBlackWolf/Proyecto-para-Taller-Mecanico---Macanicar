<?php
                if($_POST['btnEntrar']=="acceder"){
                    include("./funcion-conect.php");

                    $cnn = Conectar();

                    $rut = $_POST['rut'];
                    $pass = $_POST['clave'];

                    $$sql = "SELECT Rut, Clave FROM Usuario WHERE Rut = '$rut' AND Clave = '$pass'";

                    $rs = mysqli_query($cnn,$sql);

                        if(mysqli_num_rows($rs) != 0 ){
                            if($row = mysqli_fetch_array($rs)){
                                $_SESSION['datoNom'] = $row[1]; // extraigo de la tabla el nombre
                                $_SESSION['datoRut'] = $row[3]; // extraigo de la tabla el rut
                                $_SESSION['datoTip'] = $row[8]; // extraigo de la tabla el TIPO
                                $_SESSION['datoCar'] = $row[9]; // extraigo de la tabla el cargo

                                switch ($_SESSION['datoTip']) {
                                    case 1: // Cliente
                                        echo "<script>alert('Usted es $_SESSION[datoNom] y es $_SESSION[datoCar]')</script>";
                                        echo "<script type='text/javascript'>window.location='panelUser.php'</script>";
                                        break;
                                    case 2: // Jefe de taller
                                        echo "<script>alert('Usted es $_SESSION[datoNom] y es $_SESSION[datoCar]')</script>";
                                        echo "<script type='text/javascript'>window.location='panelJefe.php'</script>";
                                        break;
                                    case 3: // Supervisor
                                        echo "<script>alert('Usted es $_SESSION[datoNom] y es $_SESSION[datoCar]')</script>";
                                        echo "<script type='text/javascript'>window.location='panelSupervisor.php'</script>";
                                        break;

                                    default:
                                        echo "<script>alert('Usted no es Usuario, registrese aqui')</script>";
                                        echo "<script type='text/javascript'>window.location='SingUp.php'</script>";
                                        break;
                                }
                            }
                        }else{
                            echo "<script>alert('Usuario o Clave incorrecta')</script>";
                        }
                }
            ?>
