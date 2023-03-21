
 <?php               

include 'conexion.php';
//----------consulta en la tabla usuario para obtener la relacion cliente/usuario
$id_usuario = $_COOKIE['id_usuario'];
$obtener_codigo_cliente  = mysqli_query($conexion, "SELECT * FROM clientes WHERE relacion_usuario_cliente='$id_usuario'"); // obtener codigo del clinete con relacion usuario
$codigo_cliente = mysqli_fetch_array($obtener_codigo_cliente); // almacenando la informacion de la consulta en un array
$id_cliente = $codigo_cliente['id_cliente']; // almacena en la variable $id_cliente los datos de la db de la columna id cliente
$consulta = mysqli_query($conexion, "SELECT * FROM datos_opcionales_Cliente WHERE id_Relacion_clientes_datos='$id_cliente'");
$consulta_curso_inscrito=mysqli_query($conexion,"SELECT * FROM cursos_pagados WHERE id_relacion_cliente='$id_cliente' AND nombre_curso='Yoga'");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JoeBLog landing page.">
    <meta name="author" content="Devcrud">
    <title>EveryDay Glow</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="assets/css/info-style.css">
    <link rel="icon" href="/public_html/assets/imgs/icon.png">

    <link rel="shortcut icon" href="images/logo-login.png" type="image/x-icon">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- page First Navigation -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/logo-dark.png" alt="">
            </a>
            <div class="socials">
                <a href="javascript:void(0)"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)"><i class="ti-youtube"></i></a>
            </div>
        </div>
    </nav>
    <!-- End Of First Navigation -->

    <!-- Page Second Navigation -->
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
                        <a class="nav-link" href="#info">informacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profe">Comprar</a>
                    </li>
                </ul>
                <div class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a href="./login.php" class="Cerrar-seccion ml-4 btn btn-primary rounded btn-danger mt-1 btn-sm ">Mi cuenta</a>
                        <a href="salir.php" class="Cerrar-seccion ml-4 btn btn-primary rounded btn-warning mt-1 btn-sm ">Cerrar Sesion</a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Of Page Second Navigation -->

    <!-- page-header-service3 -->
    <header class="page-header-service3">
        <center>
        <video width="1000" height="500" controls class="video-respo" class="video-respo">
        <source src="./videos/Yoga/videos/intro.mp4" type="video/mp4">
            </video>
        </center>
    </header>
    <!-- end of page header -->

    <div class="container">
        <hr>
        <br>
        <div id="info" class="page-container">
            <div class="page-content">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="card-title">YOGA</h2>
                        <small class="small text-muted">Instructor:
                            <span class="px-2"></span>
                            <a href="#" class="text-muted">Xuan Lan</a>
                        </small>
                    </div>
                    <div class="card-body">
                        <div class="blog-media">
                           
                        </div>
                        <p class="my-3">El yoga es una práctica que conecta el cuerpo, la respiración y la mente. ç
                            Esta práctica utiliza posturas físicas, ejercicios de respiración y meditación para mejorar la salud general.
                            El yoga se desarrolló como una práctica espiritual hace miles de años. Hoy en día la mayoría de las personas
                            en occidente hace yoga como ejercicio y para reducir el estrés. </p>
                        <hr>
                        <p>BENEFICIOS:

                            Reducir su presión arterial y su frecuencia cardíaca,
                            Ayudarle a relajarse,
                            Mejorar su confianza en usted mismo,
                            Reducir el estrés,
                            Mejorar su coordinación,
                            Mejorar su concentración,
                            Ayudarle a dormir mejor,
                            Ayudar a la digestión.</p>
                    </div>

                    <div class="card-footer d-flex justify-content-between align-items-center flex-basis-0">
                        <button class="btn btn-primary circle-35 mr-4"><i class="ti-back-right"></i></button>
                        <a href="#" class="text-dark small text-muted">Por: Xuan Lan </a>
                    </div>
                </div>
                <hr>


                <div id="profe" class="row">
                    <div class="col-lg-6">
                        <div class="card text-center mb-5">
                            <div class="card-header p-0">
                                <div class="blog-media">
                                    <img src="assets/imgs/yoga-trainer.png" alt="" style="width: 300px;">
                                    <a href="#" class="badge badge-primary">#Instructora de YOGA</a>
                                </div>
                            </div>
                            <div class="card-body px-0">
                                <h5 class="card-title mb-2">Xuan Lan</h5>
                                <small class="small text-muted">12 Años de Experiencia
                                    <span class="px-2">-</span>
                                    <a href="#" class="text-muted">Instructora de Yoga</a>
                                </small>
                                <p class="my-2">Mi nombre es Xuan Lan, instructora de yoga por mas de 12 años,
                                    ¿Te has propuesto aprender yoga en casa? Te presento la lista de reproducción definitiva para principiantes de yoga.
                                    Te acompañaré en tu iniciación al yoga con prácticas de yoga online en español adaptadas a tus necesidades para que
                                    puedas disfrutar al máximo de este camino de bienestar físico, mental y emocional. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    
                    <?php 
                 if(mysqli_num_rows($consulta) > 0){
                    if(mysqli_num_rows($consulta_curso_inscrito)>0){
                        echo '<h5>Ya inscribistes este curso por favor busca en listado mis cursos.</h5>';
                    }else{
                ?>
                <div class="row text-center">
                    <h3>!!!Suscribase ahora a esta excelente clase ¡¡¡ </h3>
                </div>
                 <!--Paypal boton-->
                 <div id="smart-button-container">
                            <div style="text-align: center;">
                                <div id="paypal-button-container"></div>
                            </div>
                        </div>
                        <!--Paypal boton-->
                    <?php
                    } 
                    }else{
                        echo '<h3 style="color:red">Necesitar registrar tus datos en la pagina principal, en barra caracteristicas para acceder a comprar su curso </h3>';
                    }
                    ?>
                        
                    
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="instagram-wrapper mt-5">
        <div class="ig-id">
            <a href="javascript:void(0)">Siguenos @EveryDayGlow en Instagram</a>
        </div>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-1.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 64
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-2.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 12
                </span>
                <span>
                    <i class="ti-comment"></i> 54
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-3.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 251
                </span>
                <span>
                    <i class="ti-comment"></i> 22
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-4.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 232
                </span>
                <span>
                    <i class="ti-comment"></i> 124
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-5.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 231
                </span>
                <span>
                    <i class="ti-comment"></i> 112
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-6.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 233
                </span>
                <span>
                    <i class="ti-comment"></i> 122
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
                </script>EveryDayGlow<a href="#" class="text-muted font-weight-bold" target="_blank"></a> All rights reserved </p>
        </div>
    </footer>
    <!-- End of Page Footer -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- JoeBLog js -->
    <script src="assets/js/joeblog.js"></script>

    <!--Id de cliente paypal despues de client-id= y antes de &currency=USD-->
    <script src="https://www.paypal.com/sdk/js?client-id=AQkgoQ8kXXABh5HjWgw13gaEXHWjp8aEJhI7fL3g0M__isowhgxLaja5uCVvCAu2wMPZRryGX3CD6mvW&currency=USD" data-sdk-integration-source="button-factory"></script>


    <script>
        ///Paypal accion botones-------------------------------------------------------------
        function initPayPalButton() {
            paypal.Buttons({
                style: {
                    shape: 'pill',
                    color: 'gold',
                    layout: 'horizontal',
                    label: 'buynow',

                },

                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            "description": "Yoga",
                            "amount": {
                                "currency_code": "USD",
                                "value": 40
                            }
                        }]
                    });
                },

                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(detalles) {

                        // Full available details
                        //console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                        // Show a success message within this page, e.g.
                        const element = document.getElementById('paypal-button-container');
                        element.innerHTML = '';
                        element.innerHTML = '<h3>Thank you for your payment!</h3>';

                        // Or go to another URL:  actions.redirect('thank_you.html');
                        let url ='./captura_compra.php';
                        return fetch(url,{
                            method:'post',
                            headers:{
                                'content-type':'application/json'
                            },
                            body: JSON.stringify({
                                detalles: detalles
                            })
                        });
                    });
                },

                onError: function(err) {
                    console.log(err);
                }
            }).render('#paypal-button-container');
        }
        initPayPalButton();
        ////paypal accion botones------------------------------------------------------------------
    </script>

</body>

</html>