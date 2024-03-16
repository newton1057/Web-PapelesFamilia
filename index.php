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
                        <a class="nav-link" href="./contacto.php">Contacto</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <div class="Page">



        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">

                    <img src="./assets/Carousel/img1.jpg" class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 class="font-secundary">Acervo Papeles de Familia</h1>
                            <p>Acércate y descubre la historia de nuestro México a través de quienes la vivieron. </p>
                            <p><a class="btn btn-light" href="../Portafolios/Album_Zoologico_Chapultepec.html">Saber más</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="./assets/Carousel/img2.png" class="d-block w-100" alt="...">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="font-secundary">Visita nuestro catálogo y descarga los archivos que prefieras</h1>
                            <p></p>
                            <p><a class="btn btn-light" href="#">Leer más</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/Carousel/img3.jpg" class="d-block w-100" alt="...">

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1 class="font-secundary">Dona historia</h1>
                            <p>¿No sabes qué hacer con las cartas, biografías, diarios, fotografías, recuerdos de tus seres queridos? ¡acércate a nosotros!</p>
                            <p><a class="btn btn-light" href="../Portafolios/Album_Retratos.html">Visualiza aqui</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/Carousel/img4.jpg" class="d-block w-100" alt="...">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 class="font-secundary">Todos somos parte de la historia </h1>
                            <p>Y cada historia es importante.</p>
                            <p><a class="btn btn-light" href="../Portafolios/Album_Puerto_Morelos.html">Saber más</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm text-center">
                    <p>"Hay que recuperar, mantener y transmitir la memoria histórica, porque se empieza por el olvido y se
                        termina en la indiferencia."</p>

                    <h5 class="font-secundary">José Saramago</h5>
                    <span><small>Escritor</small></span>
                </div>
                <div class="col-sm text-center">
                    <p>"Somos todos los trozos de lo que recordamos. Tenemos en nuestro interior las esperanzas y los
                        temores
                        de aquellos que nos aman. Mientras haya amor y memoria, no existe la auténtica pérdida"</p>

                    <h5 class="font-secundary">Cassandra Clare</h5>
                    <span><small>Escritora</small></span>
                </div>
                <div class="col-sm text-center">
                    <p>"Somos nuestra memoria, somos ese quimérico museo de formas inconstantes, ese montón de espejos
                        rotos"</p>

                    <h5 class="font-secundary">Jorge Luis Borges</h5>
                    <span><small>Escritor</small></span>
                </div>

            </div>
        </div>

        <div class="w-100 d-flex justify-content-center">
            <div class="container m-5 container-info">
                <div class="row row-info">
                    <div class="index_card col-sm text-center rounded">
                        <img src="./assets/Icons/book.svg" width="50">
                        <h3>Artículos acádemicos</h3>
                        <p>
                            <small>Consulta una compilación que hemos creado sobre los artículos y ponencias que en
                                colaboración con otras universidades, historiadores, etnohistoriadores y antropólogos del
                                INAH, CIESAS, giran en torno a la temática de los archivos familiares.
                            </small>
                        </p>
                    </div>
                    <div class="index_card col-sm text-center rounded">
                        <img src="./assets/Logos/VocesFamilia.png" alt="">
                    </div>
                    <div class="index_card col-sm text-center rounded">
                        <img src="./assets/Icons/eye.svg" width="50">
                        <h3>¿Qué son los archivos familiares?</h3>
                        <p>
                            <small>Los archivos familiares son una fuente de información valiosa para la historia de
                                México. Conoce de la voz de expertos porqué razón es importante conservar y donar los
                                archivos familiares.
                                Descubre una nueva visión de la historia desde las familias.
                            </small>
                        </p>
                    </div>
                </div>
                <div class="row row-info">
                    <div class="index_card col-sm text-center rounded">
                        <iframe src="https://www.youtube.com/embed/Yk_7uXfAXLY?si=YlNbobjSHgUGsffn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="index_card col-sm text-center rounded">
                        <img src="./assets/Icons/link.svg" width="50">
                        <h3>Enlaces relacionados</h3>
                        <p>
                            <small>
                                Una lista de sitios en todo el mundo, que hablan acerca de las memorias familiares.
                            </small>
                        </p>
                    </div>

                    <div class="index_card col-sm text-center rounded">
                        <iframe src="https://www.youtube.com/embed/f4gCYnx2WGs?si=wsa5ovEMPV8Q79GW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
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