<?php
    $host = "localhost";
    $database = "tiscphpdb01";
    $user = "root";
    $pass = "";
    $charset = "utf8";
    $port = "3306";

    try {
        $conn = new mysqli($host, $user, $pass, $database, $port);
        mysqli_set_charset($conn,$charset);
    }catch(trhowable $th){
        die("Atenção rolou um ERRO, cara! ".$th);
    }
