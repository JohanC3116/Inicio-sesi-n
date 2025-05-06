<?php

    $host = "aws-0-us-east-2.pooler.supabase.com";
    $port = "6543";
    $nombre_BD ="postgres";
    $usuario = "postgres.ifhzjvuxghbvwbqidevr";
    $contraseña_BD = "yojan3116";

    $conexion_BD = pg_connect("
        host = $host
        port = $ports
        nombre_BD = $nombre_BD
        usuario = $usuario
        contraseña_BD = $contraseña_BD "
    );

    if(!$conexion_BD){
        die ("Error con la conexion a la BD". preg_last_error());
    } else {
        echo "Conexion exitosa con la BD";
    }

    pg_close();

?>