<?php  
session_start();

    $email =$_POST['email'];
    $password =$_POST['password'];
    include("conexion.php");
    $proceso = mysqli_query($conexion, "SELECT * FROM email WHERE email='$email'AND password= '$password'");
    if($resultado =mysqli_fech_array($proceso)){
        $_SESSION['u_email'] = $email;
        header("Location: iniciosesion.php");
    }
    else{
        header("Location: index.html");
    }





?>