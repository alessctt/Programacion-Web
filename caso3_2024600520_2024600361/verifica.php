<?php
session_start();
include "auxmysql.php";

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$query = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'";

$datos = seleccionar(["localhost", "root", "030605", "progw"], $query);

if (count($datos) == 1) {
    $_SESSION['usuario'] = $usuario;
    header("Location: principal.php");
} else {
    echo "Usuario o contraseña incorrectos";
}
?>