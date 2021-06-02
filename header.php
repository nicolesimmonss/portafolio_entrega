<?php /*echo ($pg);
if ($pg == "inicio") {
    echo ('hola');
} */ ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>

<body>

    <!--HEADER-->
    <header>
        <!--Barra de Navegación-->
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">

                        <!--Inicio-->
                        <li class="nav-item">
                            <a class="nav-link px-4  py-1 <?php
                                                            if ($pg == "inicio") {
                                                                echo ('active');
                                                            } ?>  " href="index.php">Inicio</a>
                        </li>
                        <!--Sobre Mi-->
                        <li class="nav-item">
                            <a class="nav-link px-4  py-1 <?php
                                                            if ($pg == "sobremi") {
                                                                echo ('active');
                                                            } ?> " href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <!--Proyectos-->
                        <li class="nav-item">
                            <a class="nav-link  px-4  py-1 <?php
                                                            if ($pg == "proyectos") {
                                                                echo ('active');
                                                            } ?> " href="proyectos.php">Proyectos</a>
                        </li>
                        <!--Contacto-->
                        <li class="nav-item">
                            <a class="nav-link  px-4 py-1 <?php
                                                            if ($pg == "contacto") {
                                                                echo ('active');
                                                            } ?> " href="contacto.php">Contacto</a>
                        </li>
                    </ul>

                    <!--Descargar CV-->
                    <div class="d-inline">
                        <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

</body>

</html>