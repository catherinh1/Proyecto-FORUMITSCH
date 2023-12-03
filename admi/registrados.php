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
                        <small class="me-3 text-white-50"><a href="https://maps.app.goo.gl/VaM1MGWavUEc6n6o7"><i class="fas fa-map-marker-alt me-2 text-secondary"></i></a>Av. Ing. Carlos Rojas Gutiérrez 2120 | Fraccionamiento Valle de la Herradura | Ciudad Hidalgo Michoacán</small>
                        <small class="me-3 text-white-50"><a href="#"><i class="fas fa-envelope me-2 text-secondary"></i></a>contacto@tecnm.mx </small>
                    </div>
                    <div id="note" class="text-secondary d-none d-xl-flex"><small>Note : We help you to Grow your Business</small></div>
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
        <div class="container-fluid bg-primary">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="text-white fw-bold d-block">Forum<span class="text-secondary">ITSCH</span> </h1>
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav ms-auto mx-xl-auto p-0">
                            <a href="index.html" class="nav-item nav-link active text-secondary">Noticias</a>
                            <a href="about.html" class="nav-item nav-link">Residencias</a>
                            <a href="service.html" class="nav-item nav-link">Servicio</a>
                            <a href="project.html" class="nav-item nav-link">Becas</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Carreras</a>
                                <div class="dropdown-menu rounded">
                                    <a href="blog.html" class="dropdown-item">Ing Sistemas</a>
                                    <a href="team.html" class="dropdown-item">Ing Mecatrónica</a>
                                    <a href="testimonial.html" class="dropdown-item">Ing Industrial</a>
                                    <a href="404.html" class="dropdown-item">Ing TICS</a>
                                    <a href="team.html" class="dropdown-item">Ing Nanotecnología</a>
                                    <a href="testimonial.html" class="dropdown-item">Ing Gestión</a>
                                    <a href="404.html" class="dropdown-item">Ing Bioquímica</a>
                                </div>
                            </div>
                            <a href="Cuenta.html" class="nav-item nav-link">Cuenta</a>
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shirink-0">
                        <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                            <a href="" class="position-relative animated tada infinite">
                                <i class="fa fa-phone-alt text-white fa-2x"></i>
                                <div class="position-absolute" style="top: -7px; left: 20px;">
                                    <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column pe-4 border-end">
                            <span class="text-white-50">Tienes alguna pregunta?</span>
                            <span class="text-secondary">Tel: (786) 154-90-00</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-center ms-4 ">
                            <a href="#"><i class="bi bi-search text-white fa-2x"></i> </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
    
        <?php
$result =select("usuarios","*");
?>
<div class="col-md-12">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo Electronico</th>
            <th>rol</th>
        </tr>
    </thead> <!-- Despues de aqui se hace la coneccion de la tabla  -->
    <tbody>
        <?php //foreach() ?>
        <?php 
        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_object($result)) {
        ?> 

             <tr>
                <td><?php echo $row->id_usuarios ?></td>
                <td><?php echo $row->nombre ?></td>
                <td><?php echo $row->apellidos ?></td>
                <td><?php echo $row->email ?></td>
                <td><?php echo $row->rol ?></td>                
             </tr>
             <?php
            }
        } else {
            echo "no hay ningun registro";
        }
        ?>
</table>
</div>
<!-- Footer Start -->
<div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
            <div class="container pt-5 pb-4">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <a href="index.html">
                            <h1 class="text-white fw-bold d-block">Forum<span class="text-secondary">Itsch</span> </h1>
                        </a>
                        <p class="mt-4 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facere delectus qui placeat inventore consectetur repellendus optio debitis.</p>
                        <div class="d-flex hightech-link">
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-twitter text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Short Link</a>
                        <div class="mt-4 d-flex flex-column short-link">
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>About us</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact us</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Services</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Projects</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Latest Blog</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Help Link</a>
                        <div class="mt-4 d-flex flex-column help-link">
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Terms Of use</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Privacy Policy</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Helps</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>FQAs</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Contacto</a>
                        <div class="text-white mt-4 d-flex flex-column contact-link">
                            <a href="#" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i> Av. Ing. Carlos Rojas Gutiérrez 2120 | Fraccionamiento Valle de la Herradura | Ciudad Hidalgo Michoacán</a>
                            <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i> (786) 154-90-00</a>
                            <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i> contacto@tecnm.mx</a>
                        </div>
                    </div>
                </div>
                <hr class="text-light mt-5 mb-4">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <span class="text-light"><a href="#" class="text-secondary"><i class="fas fa-copyright text-secondary me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <span class="text-light">Designed By<a href="https://htmlcodex.com" class="text-secondary">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

        
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