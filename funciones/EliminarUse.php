
<?php
                if($_POST['btnBorrar']=="Eliminar"){
                    include ("funciones.php");
                    $cnn = Conectar(); 
                    $rut = $_POST['txtRut'];                            
                    $sql = "delete from Usuario where rut='$rut'";
                    mysqli_query($cnn,$sql);
                    echo "<script>alert('Se ha Eliminado Rut $rut')</script>";
                }
?>
