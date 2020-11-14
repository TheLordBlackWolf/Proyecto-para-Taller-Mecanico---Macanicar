<?php
function con()
{
	if (!($cnn = mysqli_connect("LocalHost","root","root"))){
	 exit();
    }
    if (! mysqli_select_db($cnn,"DB_TallerMecanico"))
    {
    	exit();
    }
    return $cnn;
}

?>
