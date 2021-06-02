<?php
$pg = "sobremi";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mi</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi">
    <!--HEADER-->
    <?php
    include_once('header.php'); ?>

    <!--COMIENZO-->
    <main>
        <section class="container pt-4 px-5 mx-auto">
            <div class="row  align-content-center">
                <div class="col-12 col-md-5 pt-4">
                    <h1 class="pb-4">Sobre mí </h1>
                    <p class="pb-5">Apasionada por la tecnología y gestión de proyectos. Soy estudiante de cursos de
                        programación Full Stack y de Base de datos.</p>
                    <a href="contacto.php" class="btn btn-rojo mb-4">Enviar mensaje</a>


                </div>
                <div class="col-12 col-md-7 text-center pt-4 ">
                    <img src="images/y.jpg" alt="" class="img-fluid img-circle  ">
                </div>
            </div>

        </section>

        <!--STACK TECNOLÓGICO-->
        <section class=" bg-red">
            <div class="container ">
                <!--PRIMER ROW-->
                <div class="row h-100">
                    <!--titulo-->
                    <h2 class="py-5 text-white h2-small">Stack tecnológico</h2>

                    <!--Javascript-->
                    <div class="col-6 col-md-4 col-lg-2 text-center py-2">
                        <div class="px-4 py-5 card card-h mx-0">
                            <h3 class="componente">Javascript</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/componentes/javascript.jpeg">
                        </div>
                    </div>
                    <!--PHP-->
                    <div class="col-6 col-md-4 col-lg-2 text-center py-2">
                        <div class="px-4 py-5 card card-h mx-0">
                            <h3 class="componente">PHP</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/componentes/php.jpg">
                        </div>
                    </div>
                    <!--Html-->
                    <div class="col-6 col-md-4 col-lg-2 text-center py-2">
                        <div class="px-4 py-5 card card-h mx-0">
                            <h3 class="componente">HTML 5</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/componentes/html.png">
                        </div>
                    </div>
                    <!--React Js-->
                    <div class="col-6 col-md-4 col-lg-2 text-center py-2">
                        <div class="px-4 py-5 card card-h mx-0">
                            <h3 class="componente">React js</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/componentes/react.png">
                        </div>
                    </div>
                    <!--jQuery-->
                    <div class="col-6 col-md-4 col-lg-2 text-center py-2">
                        <div class="px-4 py-5 card card-h mx-0">
                            <h3 class="componente">jQuery</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/componentes/jquery.jpg">
                        </div>
                    </div>
                    <!--Bootstrap-->
                    <div class="col-6 col-md-4 col-lg-2 text-center py-2">
                        <div class="px-4 py-5 card card-h mx-0">
                            <h3 class="componente">Bootstrap</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/componentes/Bootstrap_logo.svg.png">
                        </div>
                    </div>
                </div>
                <!--SEGUNDA ROW-->
                <div class="row py-3 pb-5 h-100 ">
                    <!--Laravel-->
                    <div class="col-6 col-md-4 col-lg-2 text-center py-2">
                        <div class="px-4 py-5 card card-h mx-0">
                            <h3 class="componente">Laravel</h3>
                            <img class="img-fluid d-block mx-auto" width="90" src="images/componentes/laravel.png">
                        </div>
                    </div>
                    <!--MySQL-->
                    <div class="col-6 col-md-4 col-lg-2 text-center py-2">
                        <div class="px-4 py-5 card mx-0">
                            <h3 class="componente">MySQL</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/componentes/mysql.png">
                        </div>
                    </div>
                    <!--CSS-->
                    <div class="col-6 col-md-4 col-lg-2 text-center py-2">
                        <div class="px-4 py-5 card card-h mx-0">
                            <h3 class="componente">CSS</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/componentes/css.png">
                        </div>
                    </div>
                    <!--Git-->
                    <div class="col-6 col-md-4 col-lg-2 text-center py-2">
                        <div class="px-4 py-5 card card-h mx-0">
                            <h3 class="componente">Git</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/componentes/git.png">
                        </div>
                    </div>
                    <!--Apache-->
                    <div class="col-6 col-md-4 col-lg-2 text-center py-2">
                        <div class="px-4 py-5 card card-h mx-0">
                            <h3 class="componente">Apache</h3>
                            <img class="img-fluid d-block mx-auto" width="120" src="images/componentes/apache.png">
                        </div>
                    </div>
                    <!--Mercado Pago-->
                    <div class="col-6 col-md-4 col-lg-2 text-center py-2">
                        <div class="px-4 py-5 card card-h mx-0">
                            <h3 class="componente">Mercado pago</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/componentes/mercadopago.jpg">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--EXPERIENCIA LABORAL-->
        <div class="container p-3 pb-5" id="experiencia">
            <!--Titulo y valija-->
            <div class="d-flex py-3 pt-5 align-items-baseline text-violet">
                <i class="fas biger fa-suitcase px-2"></i>
                <h2 class="h2-small">Experiencia Laboral</h2>
            </div>
            <!--PRIMERA ROW-->
            <div class="row shadow">
                <!--Vendedora-->
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 d-md-block d-none justify-content-center align-items-center d-flex ">
                            <img src="images/cursos/green.png" alt="" class="img-fluid p-4 small laboral">
                        </div>
                        <div class="col-md-10 col-12 p-3 px-4">
                            <h3>Vendedora</h3>
                            <h4 class="text-violet">Green Consulting</h4>
                            <h5>2018 - 2019</h5>
                            <p>Posición de venta y gestión telefónica de productos de salud.</p>
                        </div>
                    </div>
                </div>
                <!--Desarrolladora Web-->
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 d-md-block d-none justify-content-center align-items-center d-flex ">
                            <img src="images/cursos/m.png" alt="" class="img-fluid p-4 small laboral">
                        </div>
                        <div class="col-md-10 col-12 p-3 px-4">
                            <h3>Desarrollador Web</h3>
                            <h4 class="text-violet">Digital Mirror</h4>
                            <h5>2021 - actualmente</h5>
                            <p>Desarrolladora de componentes y paginas webs, dentro de el area de marketing de la
                                empresa.</p>
                        </div>
                    </div>
                </div>
                <!--Donde me gustaria-->
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2  d-md-block d-none justify-content-center align-items-center d-flex ">
                            <img src="images/cursos/marketing.png" alt="" class="img-fluid p-4 small laboral">
                        </div>
                        <div class="col-md-10 col-12 p-3 px-4">
                            <h3>Donde me gustaria</h3>
                            <h4 class="text-violet">A Futuro</h4>
                            <h5>2020</h5>
                            <p>A partir de acá son areas donde me gustaria trabajar, ya que solo tuve las dos experiencias previamente mencionadas en el mundo laboral.</p>
                        </div>
                    </div>
                </div>
                <!--Marketing-->
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2  d-md-block d-none justify-content-center align-items-center d-flex ">
                            <img src="images/cursos/mm.png" alt="" class="img-fluid p-4 small laboral">
                        </div>
                        <div class="col-md-10 col-12 p-3 px-4">
                            <h3>Marketing</h3>
                            <h4 class="text-violet">Internaciónal</h4>
                            <h5>2022</h5>
                            <p>Me gustaria enfocarme en las campañas de marketing de alguna empresa de buen calibre.</p>
                        </div>
                    </div>
                </div>
                <!--Desarolladora Web  -->
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2  d-md-block d-none  justify-content-center align-items-center d-flex ">
                            <img src="images/cursos/social-media-marketing.png.crdownload" alt="" class="img-fluid p-4 small laboral">
                        </div>
                        <div class="col-md-10 col-12 p-3 px-4">
                            <h3>Desarolladora Web </h3>
                            <h4 class="text-violet">Brasil</h4>
                            <h5>2022</h5>
                            <p>Me gustaria expandir mis conocimientos de programación para que en un futuro cercano pueda estar trabajando de lo que me gusta remotamente.</p>
                        </div>
                    </div>
                </div>
                <!--Desarolladora FullStack  -->
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2  d-md-block d-none justify-content-center align-items-center d-flex p-4 ">
                            <img src="images/cursos/marketing2.png" alt="" class="img-fluid p-5 small laboral">
                        </div>
                        <div class="col-md-10 col-12 p-3 px-4">
                            <h3>Desarolladora FullStack </h3>
                            <h4 class="text-violet">Milan</h4>
                            <h5>2023</h5>
                            <p>Como previamente mencione me gustaria poder ampliar mis conocimentos y a lo largo volverme una desarrolladora full stack.</p>
                        </div>
                    </div>
                </div>
                <!--Directora de Desarrollo-->
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 d-md-block d-none justify-content-center align-items-center d-flex  ">
                            <img src="images/cursos/mmm.png" alt="" class="img-fluid p-4 small laboral">
                        </div>
                        <div class="col-md-10 col-12 p-3 px-4">
                            <h3>Directora de Desarrollo</h3>
                            <h4 class="text-violet">Europa</h4>
                            <h5>2025
                            </h5>
                            <p>Volverme directora de la parte de desarrolo en alguna empresa Europea. Suena tal vez como mucho si, pero bueno uno tiene que soñar alto.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- FORMACIÓN ACÁDÁMICA-->
        <!--Les deje el color por que siento que queda mas lindo con color -->
        <div class="container" id="formacion">
            <!--Titulo e icono-->
            <div class="d-flex py-3 pt-5 align-items-baseline text-red">

                <i class="fas biger  fa-graduation-cap px-2"></i>
                <h2 class="h2-small">Formación acádémica</h2>
            </div>
            <div class="row h-100 shadow">
                <!--Colegio-->
                <div class="col-md-2 d-none d-md-block p-4">
                    <img src="images/cursos/sworn.png" alt="" class="img-fluid ">
                </div>
                <div class="col-12 col-md-4 p-3">
                    <h3>Estudio Secundario</h3>
                    <h4 class="text-red">Sworn Junior College</h4>
                    <h5>2007 – 2018</h5>
                    <p>http://www.sworn.esc.edu.ar </p>
                </div>
                <!--Facu-->
                <div class="col-md-2 d-none d-md-block p-4">
                    <img src="images/cursos/davinci.png" alt="" class="img-fluid ">
                </div>
                <div class="col-12 col-md-4 p-3">
                    <h3>Estudios Terciarios</h3>
                    <h4 class="text-red">Da Vinci</h4>
                    <h5>2019- actualidad</h5>
                    <p>https://davinci.edu.ar/ </p>
                </div>
                <!--Idiomas-->
                <div class="col-md-2 d-none d-md-block p-4">
                    <img src="images/cursos/logoCCBA(1).png" alt="" class="img-fluid ">
                </div>
                <div class="col-12 col-md-4 p-3">
                    <h3>Estudios lingüísticos</h3>
                    <h4 class="text-red">Centro Cultural Brasilero</h4>
                    <h5>2019-2020</h5>
                    <p>https://ccbabrasil.org/ </p>
                </div>


            </div>
        </div>


        <!--CURSOS DE DESARROLLO PROFESIONAL-->
        <!--Les deje el color por que siento que queda mas lindo con color -->
        <div class="container py-5" id="cursos">
            <!--Titulo e icono -->
            <div class="d-flex py-3 pt-5 align-items-baseline text-red">

                <i class="fas biger  fa-graduation-cap px-2"></i>
                <h2 class="h2-small">Cursos de desarrollo profesional</h2>
            </div>
            <div class="row h-100 shadow ">
                <!--1-->
                <!--Curso de Photoshop-->
                <div class="col-md-1 d-none d-md-block p-2">
                    <img src="images/cursos/1200px-Adobe_Photoshop_CC_icon.svg.png" alt="duolingo logo" class="img-fluid p-3 ">
                </div>
                <div class="col-md-5 p-3">
                    <h3>Curso de Photoshop</h3>
                    <h4 class="text-red">DaVinci</h4>
                    <h5>Expedición: 2019</h5>
                </div>

                <!--2-->
                <!--Curso Bootstrap -->
                <div class="col-md-1 d-none d-md-block p-2">
                    <img src="images/componentes/Bootstrap_logo.svg.png" alt="" class="img-fluid p-3 pt-4">
                </div>
                <div class="col-md-5 p-3">
                    <h3>Curso de Bootstrap</h3>
                    <h4 class="text-red">Bluueweb</h4>
                    <h5>Expedición: 2021</h5>
                </div>

                <!--3-->
                <!--Curso de Illustrator-->
                <div class="col-md-1 d-none d-md-block p-2">
                    <img src="images/cursos/Adobe_Illustrator_CC_icon.svg.png" alt="duolingo logo" class="img-fluid p-3">
                </div>
                <div class="col-md-5 p-3">
                    <h3>Curso de Illustrator</h3>
                    <h4 class="text-red"> DaVinci</h4>
                    <h5>Expedición: 2019</h5>
                </div>


                <!--4-->
                <!--Curso de PHP-->
                <div class="col-md-1 d-none d-md-block p-2">
                    <img src="images/cursos/php.png" alt="Centro Cultural Brasilero" class="img-fluid p-2 pt-4">
                </div>
                <div class="col-md-5 p-3">
                    <h3>Curso de PHP</h3>
                    <h4 class="text-red"> Tutoriales a tu Alcance</h4>
                    <h5>Expedición: 2021</h5>
                </div>

                <!--5-->
                <!--Curso de Cinema-->
                <div class="col-md-1 d-none d-md-block p-2">
                    <img src="images/cursos/Cinema-4D-Logo.png" alt="duolingo logo" class="img-fluid pt-3">
                </div>
                <div class="col-md-5 p-3">
                    <h3>Curso de Cinema 4d</h3>
                    <h4 class="text-red">Freepick Company</h4>
                    <h5>Expedición: 2020</h5>
                </div>


                <!--6-->
                <!--Curso de Frances-->
                <div class="col-md-1 d-none d-md-block p-2">
                    <img src="images/cursos/logo-with-duo.png" alt="duolingo logo" class="img-fluid">
                </div>
                <div class="col-md-5 p-3">
                    <h3>Curso de Frances</h3>
                    <h4 class="text-red">Duolingo</h4>
                    <h5>Expedición: en proceso</h5>
                </div>


            </div>
        </div>
        <!--HOBBIES E IDIOMAS-->
        <div class="bg-grey ">
            <div class="container p-lg-4 p-1 mx-auto pb-5">
                <div class="row justify-content-center   ">
                    <!--IDIOMAS-->
                    <div class="col-md-6 col-12 p-3 px-4">
                        <div class=" border mb-3 redondeo bg-white shadow " style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-5 text-center redondeo bg-violet justify-content-center d-flex ">
                                    <i class="fas fa-comment-alt align-middle text-white display-1 align-self-center  "></i>
                                </div>
                                <div class="col-7 p-5  ">
                                    <div class="">
                                        <h5 class="">Idiomas</h5>
                                        <p class="">Español-nativo</p>
                                        <p class="">Ingles-fluido</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--HOBBIES-->
                    <div class="col-md-6 col-12 p-3 px-4 ">
                        <div class=" border mb-3 redondeo bg-white shadow " style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-5 text-center redondeo bg-violet justify-content-center d-flex ">
                                    <i class="fas fa-star align-middle text-white display-1 align-self-center  "></i>
                                </div>
                                <div class="col-7 p-5  ">
                                    <div class="">
                                        <h5 class="">Hobbies</h5>
                                        <p class="">Teatro</p>
                                        <p class="">Futbol</p>


                                    </div>
                                </div>
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