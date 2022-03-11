<?php
    include 'conexionBE.php';

    $nombre_completo=$_POST['nombre_completo'];
    $email=$_POST['email'];
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    $crypt= hash('sha512', $contraseña); //Encriptado de clave

    $query="INSERT INTO usuarios(nombre_completo, email, usuario, contraseña) VALUES ('$nombre_completo','$email','$usuario','$contraseña')";

    //Verificar que el correo no se repita en la base de datos
    $verificarCorreo = mysqli_query($conexionBE, "SELECT * FROM usuarios WHERE email='$email' ");
    if(mysqli_num_rows($verificarCorreo) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro");
                window.location = "../login.php";
            </script>        
        ';
        exit(); //termina el script actual y sale
    }
    //Verificar que el usuario no se repita en la base de datos
    $verificarUsuario = mysqli_query($conexionBE, "SELECT * FROM usuarios WHERE usuario='$usuario' ");
    if(mysqli_num_rows($verificarUsuario) > 0){
        echo '
            <script>
                alert("Este nombre de usuario ya esta registrado, intenta con otro");
                window.location = "../login.php";
            </script>        
        ';
        exit(); 
    }

    $exe=mysqli_query($conexionBE, $query);

    if($exe){
        echo '
            <script>
                alert("Registrado Correctamente");
                window.location="../index.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Error! Volver a intentar");
                window.location="../login.php";
            </script>
             ';
    }
    mysqli_close($conexionBE);
?>