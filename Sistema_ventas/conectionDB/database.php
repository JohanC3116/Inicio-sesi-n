<?php

    $host = "aws-0-us-east-2.pooler.supabase.com";
    $port = "5432";
    $dbname = "postgres";
    $user = "postgres.stcbwzgggqqdfcmqkuyw";
    $password ="Yojan@3116#";

    $conn = pg_connect("
        host = $host
        port = $port
        dbname = $dbname
        user = $user
        password = $password
    ");

    if(!$conn){
        die("Conexion fallida: " . pg_last_error());
    } else {
        echo "Conexion exitosa";
    }

    pg_close();
?>