<?php 
session_start();
include 'conexion.php';
$id_usuario = $_SESSION['id_usuario'];
$consulta = mysqli_query($conexion,"SELECT * FROM usuarios WHERE id_usuario= $id_usuario");
$almacendatos = mysqli_fetch_array($consulta);

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
            <link rel="stylesheet" href="./css/style.css">
            <link rel="stylesheet" href="./assets/css/joeblog.css">
            <link rel="stylesheet" href="./assets/css/info-style.css">
            <link rel="stylesheet" href="./assets/css/user-style.css">
            <link rel="icon" href="./assets/imgs/icon.png">
            <link rel="shortcut icon" href="images/logo-login.png" type="image/x-icon">
            <link rel="stylesheet" href="./css/mi_cuenta.css">

            <style>
              @import url('https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre&display=swap');
            </style>

<!-- CSS only 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
-->
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
            <nav class="navbar custom-navbar navbar-expand-md navbar-light bg-primary1 sticky-top">
                <div class="container">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="entrenador.php">Principal</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="./cliente_cursos.php">Mis Cursos</a>
                            </li>
                        </ul>
                        <div class="navbar-nav ml-auto">
                            <li class="nav-item">
                            <a href="mi_cuenta.php" class="Cerrar-seccion ml-4 btn rounded btn-danger1 mt-1 btn-sm ">Mi cuenta</a>
                            <a href="salir.php" class="Cerrar-seccion ml-4 btn btn-primary rounded btn-warning mt-1 btn-sm ">Cerrar Sesion</a>
                            </li>
                        </div>
                    </div>
                </div>
            </nav>

<img class="photo-cuenta" src="./images/mi-cuenta.jpg" alt="">

<div class="table-title">
<center><h3>Mi Cuenta</h3></center>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left"></th>
<th class="text-left"></th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left">Nombre</td>
<td class="text-left"><?php echo $almacendatos['nombre']?></td>
</tr>
<tr>
<td class="text-left">Correo</td>
<td class="text-left"><?php echo $almacendatos['correo']?></td>
</tr>
<tr>
<td class="text-left">contraseña</td>
<td type="password" class="text-left">*********</td>
</tr>
<tr>
<td class="text-left">Nivel</td>
<td class="text-left"><?php echo $almacendatos['nivel']?></td>
</tr>

</tbody>
</table>


  
 <!-- scripts -->
 <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
            <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

            <!-- JoeBLog js -->
            <script src="./assets/js/joeblog.js"></script>

<!---scripts end --->