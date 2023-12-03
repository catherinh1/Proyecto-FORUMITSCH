<?php include("admi/conexion/conexion.php");?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>ForumITSCH</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/styleForum.css" rel="stylesheet">

    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-dark py-2 d-none d-md-flex">
            <div class="container">
                <div class="d-flex justify-content-between topbar">
                    <div class="top-info">
                        <small class="me-3 text-white-50"><a href="https://maps.app.goo.gl/VaM1MGWavUEc6n6o7"><i class="fas fa-map-marker-alt me-2 icons"></i></a>Av. Ing. Carlos Rojas Gutiérrez 2120 | Fraccionamiento Valle de la Herradura | Ciudad Hidalgo Michoacán</small>
                        <small class="me-3 text-white-50"><a href="#"><i class="fas fa-envelope me-2 icons"></i></a>contacto@tecnm.mx </small>
                    </div>
                    <div id="note" class="text d-none d-xl-flex"><small>Dudas : Al Jefe de Jefes("Iraic")</small></div>
                    <div class="top-link">
                        <a href="https://www.facebook.com/TecNM.Campus.Ciudad.Hidalgo?mibextid=ZbWKwL" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-primary"></i></a>
                        <a href="https://twitter.com/TecNM_cdhidalgo?ref_src=twsrc%5Etfw" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-twitter text-primary"></i></a>
                        <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-instagram text-primary"></i></a>
                        <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <div class="container-fluid navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a href="index.php" class="navbar-brand">
                        <h1 class="text-white fw-bold d-block"><img src ="img/Forum.png">Forum<span class="text">ITSCH</span> <img class="img" src="img/logo.png"></h1>
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav ms-auto mx-xl-auto p-0">
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shirink-0">
                        <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                            <a href="" class="position-relative animated tada infinite">
                                <i class="fa fa-phone-alt text-white fa-2x"></i>
                                <div class="position-absolute" style="top: -7px; left: 20px;">
                                    <span><i class="fa fa-comment-dots text"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column pe-4 border-end">
                            <span class="text-white-50">Tienes alguna pregunta?</span>
                            <span class="text">Tel: (786) 154-90-00</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-center ms-4 ">
                            <a href="#"><i class="bi bi-search text-white fa-2x"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

  
        <!-- Carousel Start -->
        <div class="container-fluid px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/tecn.jpg" class="img-fluid" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text h4 animated fadeInUp">Instituto Tecnológico Superior de Ciudad Hidalgo</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInRight">"Manteniéndote informado, un titular a la vez"</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Información para el éxito</p>                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/tec.jpg" class="img-fluid" alt="Second slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text h4 animated fadeInUp">Instituto Tecnológico Superior de Ciudad Hidalgo</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInLeft">"Noticias que marcan la diferencia"</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Información para el éxito</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                </button>
            </div>
        </div><hr>
        <!-- Carousel End -->

        <!-- Jala las noticias -->
        <?php 
            $result =select("noticias","*"); 
            ?>
            <?php foreach($result as $noticias) {?>
        <div class="container-fluid">
            <div class="container">
                <div class="text-center mx-auto wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                
                <h1 class="mb-1"><?php echo $noticias['categoria']; ?></h1>
                </div>
                <div class="center">
                    <h1 class="text-center" ><?php echo $noticias['titulo']; ?></h1>
                    <img class="card-img-top" src="img/<?php echo $noticias['imagen']; ?>"><br>
                <h3 class="text-center"><?php echo $noticias['descripcion']; ?></h3><hr>
            </div>
                <?php } ?>
                <!-- Termina de jalar las noticias -->

        <!-- Team Start -->
        <div class="container-fluid py-5 mb-5 team">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Ingenieros en Sistemas Computacionales</h5>
                    <h1>Profesores de la Academia Sistemas</h1>
                </div>
                <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="img/IMG-20231130-WA0009.jpg" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Ing. José Iraic Alcantar Alcantar</h4>
                                    <p class="m-0">Conocimientos y Habilidades:</p><br>
                                    <p class="m-0"><li>Desarrollo loT</li></p>
                                    <p class="m-0"><li>Web services</li></p>
                                    <p class="m-0"><li>Programación android</li></p>
                                    <p class="m-0"><li>Aplicaciones IA</li></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="img/esme.jpg" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">María Esmeralda Arreola Marín</h4>
                                    <p class="m-0">Conocimientos y Habilidades:</p><br>
                                    <p class="m-0"><li>Maestría en pedagogía </li></p>
                                    <p class="m-0"><li>Docencia</li></p>
                                    <p class="m-0"><li>Investigación</li></p>
                                    <p class="m-0"><li>Ing. de software</li></p>
                                    <p class="m-0"><li>Marketing Digital/li></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="img/IMG.JPG" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Ing. Mariela Chavez Marcial</h4>
                                    <p class="m-0">Conocimientos y Habilidades:</p><br>
                                    <p class="m-0"><li>Maestría en Gestión de Tecnologías de la información</li></p>
                                    <p class="m-0"><li>Conocimientos en Ingeniería de software</li></p>
                                    <p class="m-0"><li>Certificación en Gestión de proyectos</li></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="img/Madrigal.jpg" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Juan carlos Madrigal Peréz</h4>
                                    <p class="m-0">Conocimientos y Habilidades:</p><br>
                                    <p class="m-0"><li>Maestro en Dirección Estratégica en Ingeniería de Software</li></p>
                                    <p class="m-0"><li>Machine Learning/IA</li></p>
                                    <p class="m-0"><li>Docencia</li></p>
                                    <p class="m-0"><li>Dirección de Proyectos</li></p>
                                    <p class="m-0"><li>Desarrollo de Aplicaciones Móviles</li></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

       <!-- Footer Start -->
       <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
            <div class="container pt-5 pb-4">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <a href="index.html">
                            <h1 class="text-white fw-bold d-block">Forum<span class="text">Itsch</span> </h1>
                        </a>
                        <p class="mt-4 text-light">“Uno de los objetivos fundamentales del Instituto Tecnológico es formar jóvenes que sean capaces de resolver problemas técnicos y humanos basados en la filosofía del ser, saber y hacer”.</p>
                        <div class="d-flex hightech-link">
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-twitter text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="#" class="h3 text">Administradores</a>
                        <div class="mt-4 d-flex flex-column help-link">
                            <a href="Cuenta.html" class="mb-2 text-white"><i class="fas fa-angle-right text me-2"></i>Cuenta</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="#" class="h3 text">Contacto</a>
                        <div class="text-white mt-4 d-flex flex-column contact-link">
                            <a href="#" class="pb-3 text-light border-bottom border-linea"><i class="fas fa-map-marker-alt text me-2"></i> Av. Ing. Carlos Rojas Gutiérrez 2120 | Fraccionamiento Valle de la Herradura | Ciudad Hidalgo Michoacán</a>
                            <a href="#" class="py-3 text-light border-bottom border-linea"><i class="fas fa-phone-alt text me-2"></i> (786) 154-90-00</a>
                            <a href="#" class="py-3 text-light border-bottom border-linea"><i class="fas fa-envelope text me-2"></i> contacto@tecnm.mx</a>
                        </div>
                    </div>
                </div>
                <hr class="text-light mt-5 mb-4">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <span class="text-light"><a href="#" class="text"><i class="fas fa-copyright text me-2"></i>Nuestro sitio web</a>, es totalmente reservado.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <span class="text-light">Diseñado por<a href="https://htmlcodex.com" class="text">#EquipoForumITSCH</a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>