<?php
    $conexion= new mysqli('localhost','id21111715_nono','M@yos2003','id21111715_noe');
    if($conexion){
        echo "CONEXION EXITOSA";
    }else {
        echo "NO FUNCIONO LA CONEXION";
    }
?>