<?php
$pg = "inicio";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>inicio</title>
</head>

<body id="inicio">
    <!--HEADER-->
    <?php
    include_once('header.php'); ?>

    <!--COMIENZO-->
    <main class="container">
        <div class="row justify-content-center">

            <!--Imagen-->
            <div class="col-3 text-center  pt-4 pb-3">
                <div class="">
                    <img src="images/cohete.svg" alt="" class="img-fluid cohete">
                </div>
            </div>
        </div>
        <!--Botones-->
        <div class="row  justify-content-center">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center  mb-1">
                <!--Bienvenid@-->
                <div>
                    <p class="p-1 py-2 bienvenido">Bienvenid@ a mi sitio web.</p>
                </div>
            </div>
            <!--Conoce mis Proyectos-->
            <div class="col-12 text-center">
                <a href="proyectos.php" class="btn px-3 py-2 rounded-pill">Conoce mis proyectos.</a>
            </div>
        </div>

    </main>

    <!--FOOTER-->
    <?php
    include_once('footer.php'); ?>

    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>