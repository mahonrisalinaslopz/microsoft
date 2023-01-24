<?php 
include ("conexion.php");

$id = $_REQUEST['id'];
$name = $_POST["name"];
$imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

$query = "UPDATE productos SET name = '$name', imagen = '$imagen' WHERE id = '$id'";
$resultado = $conexion -> query($query);
if ($resultado) {
  header("Location:mostrar.php");
}
?>