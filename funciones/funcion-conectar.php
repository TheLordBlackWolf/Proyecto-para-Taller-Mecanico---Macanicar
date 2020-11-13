<?php
$mysqli = new mysqli("LocalHost", "root", "root", "DB_TallerMecanico");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$mysqli = new mysqli("127.0.0.1", "root", "root", "DB_TallerMecanico", 8889);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>
