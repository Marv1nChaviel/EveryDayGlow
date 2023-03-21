<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/profesor_muestra.css">
    <link rel="stylesheet" href="./assets/css/joeblog.css">
    <link rel="stylesheet" href="./assets/css/info-style.css">
    <link rel="stylesheet" href="./assets/css/user-style.css">
    <link rel="icon" href="./images/logo-login.png">
    <title>EverDay Glow</title>
</head>

<body>

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


    <h1>Nuestro Team</h1>
    <div class="galeria">
        <div class="foto">
            <img src="assets/imgs/img-1.jpg" alt="">
        </div>
        <div class="pie">
            <p>Carlos Rincon</p>
            <p>FitCombat</p>
        </div>
    </div>

    <div class="galeria">
        <div class="foto">
            <img src="assets/imgs/img-2.jpg" alt="">
        </div>
        <div class="pie">
            <p>Xuan Lan</p>
            <p>Yoga</p>
        </div>
    </div>

    <div class="galeria">
        <div class="foto">
            <img src="assets/imgs/img-3.jpg" alt="">
        </div>
        <div class="pie">
            <p>Gabriel Tristan</p>
            <p>Zumba</p>
        </div>
    </div>

    <div class="galeria">
        <div class="foto">
            <img src="assets/imgs/img-4.jpg" alt="">
        </div>
        <div class="pie">
            <p>Ferry</p>
            <p>CrossFit</p>
        </div>
    </div>

    <div class="galeria">
        <div class="foto">
            <img src="img/team/personalizado2.jpeg" alt="">
        </div>
        <div class="pie">
            <p>Jose</p>
            <p>Crossfit</p>
        </div>
    </div>

    <div class="galeria">
        <div class="foto">
            <img src="img/team/personalizado1.jpeg" alt="">
        </div>
        <div class="pie">
            <p>Joselin</p>
            <p>Yoga</p>
        </div>
    </div>

    <div class="galeria">
        <div class="foto">
            <img src="img/team/personalizado.jpeg" alt="">
        </div>
        <div class="pie">
            <p>Ivanna</p>
            <p>coreografía</p>
        </div>
    </div>

    <div class="galeria">
        <div class="foto">
            <img src="img/team/personalizado3.jpeg" alt="">
        </div>
        <div class="pie">
            <p>Laura</p>
            <p>FitCombat</p>
        </div>
    </div>
    <?php
    $consulta_profesores = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nivel='entrenador'");

   
    if (mysqli_num_rows($consulta_profesores) > 1) {

        while ($datos_consulta_profesores = mysqli_fetch_array($consulta_profesores)) {
            $id_relacion_usuario_entrenador = $datos_consulta_profesores['id_usuario'];
            $consulta_id_entrenador = mysqli_query($conexion,"SELECT * FROM entrenadores WHERE relacion_usuario_entrenador ='$id_relacion_usuario_entrenador'");
            $datos_id_entrenador = mysqli_fetch_array($consulta_id_entrenador);
            $id_entrenador = $datos_id_entrenador['id_entrenador'];
            $consulta_cursos_disponibles = mysqli_query($conexion,"SELECT * FROM cursos_disponibles WHERE relacion_entrenadores_curso='$id_entrenador'");
            $datos_cursos_disponibles = mysqli_fetch_array($consulta_cursos_disponibles);

    ?>
            <div class="galeria">
                <div class="foto">
                    <img src="./assets/imgs/<?php echo $datos_cursos_disponibles['imagen'] ?>" alt="">
                </div>
                <div class="pie">
                    <p><?php echo $datos_consulta_profesores['nombre'] ?></p>
                    <p>Nuevo Entrenador</p>
                </div>
            </div>

    <?php
        }
    }
    if ($consulta_profesores) {
    } else {
        print_r(mysqli_error($conexion));
    }


    ?>
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="./js/popper.min.js" type="text/javascript"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
</body>

</html>