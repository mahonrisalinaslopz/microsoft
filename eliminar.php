<?php 
include ("conexion.php");

$id = $_REQUEST['id'];

$query = "DELETE FROM producto WHERE id ='$id'";
$resultado = $conexion -> query($query);
if ($resultado) {
  header("Location:mostrar.php");
}
?>