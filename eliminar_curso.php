<?php

include 'conexion.php';
$directorio = __DIR__;
$id_usuario = $_COOKIE['id_usuario'];
$titulo_curso = $_GET['titulocurso'];
//print_r($titulo_curso . $id_usuario);
$obtener_codigo_cliente  = mysqli_query($conexion, "SELECT * FROM clientes WHERE relacion_usuario_cliente='$id_usuario'"); // obtener codigo del clinete con relacion usuario
$codigo_cliente = mysqli_fetch_array($obtener_codigo_cliente); // almacenando la informacion de la consulta en un array
$id_cliente = $codigo_cliente['id_cliente'];
$consulta_eliminar_cursos_pagados = mysqli_query($conexion,"DELETE FROM cursos_pagados WHERE id_relacion_cliente='$id_cliente' AND nombre_curso='$titulo_curso'");
$consulta_cursos_disponibles = mysqli_query($conexion,"SELECT * FROM cursos_disponibles WHERE titulo='$titulo_curso'");
$datos_cursos_disponibles = mysqli_fetch_array($consulta_cursos_disponibles);
$id_entrenador= $datos_cursos_disponibles['relacion_entrenadores_curso'];
$consulta_eliminar_relacion_cliente_entrenador = mysqli_query($conexion,"DELETE FROM relacion_cliente_entrenador WHERE id_cliente='$id_cliente' AND id_entrenador='$id_entrenador'");

unlink($directorio . "/json/". $id_usuario ."/".$titulo_curso. ".json");
header("Location: cliente_cursos.php"); 
if(!$consulta_eliminar_cursos_pagados){
    print_r($codigo_cliente);
}
?>