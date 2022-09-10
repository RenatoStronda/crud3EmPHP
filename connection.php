<?php
    $hostname = "localhost";//127.0.0.1
    $database = "login";
    $user = "root";
    $password = "usbw";

    $conn = mysqli_connect($hostname, $user, $password);

    if (!$conn)
    {
        echo "Falha Ao Conectar Com O Servidor!";
    }
    else
    {
        mysqli_select_db($conn, $database);
        //echo "Conexão Efetuada Com Sucesso!";
    }
?>