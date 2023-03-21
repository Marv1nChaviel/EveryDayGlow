<?php

include 'conexion.php'; //incluyo el archivo conexion.php


session_start();

$correo = $_POST['correo'];
$contra = $_POST['contraseña'];


$validad_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' AND contrasena ='$contra'");


if(mysqli_num_rows($validad_login) > 0){         // verifica si existe una columna con ambos datos correctos 

$datos = mysqli_fetch_array($validad_login);    // combierte los datos obtenidos en la consulta en un array para poder obtener datos por separado

$id_usuario = $datos['id_usuario'];

$obtener_codigo_cliente  = mysqli_query($conexion,"SELECT * FROM clientes WHERE relacion_usuario_cliente='$id_usuario'"); // obtener codigo del clinete con relacion usuario
$codigo_cliente = mysqli_fetch_array($obtener_codigo_cliente); // almacenando la informacion de la consulta en un array

$obtener_codigo_entrenador = mysqli_query($conexion,"SELECT * FROM entrenadores WHERE relacion_usuario_entrenador='$id_usuario'"); // obtener codigo entrenador relacion usuario

$codigo_entrenador = mysqli_fetch_array($obtener_codigo_entrenador); //almacenando la informacion de la consulta en un array


if($datos['nivel'] == "cliente"){              // verifica el tipo de usuario cliente o entrenador

    $nombrecliente = $datos['nombre'];         // crea una variable $nombreusuario y le pasa los datos ya con seccion iniciada el nombre del usuario

    //$id_usuario = $datos['id_usuario'];

    $_SESSION['id_usuario'] = $id_usuario;

    $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");   // registro para llevar el tiempo de cuando inicio seccion 
    
    setcookie("id_cliente",$codigo_cliente['id_cliente']);
    
    setcookie("nombre",$nombrecliente);        // almacenar en cookie el nombre del usuario que inicio seccion
    
    setcookie("id_usuario",$id_usuario);       //almacenar en cookie el id del usuario que inicio
    
    $nivel = $datos['nivel'];                 

    $_SESSION['nombre'] = $nombrecliente;      //indica que la seccion actual obtendra el nombre obtenido anteriormente

    $_SESSION['nivel'] = $nivel;

    header("Location: cliente.php");            //envia al cliente a su pagina de inicio
    
 } else if($datos['nivel'] == "entrenador"){     // verifica el tipo de usuario cliente o entrenador
   
    $nombrecliente = $datos['nombre'];         // crea una variable $nombreusuario y le pasa los datos ya con seccion iniciada el nombre del usuario

    $nivel = $datos['nivel'];      

    //$id_usuario = $datos['id_usuario'];

    $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");   // registro para llevar el tiempo de cuando inicio seccion 

    $_SESSION['id_usuario'] = $id_usuario; 

    setcookie("id_entrenador",$codigo_entrenador['id_entrenador']);

    setcookie("nombre",$nombrecliente);        // almacenar en cookie el nombre del usuario que inicio seccion
    
    setcookie("id_usuario",$id_usuario);       //almacenar en cookie el id del usuario que inicio           

    $_SESSION['nombre'] = $nombrecliente;      //indica que la seccion actual obtendra el nombre obtenido anteriormente

    $_SESSION['nivel'] = $nivel;

    header("Location: entrenador.php");                //envia al entrenador a su pagina de inicio
    
 
 }
}else{                                            //cuyo caso los datos de inicio no coincidan con ninguno mandara un error 
    $_SESSION['nombre'] = null;      

    $_SESSION['nivel'] = null;

    $datos = null;
    echo
             '
             <script>
            alert("Error Contraseña o Correo incorrectos!");
            window.location ="./login.php";
             </script>
              '; 
 }
mysqli_close($conexion);                      /// se cierra la conexion con la base de datos
?>