<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location : ../bienvenido.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teks | Cuenta</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
    <div id="header-content"> </div>
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script>$.get("navbar.html", function (data) {
    $("#header-content").replaceWith(data);
    });
    </script>
<body class="formPage">
    <div class="contenedorLogin">
        <div class="parteTrasera">
            <div class="parteTraseraLogin">
                <h3>Ya tienes una cuenta?</h3>
                <p>Inicia sesion para entrar en la pagina</p>
                <button id="btnLogin">Iniciar Sesion</button>
            </div>
            <div class="parteTraseraRegistro">
                <h3>No tienes una cuenta?</h3>
                <p>Registrate para crear una cuenta</p>
                <button id="btnRegistro">Registrarse</button>
            </div>
        </div>
            <!--Formulario de Login y registro-->
        <div class="contenedorLoginRegistro">
                <!--Login-->
            <form action="php/loginUsuarioBE.php" method="POST" class="formularioLogin">
                <h2>Iniciar Sesion</h2>
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="text" placeholder="Contraseña" name="contraseña">
                <button>Entrar</button>
            </form>
            <!--Registro-->
            <!--Post para almacenar estos valores en variables de php-->
            <form action="php/registroUsuarioBE.php" method="POST" class="formularioRegistro">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                <input type="text" placeholder="Email" name="email">
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="text" placeholder="Contraseña" name="contraseña">
                <button>Registrarse</button>
            </form>
        </div>
    </div>
<script src="assets/js/resize.js"></script>
</body>
</html>