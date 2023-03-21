<?php
include 'conexion.php';
$nombreusu = $_POST['nombre'];
$apellidousu = $_POST['apellido'];
$correousu = $_POST['correo'];
$contrausu = $_POST['contra'];
$nivelusu = $_POST['nivel'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];



$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correousu'");

if (mysqli_num_rows($verificar_correo) > 0)          //verificando si el correo se repite en alguna columna y su valor es mayor a 0       
{
    echo
    '
             <script>
            alert("Este correo ya esta registrado intente otro por favor!");
            window.location ="./login.php";
             </script>
              ';
    //cortando toda ejecucion si el correo se repite
    exit();
}
///---------------------------------------------------------------------------------------------------------------------


///--------------------------------------------------------------------------------------------------------------------------
//insertar datos obtenidos de el formulario a un abase de datos 
$insertarusuario = "INSERT INTO usuarios(nombre,apellido,correo,contrasena,nivel)
 VALUE('$nombreusu','$apellidousu','$correousu','$contrausu','$nivelusu')";

$ejecutar = mysqli_query($conexion, $insertarusuario);

if ($ejecutar) {

    $validad_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correousu'");
    $datos = mysqli_fetch_array($validad_login);

    if ($datos['nivel'] == "cliente") {              // verifica el tipo de usuario cliente o entrenador
        
        //insertar datos cliente
        $id_usuario = $datos['id_usuario'];
        $insertar_cliente = "INSERT INTO clientes(nombre_cliente,apellido_cliente,relacion_usuario_cliente) 
VALUE('$nombreusu','$apellidousu','$id_usuario')";
        $ejecutar = mysqli_query($conexion, $insertar_cliente);

        echo '
<script>
alert("Usuario registrado con exito!! inicie seccion para continuar ");
window.location ="./login.php";
</script>
';
    } else if ($datos['nivel'] == "entrenador") {     // verifica el tipo de usuario cliente o entrenador

        //insertar datos entrenador 
        $id_usuario = $datos['id_usuario'];
        $insertar_entrenador = "INSERT INTO entrenadores(nombre_entrenador,apellido_entrenador,fecha_nacimiento_entrenador,relacion_usuario_entrenador) 
    VALUE('$nombreusu','$apellidousu','2000-10-20','$id_usuario')";
        $ejecutar = mysqli_query($conexion, $insertar_entrenador);

        echo '
    <script>
    alert("Usuario registrado con exito!! inicie seccion para continuar ");
    window.location ="./login.php";
    </script>
    ';
    }
} else {
    echo '
    <script>
    alert("Usuario no registrado!!");
    window.location ="./login.php";
    </script>
    ';
}

