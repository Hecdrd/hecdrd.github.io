<?php
session_start();
include("../funciones.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINCIPAL</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="../material/Logo.png" type="image/x-icon">
    <style>
        /* Estilos generales */
        body {
            background: #000; /* Fondo negro */
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            padding-top: 70px;
        }

        a, a:hover {
            text-decoration: none;
            color: inherit;
        }

        /* Estilos de la cabecera */
        .navbar {
            background-color: #3498db; /* Fondo azul */
            border-bottom: 5px solid #2980b9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand img {
            width: 80px;
            transition: transform 0.5s;
        }

        .navbar-brand img:hover {
            transform: scale(1.1);
        }

        .navbar-toggler {
            border-color: #fff;
        }

        .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath stroke="rgba(255,255,255,0.5)" stroke-width="2" linecap="round" linejoin="round" d="M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
        }

        /* Botones estilo cartoon */
        .nav-link, .dropdown-item {
            font-size: 1.5rem; /* Tamaño grande */
            font-weight: bold;
            color: #fff !important;
            background: #2980b9; /* Fondo azul */
            border-radius: 15px;
            padding: 12px 20px;
            margin: 8px;
            transition: background 0.3s, transform 0.3s;
        }

        .nav-link:hover, .dropdown-item:hover {
            background: #3498db;
            transform: translateY(-2px);
        }

        /* Contenedor principal */
        .container {
            max-width: 1100px;
            background: #111;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.1);
        }

        .btn-primary {
            background-color: #2980b9;
            border-color: #2980b9;
            transition: background 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #3498db;
            border-color: #3498db;
        }

        /* Tabla de inventario */
        .table {
            margin-top: 30px;
            border-radius: 10px;
            overflow: hidden;
            background: #3498db;
            color: #fff;
        }

        .table th, .table td {
            padding: 15px;
            border-bottom: 2px solid #2980b9;
        }

        .table thead {
            background: #2980b9;
        }

        .table tbody {
            background: #222;
            color: #fff;
        }

        .table th {
            text-align: center;
            font-size: 1.2rem;
        }

        .table td {
            text-align: center;
        }

        /* Footer */
        #footer {
            background: #2980b9;
            padding: 20px 0;
            color: #fff;
            text-align: center;
            margin-top: 50px;
        }

        #footer a {
            color: #fff;
        }

        #footer a:hover {
            color: #3498db;
        }

        /* Animaciones */
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

    </style>
</head>

<body>
    <a name="inicio"></a>
    <!--Header-->
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../principal/home.php"><img src="../material/Logo.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menú
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../principal/home.php">Productos</a></li>
                                <li><a class="dropdown-item" href="../nuevo/index.php">Nuevo</a></li>
                                <li><a class="dropdown-item" href="../eliminar/index.php">Eliminar</a></li>
                                <li><a class="dropdown-item" href="../surtido/index.php">Entrada</a></li>
                                <li><a class="dropdown-item" href="../venta/index.php">Ventas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../index.php">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--Fin Header-->

    <!--Contenido-->
    <div id="contenido" class="fade-in">
        <div class="container mt-5">
            <div class="row text-center">
                <h1 class="py-3">Eliminar un Producto</h1>
                <div class="col-12 col-md-4 px-4 p-md-4">
                    <p class="justificar">En esta parte puedes eliminar un producto que añadiste por error o por alguna otra razón.</p>
                    
                    <?php
                        $showTable = isset($_GET['show']) && $_GET['show'] == 'true';
                    ?>

                    <a href="?show=<?= $showTable ? 'false' : 'true' ?>" class="btn btn-primary mb-4">
                        <?= $showTable ? 'Ocultar Inventario' : 'Mostrar Inventario' ?>
                    </a>
                    
                    <?php if ($showTable): ?>
                    <table class="table table-striped-columns">
                        <thead>
                            <tr>
                                <th colspan="2">Inventario</th>
                            </tr>
                            <tr>
                                <th>Nombre</th>
                                <th>Precio Unitario</th>
                                <th>Vendidos</th>
                                <th>En Bodega</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include("bodega3.php"); ?>
                        </tbody>
                    </table>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-md-8 px-4 pb-2 p-md-4">
                    <form method="post" class="custom-form">
                        <div class="mb-3">
                            <label for="ecodigo" class="form-label collapsible-label">Escriba el código que desea eliminar:</label>
                            <input type="text" class="form-control collapsible-input" id="ecodigo" placeholder="Ej. A01" name="ecodigo" required autofocus>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary form-control mt-3" value="Eliminar" name="eliminar1">
                        </div>
                    </form>
                    <form method="post">
                        <div class="mb-3">
                            <?php
                            include("eliminar1.php");
                            include("eliminar2.php");
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Fin Contenido-->

    <!--Footer-->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="#inicio"><img src="../material/Logo.png" alt="Logo"></a>
                </div>
            </div>
        </div>
    </div>
    <!--Fin Footer-->

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

