<?php
session_start();
if (isset($_SESSION["usuario"])) {
  } 
  elseif (isset($_COOKIE["usuario"])) {
    $_SESSION["usuario"] = $_COOKIE["usuario"];
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>CasoPractico 2</title>
  <style>
    h1 {
      text-align: center;
      padding-top: 150px;
      color: darkblue;
      font-size: 35px;
    } 
    form {
      text-align: center;
    }
    input {
      margin-top: 20px;
    }
    label {
      font-size: 15px;
    }
  </style>
</head>
<body>
  <h1>Inicio de Sesión</h1>
  <form method="POST" action="inicio.php">
    <label>Usuario:</label>
    <input type="text" name="usuario"><br>

    <label>Contraseña:</label>
    <input type="password" name="contraseña"><br>

    <label><input type="checkbox" name="recordar"> Recuerdame</label><br>

    <input type="submit" value="Ingresar">
  </form>
</body>
</html>