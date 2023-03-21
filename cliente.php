<?php

session_start();  // se inicia seccion
$nombre = $_SESSION['nombre'];    // almacena el nombre mandado de la seccion en la variable $nombre para ser usado como referencia en la bienvenida


if (isset($_SESSION['nombre'])) {        // verifica si la variable nombre dentro de $_SESSION posee algun valor dentro

    if ($_SESSION['nivel'] == "cliente") {    // verifica si $_SESSION nivel lo compara y depende el usuario restringe 
        // el no poder usar otra pagina que no sea la propia 


?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>EveryDay Glow</title>
            <!-- font icons -->
            <link rel="stylesheet" href="./assets/vendors/themify-icons/css/themify-icons.css">
            <!-- Bootstrap styles-->
            <link rel="stylesheet" href="./assets/css/joeblog.css">
            <link rel="stylesheet" href="./assets/css/info-style.css">
            <link rel="stylesheet" href="./assets/css/user-style.css">
            <link rel="icon" href="./images/logo-login.png">
            <link rel="stylesheet" href="sweetalert2.min.css">
            <link rel="shortcut icon" href="images/logo-login.png" type="image/x-icon">
        </head>

        <body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

            <!-- primera pagina de navegacion del cliente -->
            <nav class="navbar navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="assets/imgs/logo-dark.png" alt="">
                    </a>
                    <div class="socials">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-youtube"></i></a>
                    </div>
                </div>
            </nav>
            <!-- End primera pagina de navegacion del cliente -->

            <!-- segunda pagina de navegacion del cliente -->
            <nav class="navbar custom-navbar navbar-expand-md navbar-light bg-primary sticky-top">
                <div class="container">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="cliente.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Servicios generales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#team">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./cliente_cursos.php">Mis Cursos</a>
                            </li>
                        </ul>
                        <div class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="mi_cuenta.php" class="Cerrar-seccion ml-4 btn btn-primary rounded btn-danger mt-1 btn-sm ">Mi cuenta</a>
                                <a href="salir.php" class="Cerrar-seccion ml-4 btn btn-primary rounded btn-warning mt-1 btn-sm ">Cerrar
                                    Sesion</a>
                            </li>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End segunda pagina de navegacion del cliente -->

            <!-- page-header -->
            <header class="page-header"></header>
            <!-- end of page header -->

            <div id="team" class="container">
                <section>
                    <div class="feature-posts">
                        <a href="#" class="feature-post-item">
                            <span>Disciplinas Disponibles</span>
                        </a>
                        <a href="./Fitcombat-index.php" class="feature-post-item">
                            <img src="assets/imgs/img-1.jpg" class="w-100" alt="">
                            <div class="feature-post-caption">FitCombat</div>
                        </a>
                        <a href="./Yoga-index.php" class="feature-post-item">
                            <img src="assets/imgs/img-2.jpg" class="w-100" alt="">
                            <div class="feature-post-caption">Yoga</div>
                        </a>
                        <a href="./Zumba.php" class="feature-post-item">
                            <img src="assets/imgs/img-3.jpg" class="w-100" alt="">
                            <div class="feature-post-caption">Zumba</div>
                        </a>
                        <a href="./CrossFit-index.php" class="feature-post-item">
                            <img src="assets/imgs/img-4.jpg" class="w-100" alt="">
                            <div class="feature-post-caption">CrossFit</div>
                        </a>
                    </div>

                    <div class="feature-posts" style="padding-top: 20px;">
                        <a href="#" class="feature-post-item">
                            <span style="font-size:13px;">Disciplinas Personalizadas</span>
                        </a>
                        <a href="./entrenadorjose.php" class="feature-post-item">
                            <img src="img/team/personalizado2.jpeg" class="w-100" alt="">
                            <div class="feature-post-caption">Jose Rojas</div>
                        </a>
                        <a href="./entrenadorajoselin.php" class="feature-post-item">
                            <img src="img/team/personalizado1.jpeg" class="w-100" alt="">
                            <div class="feature-post-caption">Joselin Gonzalez</div>
                        </a>
                        <a href="./entrenadoraivana.php" class="feature-post-item">
                            <img src="img/team/personalizado.jpeg" class="w-100" alt="">
                            <div class="feature-post-caption">Ivana Moreno</div>
                        </a>
                        <a href="./entrenadoralaura.php" class="feature-post-item">
                            <img src="img/team/personalizado3.jpeg" class="w-100" alt="">
                            <div class="feature-post-caption">Laura Serrudo</div>
                        </a>
                    </div>

                    <br>
                    <center><a href="profe_muestra.php" class="Cerrar-seccion ml-4 btn btn-primary rounded btn-danger mt-1 btn-sm ">Mostrar Team</a></center>

                    <center> <button class="ml-4 btn btn-primary rounded btn-warning mt-1 btn-sm" onclick="actividades();">Mostrar mis Actividades</button></center>

                </section>
                <hr>
                <div class="page-container">
                    <div class="page-content">
                        <!--Grafica en canvas para mostrar logros-------->

                        <!--Grafica en canvas para mostrar logros-------->
                        <div class="card">
                            <div class="card-header text-center">
                                <h5 class="card-title">Disciplinas</h5>
                                <small class="small text-muted">Si tú sabes lo que vales, ve y consigue lo que mereces
                                </small>
                            </div>
                            <div class="card-body">
                                <div class="blog-media">
                                    <center><img id="photo_cliente" src="assets/imgs/blog-6.jpg" style="width: 500px;" alt=""></center>
                                    <a href="#" class="badge badge-primary">#Motivacion</a>
                                </div>
                                <p class="my-3">El fitness es un modo de vivir que te transforma por dentro y por fuera. Es un
                                    estilo de vida, un matrimonio entre la buena alimentación (dieta balanceada) y la actividad
                                    física (rutina de entrenamiento).
                                    Las personas amantes del mundo fitness, van a disfrutar de una mayor calidad de vida, mejor
                                    salud y van a llegar a una edad avanzada con mucha más fuerza y vitalidad que aquellas
                                    personas que siguen una vida sendentaria. Por ello, te recomendamos que te introduzcas en el
                                    mundo fitness en cuanto puedas.
                                </p>
                            </div>

                            <div class="card-footer d-flex justify-content-between align-items-center flex-basis-0">
                                <button class="btn btn-primary circle-35 mr-4"><i class="ti-back-right"></i></button>
                                <a href="https://blog.viladomat.com/consejos-motivacion-fitness/" class="btn btn-outline-dark btn-sm">MAS INFO</a>
                                <a href="#" class="text-dark small text-muted"></a>
                            </div>
                        </div>
                        <hr>

                        <div id="services" class="card-header text-center">
                            <h5 class="card-title">Servicios Disponibles</h5>
                            <small class="small text-muted">Si tú sabes lo que vales, ve y consigue lo que mereces
                            </small>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card text-center mb-5">
                                    <div class="card-header p-0">
                                        <div class="blog-media">
                                            <img src="assets/imgs/blog-2.jpg" alt="" class="w-100-card">
                                            <a href="#" class="badge badge-primary">#FitCombat</a>
                                        </div>
                                    </div>
                                    <div class="card-body px-0">
                                        <h5 class="card-title mb-2">FitCombat</h5>
                                        <small class="small text-muted">¿Para que sirve el FitCombat?
                                            <span class="px-2">-</span>
                                            <a href="#" class="text-muted">Beneficios</a>
                                        </small>
                                        <p class="my-2">Fortalece el músculo más importante del corazón. Eleva la autoestima y
                                            sube el buen ánimo y te llena de energía. Quema aproximadamente 600 calorías en 45
                                            minutos. Mejora tu oxigenación.</p>
                                    </div>

                                    <div class="card-footer p-0 text-center">
                                        <h4 class="my-2">Por solo 60$</h4>
                                        <a href="./Fitcombat-index.php" class="btn btn-outline-dark btn-sm">Inscribirse</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card text-center mb-5">
                                    <div class="card-header p-0">
                                        <div class="blog-media">
                                            <img src="assets/imgs/blog-3.jpg" alt="" class="w-100-card">
                                            <a href="#" class="badge badge-primary">#Yoga</a>
                                        </div>
                                    </div>
                                    <div class="card-body px-0">
                                        <h5 class="card-title mb-2">Yoga</h5>
                                        <small class="small text-muted">¿Para que sirve?
                                            <span class="px-2">-</span>
                                            <a href="#" class="text-muted">Ventajas</a>
                                        </small>
                                        <p class="my-2">práctica que conecta el cuerpo, la respiración y la mente. Esta práctica
                                            utiliza posturas físicas, ejercicios de respiración y meditación para mejorar la
                                            salud general. El yoga se desarrolló como una práctica espiritual hace miles de
                                            años.</p>
                                    </div>

                                    <div class="card-footer p-0 text-center">
                                        <h4 class="my-2">Por solo 40$</h4>
                                        <a href="./Yoga-index.php" class="btn btn-outline-dark btn-sm">Inscribirse</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card text-center mb-5">
                                    <div class="card-header p-0">
                                        <div class="blog-media">
                                            <img src="assets/imgs/blog-4.jpg" alt="" class="w-100-card">
                                            <a href="#" class="badge badge-primary">#Zumba</a>
                                        </div>
                                    </div>
                                    <div class="card-body px-0">
                                        <h5 class="card-title mb-2">Zumba</h5>
                                        <small class="small text-muted">"En que me Beneficia?"
                                            <span class="px-2">-</span>
                                            <a href="#" class="text-muted">Dance</a>
                                        </small>
                                        <p class="my-2">En una clase de una hora de zumba, una persona puede eliminar hasta 800
                                            calorías. La razón es que esta impacta todos los aspectos del acondicionamiento
                                            físico,</p>
                                    </div>

                                    <div class="card-footer p-0 text-center">
                                        <h4 class="my-2">Por solo 30$</h4>
                                        <a href="./Zumba.php" class="btn btn-outline-dark btn-sm">Inscribirse</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card text-center mb-5">
                                    <div class="card-header p-0">
                                        <div class="blog-media">
                                            <img src="assets/imgs/blog-5.jpg" alt="" class="w-100-card">
                                            <a href="#" class="badge badge-primary">#CrossFit</a>
                                        </div>
                                    </div>
                                    <div class="card-body px-0">
                                        <h5 class="card-title mb-2">CrossFit</h5>
                                        <small class="small text-muted">Porque es importante?
                                            <span class="px-2">-</span>
                                            <a href="#" class="text-muted">Cardio</a>
                                        </small>
                                        <p class="my-2">CrossFit se define como un sistema de entrenamiento de fuerza y
                                            acondicionamiento basado en ejercicios funcionales constantemente variados.</p>
                                    </div>

                                    <div class="card-footer p-0 text-center">
                                        <h4 class="my-2">Por solo 45$</h4>
                                        <a href="./CrossFit-index.php" class="btn btn-outline-dark btn-sm">Inscribirse</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="page-sidebar text-center">
                        <h6 class="sidebar-title section-title mb-4 mt-3">Bienvenid@, <?php echo $nombre ?> </h6>
                        <img src="assets/imgs/avatar-4.png" alt="" class="circle-100 mb-3">
                        <div class="socials mb-3 mt-2">
                            <a href="javascript:void(0)"><i class="ti-facebook"></i></a>
                            <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                        </div>
                        <p></p>

                        <!-------barra de progresos -->
                        <div class="progress">
                            <ul class="progress">

                                <!--  Item  -->
                                <?php
                                include 'conexion.php';
                                //----------consulta en la tabla usuario para obtener la relacion cliente/usuario
                                $id_usuario = $_COOKIE['id_usuario'];
                                $obtener_codigo_cliente  = mysqli_query($conexion, "SELECT * FROM clientes WHERE relacion_usuario_cliente='$id_usuario'"); // obtener codigo del clinete con relacion usuario
                                $codigo_cliente = mysqli_fetch_array($obtener_codigo_cliente); // almacenando la informacion de la consulta en un array
                                $id_cliente = $codigo_cliente['id_cliente']; // almacena en la variable $id_cliente los datos de la db de la columna id cliente
                                $obtener_codigo_cliente_curso  = mysqli_query($conexion, "SELECT * FROM cursos_pagados WHERE id_relacion_cliente='$id_cliente'"); // obtener codigo del clinete con relacion usuario

                                ?>
                                <li data-name="CURSOS INSCRITOS" data-percent=<?php echo mysqli_num_rows($obtener_codigo_cliente_curso) ?>>
                                    <!-- NAME ES LA ETIQUETA DE LA GRAFICA Y PERCENT LA LEYENDA INTERNA -->

                                    <svg viewBox="-10 -10 220 220">
                                        <g fill="none" stroke-width="20" transform="translate(100,100)">
                                            <!-- SE DIVIDE EN 6 LA GRAFICA -->
                                            <path d="M 0,-100 A 100,100 0 0,1 86.6,-50" stroke="#0B70B8" />
                                            <path d="M 86.6,-50 A 100,100 0 0,1 86.6,50" stroke="#0B70B8" />
                                            <path d="M 86.6,50 A 100,100 0 0,1 0,100" stroke="#0B70B8" />
                                            <path d="M 0,100 A 100,100 0 0,1 -86.6,50" stroke="#0B70B8" />
                                            <path d="M -86.6,50 A 100,100 0 0,1 -86.6,-50" stroke="#0B70B8" />
                                            <path d="M -86.6,-50 A 100,100 0 0,1 0,-100" stroke="#0B70B8" />
                                        </g>
                                    </svg>

                                    <svg viewBox="-10 -10 220 220">
                                        <path d="M200,100 C200,44.771525 155.228475,0 100,0 C44.771525,0 0,44.771525 0,100 C0,155.228475 44.771525,200 100,200 C155.228475,200 200,155.228475 200,100 Z" stroke-dashoffset="550"></path> <!-- SE TRABAJA EN UNA ESCALA DE 630 -->
                                    </svg>
                                </li>

                            </ul>

                        </div>

                        <!--end barra de progreso-->


                        <br><br><br><br><br>
                        <h6 class="sidebar-title mt-5 mb-4">Tags</h6>
                        <a href="javascript:void(0)" class="badge badge-primary m-1">#Motivacion</a>
                        <a href="javascript:void(0)" class="badge badge-primary m-1">#FitCombat</a>
                        <a href="javascript:void(0)" class="badge badge-primary m-1">#Yoga</a>
                        <a href="javascript:void(0)" class="badge badge-primary m-1">#Zumba</a>
                        <a href="javascript:void(0)" class="badge badge-primary m-1">#CrossFit</a>
                        <a href="javascript:void(0)" class="badge badge-primary m-1">#Fitness</a>
                        <a href="javascript:void(0)" class="badge badge-primary m-1">#Salud</a>
                        <a href="javascript:void(0)" class="badge badge-primary m-1">#Ejercicio</a>


                        <!-- formulario de caracteristicas -->
                        <form action="datos_adicionales_cliente.php" method="POST" class="formulario">
                            <h1 class="formulario__titulo">caracteristicas</h1>
                            <input type="number" min="30.0" max="440.0" step="0.1" class="formulario__input" name="peso" required>
                            <label for="" class="formulario__label">Peso</label>
                            <input type="number" min="0.57" max="2.43" step="0.01" class="formulario__input" name="altura" required>
                            <label for="" class="formulario__label">Altura</label>
                            <input type="number" min="15" max="85" class="formulario__input" name="edad" required>
                            <label for="" class="formulario__label">Edad</label>
                            <input type="text" class="formulario__input" name="patologia" required minlength="5" maxlength="100">
                            <label for="" class="formulario__label">Patologia</label>
                            <input type="number" min="15.0" max="110" step="0.1" class="formulario__input" name="m_piernas" required>
                            <label for="" class="formulario__label">Medida Pierna cm</label>
                            <input type="number" min="10.0" max="35.0" step="0.1" class="formulario__input" name="m_brazos" required>
                            <label for="" class="formulario__label">Medida Brazo cm</label>
                            <input type="number" min="40.0" max="250.0" step="0.1" class="formulario__input" name="m_cintura" required>
                            <label for="" class="formulario__label">Medida Cintura cm</label>
                            <input type="submit" class="formulario__submit">
                        </form>
                        <!-- end formualario -->
                        <h6 class="sidebar-title mt-5 mb-4">Entrenamiento</h6>
                        <div class="card mb-4">
                            <a href="#" class="overlay-link"></a>
                            <div class="card-header p-0">
                                <div class="blog-media">
                                    <img src="assets/imgs/blog-6.jpg" alt="" class="w-100">
                                    <a href="#" class="badge badge-primary">#Motivacion</a>
                                </div>
                            </div>

                        </div>
                        <div class="card mb-4">
                            <a href="#" class="overlay-link"></a>
                            <div class="card-header p-0">
                                <div class="blog-media">
                                    <img src="assets/imgs/salud.jpg" alt="" class="w-100">
                                    <a href="#" class="badge badge-primary">#Salud</a>
                                </div>
                            </div>

                        </div>
                        <div class="card mb-4">
                            <a href="#" class="overlay-link"></a>
                            <div class="card-header p-0">
                                <div class="blog-media">
                                    <img src="assets/imgs/ejercicio.jpg" alt="" class="w-100">
                                    <a href="#" class="badge badge-primary">#Ejercicio</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="info" class="instagram-wrapper mt-5">
                <div class="ig-id">
                    <a href="#">Siguenos @EveryDayGlow en Instagram</a>
                </div>
                <a href="javascript:void(0)" class="insta-item">
                    <img src="assets/imgs/insta-1.jpg" alt="" class="w-100">
                    <div class="overlay">
                        <span>
                            <i class="ti-heart"></i> 23
                        </span>
                        <span>
                            <i class="ti-comment"></i> 12
                        </span>
                    </div>
                </a>
                <a href="javascript:void(0)" class="insta-item">
                    <img src="assets/imgs/insta-2.jpg" alt="" class="w-100">
                    <div class="overlay">
                        <span>
                            <i class="ti-heart"></i> 59
                        </span>
                        <span>
                            <i class="ti-comment"></i> 10
                        </span>
                    </div>
                </a>
                <a href="javascript:void(0)" class="insta-item">
                    <img src="assets/imgs/insta-3.jpg" alt="" class="w-100">
                    <div class="overlay">
                        <span>
                            <i class="ti-heart"></i> 10
                        </span>
                        <span>
                            <i class="ti-comment"></i> 8
                        </span>
                    </div>
                </a>
                <a href="javascript:void(0)" class="insta-item">
                    <img src="assets/imgs/insta-4.jpg" alt="" class="w-100">
                    <div class="overlay">
                        <span>
                            <i class="ti-heart"></i> 12
                        </span>
                        <span>
                            <i class="ti-comment"></i> 10
                        </span>
                    </div>
                </a>
                <a href="javascript:void(0)" class="insta-item">
                    <img src="assets/imgs/insta-5.jpg" alt="" class="w-100">
                    <div class="overlay">
                        <span>
                            <i class="ti-heart"></i> 45
                        </span>
                        <span>
                            <i class="ti-comment"></i> 12
                        </span>
                    </div>
                </a>
                <a href="javascript:void(0)" class="insta-item">
                    <img src="assets/imgs/insta-6.jpg" alt="" class="w-100">
                    <div class="overlay">
                        <span>
                            <i class="ti-heart"></i> 30
                        </span>
                        <span>
                            <i class="ti-comment"></i> 10
                        </span>
                    </div>
                </a>
            </div>



            <!-- Page Footer -->
            <footer class="page-footer">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-3 text-center text-md-left mb-3 mb-md-0">
                            <img src="assets/imgs/logo-dark.png" alt="" class="logo">
                        </div>

                    </div>
                    <p class="border-top mb-0 mt-4 pt-3 small">&copy; <script>
                            document.write(new Date().getFullYear())
                        </script>,EveryDayGlow<a href="#" class="text-muted font-weight-bold" target="_blank"></a> All rights
                        reserved </p>
                </div>
            </footer>

            <!-- End of Page Footer -->

            <!-- core  -->
            <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
            <script src="./js/popper.min.js" type="text/javascript"></script>
            <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>


            <!-- JoeBLog js -->
            <script src="./assets/js/joeblog.js"></script>

            <!--Scrip de graficos para muestra de logros------------------------------------------------------ -->
            <script src="./js/chart.js"></script>
            <script>
                const ctx = document.getElementById('grafica').getContext('2d');
            </script>
            <!--Scrip de graficos para muestra de logros--------------------------------------------- -->
            <!--Scrip de graficos para muestra de logros--------------------------------------------- -->
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <?php

            $id_cliente = $_COOKIE['id_cliente'];
            $consulta_actividadescliente = mysqli_query($conexion, "SELECT * FROM actividadesclientes WHERE relacion_actividadesclientes_clientes='$id_cliente' ");
            while ($datos_actividadescliente = mysqli_fetch_array($consulta_actividadescliente)) {
                $relacion_actividad_codigo = $datos_actividadescliente['relacion_actividadcliente_actividad'];
                $consulta_actividades = mysqli_query($conexion, "SELECT * FROM actividades WHERE id_actividad='$relacion_actividad_codigo'");
                $datos_actividades = mysqli_fetch_array($consulta_actividades);
                $nombre_actividad = $datos_actividades['nombre_actividad'];
                $id_actividad_cliente = $datos_actividadescliente['id_actividad_cliente'];

                print_r($relacion_actividad_codigo . $datos_actividades['nombre_actividad']);



            ?>
                <script>
                    function actividades() {
                        var result = null;
                        Swal.fire({
                            title: 'Actividad de Hoy, <?php print_r($datos_actividades['nombre_actividad']); ?>',
                            icon: 'info',
                            html: 'Hoy trabajaremos <?php print_r($datos_actividadescliente['musculo_trabajado']) ?>, tendremos un total de <?php print_r($datos_actividadescliente['numero_serie']) ?> series con <?php print_r($datos_actividadescliente['numero_repeticiones']) ?> repeticiones llevando una dificultad <?php print_r($datos_actividadescliente['dificultad']) ?>, Mucha Suerte!!',
                            showDenyButton: true,
                            confirmButtonText: 'Finalizar',
                            denyButtonText: 'Omitir',
                        }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                            if (result.isConfirmed) {
                                Swal.fire('Felicidades hasta la proxima actividad', '', 'success')
                                
                                
                            } else if (result.isDenied) {
                                Swal.fire('Recuerda que un cuerpo fitness no se hace esperar!', '', 'info')
                            }
                        })
                    }
                </script>

            <?php
            }
            ?>

        </body>

        </html>
<?php
    } else if ($_SESSION['nivel'] == "entrenador") {      // si el nivel que entra en esta pagina es entrenador lo redirige a su pagina
        header("Location: entrenador.php");
    }
} else {                                           // cuyo caso no se halla detectado valor alguno en $_SESSION se mandara nuevamente al login

    header('Location: login.php');               //funcion manda al login.php

}

?>