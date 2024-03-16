<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/3e4f0e2f3f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Papeles de familia</title>
</head>

<body>

    <a class="ir-arriba" javascript:void(0) title="Volver arriba">
        <span class="fa-stack">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
        </span>
    </a>

    <nav class="navbar fixed-top navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">
                <img src="./assets/Logo.png" alt="Bootstrap" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nuestro acervo
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Presentación</a></li>
                            <li><a class="dropdown-item" href="#">El acervo Papeles de familia</a></li>

                            <li><a class="dropdown-item" href="#">Concurso 1992</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Multimedia</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Articulos y enlaces</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Publicaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./dona_historia.php">Dona historia</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <div class="Page">
        <iframe class="Maps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7531.638976083792!2d-99.16471332447293!3d19.29021462303681!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce00f592c6da09%3A0x356a36cb2b6d80ed!2sIgnacio%20Allende%2072%2C%20Tlalpan%20Centro%20I%2C%20Tlalpan%2C%2014000%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX%2C%20M%C3%A9xico!5e0!3m2!1ses!2sus!4v1710563235183!5m2!1ses!2sus" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="Contact container d-flex mt-5">
            <div>
                <p>Si quieres comunicarte con nosotros para donar tus papeles familiares al acervo, por favor escríbenos un mensaje a nuestro correo electrónico.</p>
                <div class="mb-5">
                    <h5><b><i class="fa fa-home me-2"></i>Nuestra dirección:</b></h5>
                    <p>
                        DIRECCIÓN DE ESTUDIOS HISTÓRICOS. INAH <br>
                        Allende Núm. 172, Esq. Juárez, Tlalpan Centro <br>
                        CP. 14000, México D.F.</p>
                </div>
                <div class="mb-5">
                    <h5><b><i class="fa fa-envelope me-2"></i>Correo electrónico:</b></h5>
                    <p>contacto@papelesdefamilia.mx</p>
                </div>
                <div class="mb-5">
                    <h5><b><i class="fa fa-phone me-2"></i>Teléfonos:</b></h5>
                    <p>
                        Teléfono 1: 55 7090 4808 <br>
                        Teléfono 2: 55 7090 0890 Extensiones: 411025 // 411029</p>
                </div>
            </div>
            <div class="Form_Contact p-5 rounded">
                <h3>¿Quieres contactarnos?</h3>
                <p>Tu dirección de correo electrónico no será compartida. Llena los espacios requeridos *</p>
                <div class="mb-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tu nombre">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Tu correo">
                </div>
                <div class="mb-3">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea>
                </div>

                <div class="mb-3">

                    <button type="submit" class="btn btn-light mb-3">Mandar mensaje</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <section class="text-center mb-3 d-flex justify-content-center gap-3">
            <img src="./assets/Logos/INAH.svg" alt="Descripción del SVG" width="100">
            <img src="./assets/Logos/Logi.svg" alt="Descripción del SVG" width="100">
        </section>
        <div>
            <p class="mb-0"><small>© Acervo Papeles de Familia 2024.</small></p>
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            irArriba();
        }); //Hacia arriba

        function irArriba() {
            $('.ir-arriba').click(function() {
                $('body,html').animate({
                    scrollTop: '0px'
                }, 200);
            });
            $(window).scroll(function() {
                if ($(this).scrollTop() > 0) {
                    $('.ir-arriba').slideDown(600);
                } else {
                    $('.ir-arriba').slideUp(600);
                }
            });
            $('.ir-abajo').click(function() {
                $('body,html').animate({
                    scrollTop: '1000px'
                }, 1000);
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>