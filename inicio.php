<?php
session_start();
if (isset($_POST["cerrar"])) {
    session_unset();

    if (isset($_COOKIE["usuario"])) {
        setcookie("usuario", "", time() - 120);
    }

    header("Location: login.php");
    exit;
}
$usuario_valido = "Daniela";
$contraseña_valida = "12345";

if (isset($_POST["usuario"]) && isset($_POST["contraseña"])) {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $recordar = isset($_POST["recordar"]);

    if ($usuario === $usuario_valido && $contraseña === $contraseña_valida) {
        $_SESSION["usuario"] = $usuario;

        if ($recordar) {
            setcookie("usuario", $usuario, time() + 60);
        }
    } else {
        header("Location: error.php");
        exit;
    }
}

if (isset($_SESSION["usuario"])) {
    $usuario = $_SESSION["usuario"];
} elseif (isset($_COOKIE["usuario"])) {
    $_SESSION["usuario"] = $_COOKIE["usuario"];
    $usuario = $_COOKIE["usuario"];
} else {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Pantalla Inicio</title>
</head>
<body>
  <h1>Bienvenido, <?php echo $usuario ?>!</h1>
  <form method="POST" action="inicio.php">
    <input type="submit" name="cerrar" value="Cerrar sesión">
  </form>
</body>
</html>

