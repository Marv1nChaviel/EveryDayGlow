<?php

session_start();  // se inicia seccion
$nombre = $_SESSION['nombre'];    // almacena el nombre mandado de la seccion en la variable $nombre para ser usado como referencia en la bienvenida

$id_usuario = $_SESSION['id_usuario'];

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
            <link rel="stylesheet" href="./assets/css/user-style.css">
            <link rel="icon" href="./assets/imgs/icon.png">
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
                                <a class="nav-link" href="#info">Team</a>
                            </li>

                        </ul>
                        <div class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="./login.php" class="Cerrar-seccion ml-4 btn btn-primary rounded btn-danger mt-1 btn-sm ">Mi cuenta</a>
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

            <div class="container">
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
                            <div class="feature-post-caption">zumba</div>
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
                        <a href="./Fitcombat-index.php" class="feature-post-item">
                            <img src="img/team/personalizado2.jpeg" class="w-100" alt="">
                            <div class="feature-post-caption">Jose Rojas</div>
                        </a>
                        <a href="./Yoga-index.php" class="feature-post-item">
                            <img src="img/team/personalizado1.jpeg" class="w-100" alt="">
                            <div class="feature-post-caption">Joselin Gonzalez</div>
                        </a>
                        <a href="./Zumba.php" class="feature-post-item">
                            <img src="img/team/personalizado.jpeg" class="w-100" alt="">
                            <div class="feature-post-caption">Ivana Moreno</div>
                        </a>
                        <a href="./CrossFit-index.php" class="feature-post-item">
                            <img src="img/team/personalizado3.jpeg" class="w-100" alt="">
                            <div class="feature-post-caption">Laura Serrudo</div>
                        </a>
                    </div>
                </section>
                <hr>
                <div class="page-container">
                    <div class="page-content">
                        <!--Grafica en canvas para mostrar logros-------->

                        <!--Grafica en canvas para mostrar logros-------->



                        <div id="services" class="card-header text-center">
                            <h5 class="card-title">Mis Cursos</h5>
                            <small class="small text-muted">Si tú sabes lo que vales, ve y consigue lo que mereces
                            </small>
                        </div>
                        <!--Columna en la parte de ver mis cursos -->
                        <div class="row">
                            <?php
                            include 'conexion.php';
                            include 'guardar_compra.php';

                            $eliminar_curso = new guardardatos();
                            //---- trayendo datos almacenados de las cookies
                            $nombre = $_COOKIE['nombre'];
                            $id_usuario = $_COOKIE['id_usuario'];
                            $directorio = __DIR__;
                            $ubicacion = $directorio . '/json/' . $id_usuario . '/{*.json}';
                            //----------verificando cuantos archivos hay en la direccion por usuario y retorna un numero
                            $total_cursos_usuario = count(glob($ubicacion, GLOB_BRACE));
                            for ($i = 0; $i < $total_cursos_usuario; $i++) { //ejecutara el for por cada vez que encuentre un archivo en los cursos del usuario

                                $nombrearchivos = scandir($directorio . '/json/' . $id_usuario . '/', 1); // escanea el directorio y obtiene el nombre de todos ls archivos en el
                                $datosinternosjson = json_decode(file_get_contents($directorio . '/json/' . $id_usuario . '/' . $nombrearchivos[$i]), true); //almacenamos la ubicacion del archivo en datos internosjson
                                //print_r($datosinternosjson['Curso_Pago']['titulo_curso']);

                                //----------consulta en la tabla usuario para obtener la relacion cliente/usuario
                                $id_usuario = $_COOKIE['id_usuario'];
                                $obtener_codigo_cliente  = mysqli_query($conexion, "SELECT * FROM clientes WHERE relacion_usuario_cliente='$id_usuario'"); // obtener codigo del clinete con relacion usuario
                                $codigo_cliente = mysqli_fetch_array($obtener_codigo_cliente); // almacenando la informacion de la consulta en un array
                                $id_cliente = $codigo_cliente['id_cliente']; // almacena en la variable $id_cliente los datos de la db de la columna id cliente
                                




                            }
                            //----------consulta en la base de datos donde los se buscaran los cursos pagos con el id del cliente
                            $obtener_codigo_cliente_curso  = mysqli_query($conexion, "SELECT * FROM cursos_pagados WHERE id_relacion_cliente='$id_cliente'"); // obtener codigo del clinete con relacion usuario
                           

                            //obtenemos la cantidas de archivos en la carpeta cursos pagados----------------------------------------
                            $ubicacion_cursos_pagados = $directorio . '/json/cursos_disponibles/{*.json}';
                            $total_cursos_pagados = count(glob($ubicacion, GLOB_BRACE));  // cuenta la cantidad de archivos en la carpeta cursos disponibles y devuelve un entero

                            $nombrearchivoscursos = scandir($directorio . '/json/cursos_disponibles', 1); // escanea el directorio y obtiene el nombre de todos ls archivos en el

                            for ($i = 0; $i < mysqli_num_rows($obtener_codigo_cliente_curso); $i++) { //bucle que se repite cada vez que encuentra una columna en cursos pagados con el id del cliente

                                $codigo_cliente_cursos = mysqli_fetch_array($obtener_codigo_cliente_curso); // almacenando la informacion de la consulta en un array

                                $datosinternosjson = json_decode(file_get_contents($directorio . '/json/cursos_disponibles/' . $codigo_cliente_cursos['nombre_curso'] . '.json'), true); //almacenamos la informacion del archivo de los datos internosjson
                                //print_r($datosinternosjson['imagen']);
                                //print_r($datosinternosjson['pagina']);
                                //----------Consulta codigo entrenador -------------------------------------------
                                $consulta_eliminar_curso = mysqli_query($conexion, "SELECT * FROM relacion_cliente_entrenador WHERE id_cliente='$id_cliente'");
                                $datos_eliminar_curso = mysqli_fetch_array($consulta_eliminar_curso);

                            ?>
                                <!--En este punto dentro del bucle for se ejecuta la muestra de los cuadros por cada curso inscrito que tenga la persona -->
                                <div class="col-lg-6">
                                    <div class="card text-center mb-5">
                                        <div class="card-header p-0">
                                            <div class="blog-media">
                                                <img src="assets/imgs/<?php echo $datosinternosjson['imagen']  ?>" alt="" class="w-100">
                                                <a href="#" class="badge badge-primary">#<?php echo $datosinternosjson['titulo']  ?></a>
                                            </div>
                                        </div>
                                        <div class="card-body px-0">
                                            <h5 class="card-title mb-2"><?php echo $datosinternosjson['titulo'] ?></h5>
                                            <small class="small text-muted"><?php echo $datosinternosjson['texto2'] ?>
                                                <span class="px-2">-</span>
                                                <a href="#" class="text-muted"><?php echo $datosinternosjson['texto3'] ?></a>
                                            </small>
                                            <p class="my-2"><?php echo $datosinternosjson['texto4'] ?></p>
                                        </div>
                                        <div class="card-footer p-0 text-center">
                                            <a href="<?php echo $datosinternosjson['pagina'] ?>" class="btn btn-outline-dark btn-sm">Ver curso</a>
                                        </div>
                                        <p></p>
                                        <div class="card-footer p-0 text-center">
                                            <a href="eliminar_curso.php?titulocurso=<?php echo $codigo_cliente_cursos['nombre_curso'] ?>" onclick="return confirm('¿Estas seguro de eliminar el curso de <?php echo $codigo_cliente_cursos['nombre_curso'] ?> ?');" class="btn btn-danger btn-sm btn-danger">Eliminar</a>
                                        </div>

                                    </div>
                                </div>
                            <?php

                            }
                       

                            ?>
                            <!--En este punto dentro del bucle for se ejecuta la muestra de los cuadros por cada curso inscrito que tenga la persona -->





                        </div>
                        <!--Columna en la parte de ver mis cursos -->
                    </div>


                    <!-- Sidebar -->
                    <div class="page-sidebar text-center">
                        <h6 class="sidebar-title section-title mb-4 mt-3">Bienvenido, <?php echo $nombre ?> </h6>
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
            <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

            <!-- JoeBLog js -->
            <script src="assets/js/joeblog.js"></script>

            <!--Scrip de graficos para muestra de logros------------------------------------------------------ -->
            <script src="./js/chart.js"></script>
            <script>
                const ctx = document.getElementById('grafica').getContext('2d');
            </script>
            <!--Scrip de graficos para muestra de logros--------------------------------------------- -->
           

        </body>

        </html>
<?php
    } else if ($_SESSION['nivel'] == "entrenador") {      // si el nivel que entra en esta pagina es entrenador lo redirige a su pagina
        header("Location: admin.php");
    }
} else {                                           // cuyo caso no se halla detectado valor alguno en $_SESSION se mandara nuevamente al login

    header('Location: login.php');               //funcion manda al login.php

}

?>