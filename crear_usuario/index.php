<?php
session_start();
include("../funciones.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR USUARIO</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="../material/Icono.ico" type="image/x-icon">
    <style>
        body {
            background: linear-gradient(45deg, #141e30, #243b55);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff;
        }

        .register-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            animation: fadeIn 1.5s ease-in-out;
        }

        .register-container h1 {
            font-family: 'Poppins', sans-serif;
            color: #ff4081;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2.5rem;
            text-transform: uppercase;
        }

        .register-container form {
            display: flex;
            flex-direction: column;
        }

        .register-container label {
            color: #fff;
            font-family: 'Roboto', sans-serif;
            margin-bottom: 5px;
        }

        .register-container input[type="text"],
        .register-container input[type="password"] {
            padding: 10px;
            border-radius: 10px;
            border: none;
            margin-bottom: 15px;
            font-family: 'Roboto', sans-serif;
        }

        .register-container input[type="submit"] {
            padding: 10px;
            border-radius: 10px;
            border: none;
            background: #00e5f5;
            color: #fff;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        .register-container input[type="submit"]:hover {
            background: #00e5f5;
        }

        .register-container a {
            color:#00e5f5;
            text-align: center;
            text-decoration: none;
            font-family: 'Roboto', sans-serif;
            margin-top: 10px;
            transition: color 0.3s ease-in-out;
        }

        .register-container a:hover {
            color: #00e5f5;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="register-container">
        <h1>Crea un Nuevo PEPSIMAN</h1>
        <form method="post">
            <label for="nombre">Nombre real:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Escriba su primer nombre" required autofocus>
            
            <label for="usuario">Nombre de usuario (sin espacios):</label>
            <input type="text" id="usuario" name="usuario" placeholder="Escriba su nombre de usuario" required>
            
            <label for="contra">Contraseña:</label>
            <input type="password" id="contra" name="contra" placeholder="Escriba su contraseña" required>
            
            <label for="contra2">Reescribir contraseña:</label>
            <input type="password" id="contra2" name="contra2" placeholder="Escriba su contraseña de nuevo" required>

            <?php include("nuevo.php"); ?>

            <input type="submit" value="Registrar usuario nuevo" name="btn">
        </form>
        <a href="../index.php">Iniciar sesión</a>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
