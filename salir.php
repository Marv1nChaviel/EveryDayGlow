<?php
    session_start();
    setcookie("id_cliente","");
    
    setcookie("nombre","");
    
    setcookie("id_usuario","");  

    setcookie("id_entrenador","");

    session_destroy();

    header('Location: index.php');


?>