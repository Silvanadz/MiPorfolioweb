<?php
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "";
    $dbname = "";

    $conectar = mysqli_connect ($hostname, $usuariodb, $passworddb, $dbname);
    return $conectsar;
}








?>