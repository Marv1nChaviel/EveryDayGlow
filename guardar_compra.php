<?php

//$directorio = __DIR__;
/*header('Content-Type: application/json');
$directorio = __DIR__;
//------------- incluimos el otro archivo php


*/
//print_r($preciocurso);


class guardardatos
{
    

    public function crear($titulocurso)
    {
        //--- importando base de datos------------
        include 'conexion.php';
        //----creando consulta DB--------------------
        $consulta = mysqli_query($conexion, "SELECT * FROM cursos_disponibles WHERE titulo='$titulocurso'");
        $datos = mysqli_fetch_array($consulta);

        //---- trayendo datos almacenados de las cookies
        $nombre = $_COOKIE['nombre'];
        $id_usuario = $_COOKIE['id_usuario'];


        $datos = array('Curso_Pago' => ['id_cliente' => $id_usuario, 'nombre' => $nombre, 'titulo_curso' => $titulocurso, 'id_curso' => $datos['id_curso']]);
        $resultado = json_encode($datos);
        print_r($resultado);

        $directorio = __DIR__;
        $micarpeta = __DIR__ . '/json/' . $id_usuario;
        if (!file_exists($micarpeta)) {
            mkdir($micarpeta, 0777, true);
            //-------Crear archivo json-----------
            $creador = fopen($directorio . "/json/" . $id_usuario . "/" . $titulocurso . ".json", "w+");
            fwrite($creador, $resultado);
            fclose($creador);
        } else {
            //-------Crear archivo json-----------
            $creador = fopen($directorio . "/json/" . $id_usuario . "/" . $titulocurso . ".json", "w+");
            fwrite($creador, $resultado);
            fclose($creador);
        }
        mysqli_close($conexion);   //se cierra conexion con la base de datos
    }
    public function mostrarseccion()
    {
    }
    public function cursos_disponibles_crear()
    {
        $directorio = __DIR__;
        include 'conexion.php'; //conexion base de datos
        $validad = mysqli_query($conexion, "SELECT * FROM cursos_disponibles"); //validando tablas 
        $numfilas = mysqli_num_rows($validad); // almacenando numero de tablas en numfilas

        if ($numfilas > 0) { //comparando si numfilas es mayor a 0 si existen filas en la tabla
            
            for ($i = 0; $i < $numfilas; $i++) { //que repita la accion por cada fila
                $datos = mysqli_fetch_array($validad); // que almacene los datos por cada fila 
                $jsoncursos_disponibles = array('id_curso' => $datos['id_curso'], 'titulo' => $datos['titulo'], 'imagen' => $datos['imagen'], 'texto2' => $datos['texto_2'], 'texto3' => $datos['texto_3'], 'texto4' => $datos['texto_4'], 'pagina' => $datos['pagina'], 'relacion_entrenadores_curso' => $datos['relacion_entrenadores_curso']);
                $resultado = json_encode($jsoncursos_disponibles);
               
                //-------Crear archivo json-----------
                $creador = fopen($directorio . "/json/cursos_disponibles/". $datos['titulo'] . ".json", "w+");
                fwrite($creador, $resultado);
                fclose($creador);
            }
           // $gdatos = new guardardatos();
           // $gdatos->guardar_relacion_cliente_entrenador($datos['relacion_entrenadores_curso']);
        }
    }
    public function guardarcursopagodb($nombrecurso,$costocurso){ // insertar datos de el archivo captura compra enviados a este archivo
        include 'conexion.php';
        $id_usuario = $_COOKIE['id_usuario'];
        $obtener_codigo_cliente  = mysqli_query($conexion,"SELECT * FROM clientes WHERE relacion_usuario_cliente='$id_usuario'"); // obtener codigo del clinete con relacion usuario
        $codigo_cliente = mysqli_fetch_array($obtener_codigo_cliente); // almacenando la informacion de la consulta en un array
        $id_cliente = $codigo_cliente['id_cliente']; 

        $insertar = mysqli_query($conexion,"INSERT INTO cursos_pagados(nombre_curso,costo_curso,id_relacion_cliente) VALUES('$nombrecurso','$costocurso','$id_cliente')");
        $consultausuariodisponibles =mysqli_query($conexion,"SELECT * FROM cursos_disponibles WHERE titulo='$nombrecurso'");
        $datos = mysqli_fetch_array($consultausuariodisponibles);
        $id_entrenador = $datos['relacion_entrenadores_curso'];
        $id_usuario = $_COOKIE['id_usuario'];
        $obtener_codigo_cliente  = mysqli_query($conexion,"SELECT * FROM clientes WHERE relacion_usuario_cliente='$id_usuario'"); // obtener codigo del clinete con relacion usuario
        $codigo_cliente = mysqli_fetch_array($obtener_codigo_cliente); // almacenando la informacion de la consulta en un array
        $id_cliente = $codigo_cliente['id_cliente'];
        $
        $insertar_relacion_cliente_entrenador = mysqli_query($conexion,"INSERT INTO relacion_cliente_entrenador(id_cliente,id_entrenador) VALUES('$id_cliente','$id_entrenador')");
        print_r(mysqli_error($conexion));
        print_r($id_entrenador.'El ide de entrenador es este');
        
        //guardar_relacion_cliente_entrenador($id_entrenador);
        if($insertar){
            print_r("insertar datos  listo");
            
        }else{
            print_r("insertar datos con problemas codigo cliente es");

            print_r(mysqli_error($conexion));

        }
       


    }
     public function guardar_relacion_cliente_entrenador($id_entrenador){
        include 'conexion.php';
        
        
        

    }
    public function eliminar_curso($id_usuario,$id_entrenador,$nombre_curso,$id_cliente){
       

    }
}

/*
//-----guardando formato json-------------
       
$datos = array('Curso_Pago'=>['id_cliente' => '', 'nombre' => '', 'id_curso' => '']);
$resultado = json_encode($datos);
print_r($resultado);

//-------Crear archivo json-----------
$creador = fopen($directorio."\json\"".$nombre.".json","x+");
fwrite($creador,$resultado);
fclose($creador);

//------ Leer json --------------------------
/* $lector = fopen($directorio."\json\Cursos.json","r+");
$lectura = json_decode($lector);
print_r($lectura);
*/
?>