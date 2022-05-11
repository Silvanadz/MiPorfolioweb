<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

     session_star();
     if(isset($_SESSION['u_email'])){
         echo "Sesion exitosa Bienvenido";
         echo $_SESSION['u_email'];
         echo "<a href= 'cerrar_sesion.php'> Cerrar sesion </a>";
         echo "Aqui se coloca toda la informacion que se requira";
     }
     else{
         header("Location: index.html");
     }
      

    ?>

</body>
</html>