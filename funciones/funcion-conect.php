<?php
function Conectar()
{
	if (!($cnn = mysqli_connect("localhost","root","root"))){
	 exit();
    }
    if (! mysqli_select_db($cnn,"DB_TallerMecanico"))
    {
    	exit();
    }
    return $cnn;
}

?>
