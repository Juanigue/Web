<?php
    session_start();

    if(!isset($_SESSION['usuario'])){ //! significa no, isset es existe
        echo '
            <script>
                alert("Por favor debes iniciar sesion");
                window.location = "../login.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teks | Sesion Iniciada</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
 <body>
     <h1>Bienvenido</h1>
     <a href="php/cerrarSesion.php">Cerrar Sesion</a>
 </body>
</html>