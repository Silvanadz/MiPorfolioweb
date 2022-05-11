<?php
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "amelin";
    $dbname = "arg-pro";

    $conectar = mysqli_connect ($hostname, $usuariodb, $passworddb, $dbname);
    return $conectar;
}








?>