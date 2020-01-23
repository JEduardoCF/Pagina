<?php
$mysqli = new mysqli("localhost:3310", "root", "", "bdAmortizacion");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    return false;
}
/*$conexion = mysql_connect("localhost:3310", "root", "", "bdAmortizacion");
if (!$conexion) {
  echo "Error al conectar con la base de datos";
}else {
  return false;
}*/
?>
