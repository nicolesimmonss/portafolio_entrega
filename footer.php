<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
</head>

<body>


    <!--Footer-->
    <footer class="container">
        <div class="row mt-5 pb-2 <?php
                                    if ($pg == "proyectos" || $pg == "sobremi") {
                                        echo ('text-red  footer-red ');
                                    } ?>">
            <div class="col-12 col-sm-3 text-center text-sm-start ">
                <!--Ghithub-->
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github <?php
                                                                                                    if ($pg == "proyectos" || $pg == "sobremi") {
                                                                                                        echo ('icons-red ');
                                                                                                    } ?>"></i></a>
                <!--Linkedin-->
                <a href="https://www.linkedin.com/no-tengo-linkedin/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in   <?php
                                                                                                                                        if ($pg == "proyectos" || $pg == "sobremi") {
                                                                                                                                            echo ('linkedin-red ');
                                                                                                                                        } ?>"></i></a>
            </div>
            <!--Sponsor-->
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0 ">
                Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <!--Mail-->
            <div class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0">
                <a href="mailto:nicolesimmons501@gmail.com">nicolesimmons501@gmail.com</a>
            </div>
        </div>
    </footer>
    <!--Whatsap-->
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=1551102298" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
</body>

</html>