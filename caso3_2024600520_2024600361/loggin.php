<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tienda</title>
    <style>
        body {
            background-color: lavenderblush;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: white;
            padding: 40px 30px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: purple;
            font-size: 35px;
            margin-bottom: 30px;
        }

        form {
            text-align: center;
        }

        label {
            font-size: 15px;
            display: block;
            margin-top: 15px;
            text-align: left;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
           
            font-size: 14px;
        }

        input[type="submit"] {
            margin-top: 25px;
            width: 100%;
            padding: 12px;
            background-color: MediumOrchid;
            color: white;
            font-size: 16px;
            
        }

        input[type="submit"]:hover {
            background-color: purple;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Acceso al sistema</h2>
        <form method="POST" action="verifica.php">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario">

            <label for="contraseña">Contraseña</label>
            <input type="password" name="contraseña" id="contraseña">

            <input type="submit" value="Ingresar">
        </form>
    </div>
</body>
</html>