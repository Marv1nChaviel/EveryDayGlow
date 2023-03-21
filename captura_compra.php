<?php
include 'conexion.php';
include 'guardar_compra.php';

$json = file_get_contents('php://input');
$datos = json_decode($json, true);

//print_r($datos);


//print_r($estatus);


if (is_array($datos)) {
        $id_transsacion = $datos['detalles']['id'];
        $estatus = $datos['detalles']['status'];
        $preciocurso = $datos['detalles']['purchase_units'][0]['amount']['value'];
        $titulo = $datos['detalles']['purchase_units'][0]['description'];
        //print($titulo);
        $datos = new guardardatos();
        $datos->crear($titulo);
        $datos->cursos_disponibles_crear();
        $datos->guardarcursopagodb($titulo,$preciocurso);
        
       
        //print_r($preciocurso);

        

        
}


?>