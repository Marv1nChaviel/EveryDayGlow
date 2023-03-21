<?php
include 'conexion.php';
$numrep =$_POST['repeticiones'];
$numserie=$_POST['serie'];
$muscutrabajado=$_POST['musculo'];
$dificultad=$_POST['dificultad'];
$rela_clien_activi=$_POST['id_cliente'];
$rela_act_clien_entre=$_POST['id_entrenador'];
$nombre_actividad=$_POST['nombreactividad'];
$valor_fila =0;

$insertar_actividad = mysqli_query($conexion,"INSERT INTO actividades(nombre_actividad,inicio_actividad,relacion_actividad_entrenador) VALUES('$nombre_actividad','0000-00-00','$rela_act_clien_entre')");
$consulta_actividad = mysqli_query($conexion,"SELECT * FROM actividades order by id_actividad DESC LIMIT 1");
$datos_actividad = mysqli_fetch_array($consulta_actividad);
$dato_id_actividad = $datos_actividad['id_actividad'];

//$contar_filas = mysqli_query($conexion,"SELECT * FROM relacion_actividad_cliente order by id DESC LIMIT 1"); // contamos el numero de filas en la tabla





print_r($numrep.$numserie.$muscutrabajado.$dificultad.$dato_id_actividad.$rela_act_clien_entre);

/*$consulta_actividades_clientes = mysqli_query($conexion,"SELECT * FROM actividadesclientes ORDER BY id_actividad_cliente DESC LIMIT 1");
$datos_actividades_clientes = mysqli_fetch_array($consulta_actividades_clientes);
$ultimo_dato_id = $datos_actividades_clientes['id_actividad_cliente'];*/

/*$comando_relacion_actividad_cliente=mysqli_query($conexion,"INSERT INTO relacion_actividad_cliente(id_cliente) VALUES('$rela_clien_activi')");
$consulta_relacion_actividad_cliente=mysqli_query($conexion,"SELECT * FROM relacion_actividad_cliente");
$datos_relacion_actividad_cliente=mysqli_fetch_array($consulta_relacion_actividad_cliente); // el problema esta por aqui
$id_actividad = $datos_relacion_actividad_cliente['id_actividad'];      */                   // problema por aqui

$comando_actividad=mysqli_query($conexion,"INSERT INTO actividadesclientes(numero_repeticiones,numero_serie,musculo_trabajado,dificultad,relacion_actividadcliente_actividad,relacion_actividadesclientes_clientes ,relacion_actividadcliente_entrenador) 
VALUE('$numrep','$numserie','$muscutrabajado','$dificultad','$dato_id_actividad','$rela_clien_activi','$rela_act_clien_entre')");

if($comando_actividad){
    //print_r("Todo se inyecto");
    Header("Location: entrenador.php");
}else{
    //print_r("problemas ");
    print_r(mysqli_error($conexion));
    Header("Location: entrenador.php");
}


?>