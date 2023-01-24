<?php 
include ("conexion.php");

$name = $_POST["name"];
$imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

$query = "INSERT INTO producto(`name`, `imagen`)
VALUES ('$name', '$imagen')";
$resultado = $conexion -> query($query);
if ($resultado) {
  echo "<br> El producto fue registrado con éxito.";
}
?>