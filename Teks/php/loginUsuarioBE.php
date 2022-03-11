<?php

    session_start();
    include 'conexionBE.php';

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $contraseña = hash('sha512' , $contraseña);

    $validar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and contraseña = '$contraseña'");

    if(mysqli_num_rows($validar) > 0){
        $_SESSION['usuario'] = $usuario;
        header("location: ../bievenido.php");
        exit();
    }else{
        echo '
        <script>
            alert("Usuario no encontrado, verfique los datos introducidos");
            window.location = "../login.php";
        </script>
        '
        exit();
    }
?>