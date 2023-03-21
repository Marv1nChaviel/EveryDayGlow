<?php
session_start();
$nombre = $_SESSION['nombre'];
$id = $_GET['id'];
include 'conexion.php';
$consulta_datos = mysqli_query($conexion,"SELECT * FROM datos_opcionales_cliente WHERE id_relacion_clientes_datos='$id'");
$datos_opcionales_consulta = mysqli_fetch_array($consulta_datos);
$consulta_nombre = mysqli_query($conexion,"SELECT * FROM clientes WHERE id_cliente='$id'");
$datos_cliente_consulta= mysqli_fetch_array($consulta_nombre);
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
    <link rel="stylesheet" href="./assets/css/info-style.css">
    <link rel="stylesheet" href="./assets/css/user-style.css">
    <link rel="stylesheet" href="./css/modal.css">
    <link rel="icon" href="./assets/imgs/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.umd.js" integrity="sha512-gQhCDsnnnUfaRzD8k1L5llCCV6O9HN09zClIzzeJ8OJ9MpGmIlCxm+pdCkqTwqJ4JcjbojFr79rl2F1mzcoLMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                        <a class="nav-link" href="entrenador.php">Inicio</a>
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

    <!-- end of page header -->
    

    <div class="container">
        <div id="miclass" class="page-container">
            <div class="page-content">
                <div class="card">


                </div>
                <hr>



                <!-- Sidebar -->
                <div id="clientes">
                    <center>
                        <h6 class="sidebar-title section-title mb-4 mt-3">Profesor/a, <?php echo $nombre ?></h6>
                        <img src="assets/imgs/avatar-4.png" alt="" class="circle-100 mb-3 ">
                        <div class="socials mb-3 mt-2">
                            <a href="javascript:void(0)"><i class="ti-facebook"></i></a>
                            <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                        </div>
                    </center>

                    <p></p>
                    <h5 class="sidebar-title section-title mb-4 mt-3">Estadisticas del alumno, <?php echo $datos_cliente_consulta['nombre_cliente']?>. Progreso actual</h5>
                    <canvas id="myChart" width="150" height="80"></canvas>

                    <!--Modal------------------------------------------------------->
                    <!-- core  -->
                    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
                    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

                   

                    <!-- JoeBLog js -->
                    <script src="assets/js/joeblog.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.js"></script>
                    <script>
                        const ctx = document.getElementById('myChart');

                        new Chart(ctx, {
                            type: "line",
                        data: {
                            labels: ['Agosto', 'Septiembre', 'Octubre','Noviembre', 'Diciembre', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
                                'Junio', 'Julio',
                            ],
                            datasets: [{
                                    label: 'Medida Brazos(cm)',
                                    data: [
                                        <?php $consulta_datos_logros=mysqli_query($conexion,"SELECT * FROM logros WHERE relacion_logro_cliente='$id'");
                                            while($datos_logros = mysqli_fetch_array($consulta_datos_logros))
                                            {
                                            ?>
                                                 '<?php echo $datos_logros['medida_brazo_logro'] ?>',
                                            <?php
                                            }
                                        
                                        ?>
                                    ]
                                },
                                {
                                    label: 'Medida Piernas(cm)',
                                    data: [
                                        <?php $consulta_datos_logros=mysqli_query($conexion,"SELECT * FROM logros WHERE relacion_logro_cliente='$id'");
                                            while($datos_logros = mysqli_fetch_array($consulta_datos_logros))
                                            {
                                            ?>
                                                 '<?php echo $datos_logros['medida_pierna_logro'] ?>',
                                            <?php
                                            }
                                        
                                        ?>
                                        ]
                                },
                                {
                                    label: 'Medida Cintura(cm)',
                                    data: [
                                        <?php $consulta_datos_logros=mysqli_query($conexion,"SELECT * FROM logros WHERE relacion_logro_cliente='$id'");
                                            while($datos_logros = mysqli_fetch_array($consulta_datos_logros))
                                            {
                                            ?>
                                                 '<?php echo $datos_logros['medida_cintura_logro'] ?>',
                                            <?php
                                            }
                                        
                                        ?>
                                    ]
                                },
                                {
                                    label: 'Peso kg',
                                    data: [
                                        <?php $consulta_datos_logros=mysqli_query($conexion,"SELECT * FROM logros WHERE relacion_logro_cliente='$id'");
                                            while($datos_logros = mysqli_fetch_array($consulta_datos_logros))
                                            {
                                            ?>
                                                 '<?php echo $datos_logros['peso_final'] ?>',
                                            <?php
                                            }
                                        
                                        ?>
                                    ]
                                }
                            ]
                        }
                        });
                    </script>

</body>

</html>
<?php

?>