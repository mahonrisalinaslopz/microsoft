<!--IMPORTACION DE BOOTSTRAP -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<html>
<head>
  <title>Index Microsoft</title>
</head>
<body>
  <div class="container">
    <?php
    echo '<h1> MODIFICACIÓN DE PRODUCTO </h1>',
    '<h2> PRODUCTOS </h2>';
    ?>
    <?php
      include("conexion.php");
      $id = $_REQUEST['id'];
      $query = "SELECT * FROM producto WHERE id = '$id'";
      $resultado = $conexion -> query($query);
      $row = $resultado -> fetch_assoc();
    ?>
    <form action="procesomod.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
      <div class="form-group mx-sm3 mb-2">
        <label> </label>
          <input type="text" REQUIRED class="form-control" name="name" placeholder="Nombre" value="<?php echo $row['name']; ?>" />
      </div>
      <img height="130" src="data:image/jpg;base64",<?php echo base64_encode(($row['imagen'])); ?>" /></td>
      <div class="form-group mx-sm3 mb-2">
        <label> </label>
          <input type="file" REQUIRED class="form-control" name="imagen">
      </div>
        <input type="submit" class="btn btn-primary mb-2" value="aceptar"/>
    </form>
  </div>
</body>
</html>