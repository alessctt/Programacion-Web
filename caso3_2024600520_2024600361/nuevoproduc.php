<?php
    include "auxmysql.php";

    if (isset($_POST["nombre"]) && $_POST["precio"]) {
      //Sigo con la inserción
      $nombre = $_POST["nombre"];
      $precio = $_POST["precio"];
      $descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : "";

      $query = "INSERT into productos (Nombre, Precio, Descripcion) values ('$nombre','$precio','$descripcion')";
      $id = insertar(["localhost", "root", "030605", "progw"], $query);

      if ($id !=0) {
        echo "<h1>Exito. Registro insertado correctamente</h1>";
        echo "<a href='principal.php'>Regresar</a>";
      } else {
        echo "<h1>Error. Contacta con el admon</h1>";
        echo "<a href='principal.php'>Regresar</a>";
      }

    } else {
      echo "<h1>Error en la consistencia de datos</h1>";
      echo "<a href='principal.php'>Regresar</a>";
    }
?>
