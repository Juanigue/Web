<?php
    //siempre que trabajo con sesiones debo inicializarla
    session_start();
    session_destroy();
    header("location: ../login.php");
?>