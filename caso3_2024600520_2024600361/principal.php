<?php
  session_start();
  if (!isset($_SESSION['usuario'])) {
      header("Location: loggin.php");
      exit();
  }

  include "auxmysql.php";

  $datos = seleccionar(["localhost", "root", "030605", "progw"], "SELECT * FROM productos");
?>

<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>Tienda</title>
    <style>
      .cerrar {
        position: absolute;
        top: 10px;
        right: 20px;
      }
      body {
        background-color: lavenderblush;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }
      h2 {
        text-align: center;
      }
      table {
        background-color: white;
        text-align: center;
        border-collapse: collapse;
        border-color: purple;
        width: 65%;
        margin: auto;
      }
      form {
        text-align: center;
      }
      input[type="submit"] {
        background-color:MediumOrchid;
        color: white;
      }
    </style>
  </head>
  <body>
    <h2>Productos en tienda</h2>
    <form action="cerrar.php" method="post" class="cerrar">
      <input type="submit" value="Cerrar Sesión">
    </form>
    <table border="3px">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($datos as $dato): ?>
            <tr>
                <td><?php echo $dato[0] ?></td>
                <td><?php echo $dato[1] ?></td>
                <td><?php echo $dato[2] ?></td>
                <td><?php echo $dato[3] ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
    </table>

    <h2>Nuevo Producto</h2>
    <form action="nuevoproduc.php" method="post">
      <label>Nombre</label>
      <input name="nombre"><br><br>
      <label>Precio</label>
      <input name="precio"><br><br>
      <label>Descripción</label>
      <input name="descripcion"><br><br>
      <input type="submit" value="Agregar producto">
    </form>
  </body>
</html>

