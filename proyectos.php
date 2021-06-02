<?php
$pg = "proyectos";
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
    <title>Proyectos</title>
</head>

<body id="proyectos">
    <!--HEADER-->
    <?php
    include_once('header.php'); ?>
    <!--COMIENZO-->
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <!--Titulo-->
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class=" col-sm-6 col-12">
                <p>Los siguientes son algunos de los trabajos que he realizado</p>
            </div>
        </div>
        <!--No pongo los códigos fuentes por que son proyectos del trabajo -->
        <div class="row pb-5 h-100  justify-content-center">
            <!--LINKTREE-->
            <div class="col-lg-4 col-md-6 col-12 p-3  text-white ">
                <div class="rounded-3 bg-white border">
                    <!--Imagen-->
                    <div>
                        <img src="images/proyectos/linktree.png" alt="" class="img-fluid">
                    </div>
                    <!--Texto-->
                    <div class="max ">

                        <h2 class="py-3 pt-3 px-3 gradient">Linktree</h2>
                        <p class="px-3 py-3 text-secondary">Un link tree maquetado en Bootstrap para una franquicia que se especializa en la venta de aceite canábico.</p>
                    </div>
                    <!--Botones-->
                    <div class="d-flex justify-content-between py-5 px-3 ">
                        <!--Ver online-->
                        <div class="px-3">
                            <a href="#" class="btn px-3 btn-rojo rounded-pill">Ver online</a>
                        </div>
                        <!--Código Fuente-->
                        <div class="px-3">
                            <a href="#" class=" text-decoration-none ">Código fuente</a>
                        </div>
                    </div>

                </div>
            </div>
            <!--TARJETAS-->
            <div class="col-lg-4 col-md-6 col-12 p-3 text-white ">
                <div class="rounded-3 bg-white border">
                    <!--Imagen-->
                    <div>
                        <img src="images/proyectos/tarjetas.png" alt="" class="img-fluid">
                    </div>
                    <!--Texto-->
                    <div class="max ">
                        <h2 class="py-3 pt-3 px-3 gradient">Tarjetas</h2>
                        <p class="px-3 py-3 text-secondary">Un esquema de tarjetas maquetado en Bootstrap.

                        </p>
                    </div>
                    <!--Botones-->
                    <div class="d-flex justify-content-between py-5 px-3 ">
                        <!--Ver online-->
                        <div>
                            <a href="#" class="btn px-3 btn-rojo rounded-pill">Ver online</a>
                        </div>
                        <!--Código Fuente-->
                        <div>
                            <a href="#" class=" text-decoration-none ">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--TARJETAS-->
            <div class="col-lg-4 col-md-6 col-12 p-3 text-white ">
                <div class="rounded-3 bg-white border">
                    <!--Imagen-->
                    <div>
                        <img src="images/proyectos/sitio.jpeg" alt="" class="img-fluid">
                    </div>
                    <!--Texto-->
                    <div class="max ">
                        <h2 class="py-3 pt-3 px-3 gradient">Sitio Web</h2>
                        <p class="px-3 py-3 text-secondary">Sitio web maquetado en Bootstrap y utilizando php para hacer un formulario funcional.</p>
                    </div>
                    <!--Botones-->
                    <div class="d-flex justify-content-between py-5 px-3 ">
                        <!--Ver online-->
                        <div>
                            <a href="#" class="btn px-3 btn-rojo rounded-pill">Ver online</a>
                        </div>
                        <!--Código Fuente-->
                        <div>
                            <a href="#" class=" text-decoration-none ">Código fuente</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </main>
    <!--FOOTER-->
    <?php
    include_once('footer.php'); ?>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>