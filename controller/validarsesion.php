<?php
    if(!isset($_SESSION['id_usuario']) || !isset($_SESSION['tipo_usuario']))
    {
        header("Location: ../index.html");
    }
?>