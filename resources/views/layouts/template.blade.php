<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Aprende de la Moda</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/logoVeibul.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">La Moda</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Stios Web</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Historia</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Diseñadores</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Union</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenidos</div>
                <div class="masthead-heading text-uppercase">APRENDE DE LA MODA</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Empezar</a>
            </div>
        </header>
        
      
        <!-- Servicios-->
        <section class="page-section" id="services">
                  <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">MODA EN MOVIMIENTO: DESCIFRANDO TENDENCIAS, INNOVACIÓN Y RESPONSABILIDAD</h2>
                    <h3 class="section-subheading text-muted">Descubre el fascinante mundo de la moda a través de seis puntos clave que ilustran su evolución constante. Desde las tendencias y estilos actuales que definen la escena hasta las innovaciones en diseño y tecnología que están dando forma al futuro</h3>
                    </div>
                <div class="row text-center">

                
                @yield('content') 
            
               

        <!-- ALGUNAS DE ELLAS-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">ALGUNAS DE ELLAS</h2>
                    <h3 class="section-subheading text-muted">Explora la moda de la mano de marcas icónicas. Desde la elegancia de Dior hasta la comodidad de Leonisa, sumérgete en estilos únicos con Pull & Bear, Puma, Valentino y Lacoste. Descubre las últimas tendencias y la diversidad de la moda moderna en estas pá</h3>
                </div>
                <div class="row">


               
                @yield('additional-content')
                
        
        
        <!-- La Historia-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">LA HISTORIA</h2>
                    <h3 class="section-subheading text-muted">Viaje Visual por la Moda: Desde la Elegancia Victoriana hasta la Diversidad del Siglo XXI. Descubre cómo la moda ha evolucionado a través de épocas, fusionando estilos y abrazando la sostenibilidad en la actualidad</h3>
                </div>
                <ul class="timeline">
                    


        <!--Final de linea de tiempo-->
                @yield('footer-content')
               <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                <br />
                                ¿Que más 
                                <br />
                                vendrá?
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>




        <!-- Diseñadores-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">VISIONARIOS DE LA MODA</h2>
                    <h3 class="section-subheading text-muted">Personas que vuelven realidad lo imaginario</h3>
                    </div>
                    <div class="row">

                    @yield('header-content')
                
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">La moda es el arte de vestir sueños y expresar la identidad a través de la tela y el diseño.</p></div>
                </div>
            </div>
        </section>

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">EN LA MODA GLOBAL, LA DIVERSIDAD ES NUESTRO MEJOR ESTILO</h2>
                    <h3 class="section-subheading text-muted">Cada estilo es perfecto</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Se requiere un nombre</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">Se requiere un email.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email no valido</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Se requiere un nuevo telefonico.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Se requiere un mensaje</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">¡El envío del formulario fue exitoso!</div>
                           
                            <br />
                            
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">¡Error al enviar el mensaje!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar Mensaje</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Veibul 2024</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Politica de privacidad</a>
                        <a class="link-dark text-decoration-none" href="#!">Terminos de uso</a>
                    </div>
                </div>
            </div>
        </footer>
      




        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
