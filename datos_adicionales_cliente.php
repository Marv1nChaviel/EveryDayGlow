<?php
include 'conexion.php';

session_start();
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$edad = $_POST['edad'];
$patologia = $_POST['patologia'];
$piernas = $_POST['m_piernas'];
$brazos = $_POST['m_brazos'];
$cintura = $_POST['m_cintura'];
$id_usuario = $_SESSION['id_usuario'];

//----------consulta en la tabla usuario para obtener la relacion cliente/usuario
$id_usuario = $_COOKIE['id_usuario'];
$obtener_codigo_cliente  = mysqli_query($conexion, "SELECT * FROM clientes WHERE relacion_usuario_cliente='$id_usuario'"); // obtener codigo del clinete con relacion usuario
$codigo_cliente = mysqli_fetch_array($obtener_codigo_cliente); // almacenando la informacion de la consulta en un array
$id_cliente = $codigo_cliente['id_cliente']; // almacena en la variable $id_cliente los datos de la db de la columna id cliente

$insertarformulario = "INSERT INTO datos_opcionales_cliente(peso_cliente,altura_cliente,edad_cliente,patologia_cliente,id_relacion_clientes_datos,medida_pierna_cliente,medida_brazo_cliente,medida_cintura_cliente)
 VALUE('$peso','$altura','$edad','$patologia','$id_cliente','$piernas','$brazos','$cintura')";

$ejecutar = mysqli_query($conexion, $insertarformulario);

$consulta_logros=mysqli_query($conexion,"INSERT INTO logros(peso_final,	medida_pierna_logro,medida_brazo_logro,medida_cintura_logro,relacion_logro_cliente) 
VALUES('$peso','$piernas','$brazos','$cintura','$id_cliente')");

if ($ejecutar && $consulta_logros) {
    echo '
<script>
alert("Datos enviados con exito ");
window.location ="./cliente.php";
</script>
';
} else {
    print_r("datos no enviados");
    print_r("datos obtenedinos post" . $peso . $altura . $edad . $patologia .$piernas.$brazos.$cintura);
    print_r(mysqli_error($conexion));
}
