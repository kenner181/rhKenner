<?php

$conexion = mysqli_connect("localhost", "root", "", "rh");

if ($conexion) {
    echo '
    <script>
        alert("usted se a conectado a la base de dadtos de app");
    </script>
        ';
} else {
    echo '
    <script>
        alert(" no tamos activos papi");
    </script>
        ';
}
?>