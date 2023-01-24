<!--IMPORTACION DE BOOTSTRAP -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<html>
  <head>
    <title> PRODUCTOS REGISTRADOS</title>
  </head>
  <body>
    <div class="container">
      <?php
        echo "<h1>PRODUCTOS REGISTRADOS</h1>" ?>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Img. Producto</th>
              <th>Modificar</th>
              <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include("conexion.php");
              $query = "SELECT * FROM producto";
              $resultado = $conexion -> query($query);
              while ($row = $resultado -> fetch_assoc()) {
                ?>
                  <tr>
                    <td> <?php echo $row['id']; ?></td>
                    <td> <?php echo $row['name']; ?></td>
                    <td> <img height="130" src="data:image/jpg;base64",<?php echo base64_encode(($row['imagen'])); ?>" /></td>
                    <td><a href="modificar.php?id=<?php echo $row ['id']; ?>"></a>Modificar</td>
                    <td><a href="eliminar.php?id=<?php echo $row ['id']; ?>"></a>Eliminar</td>
                  </tr>
                <?php 
              }
              ?>
          </tbody><strong> NUEVO </strong> 
        </table>
    </div>
  </body>
</html>