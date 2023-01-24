<?php 
$conexion = new mysqli("localhost", "root", "", "microsoft");
if ($conexion) {
  echo "<strong>Conexión Exitosa</strong>";
} else {
  echo "<strong>Conexión Fallida</strong>";
}
?>