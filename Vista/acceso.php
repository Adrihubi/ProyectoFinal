<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    $contrasena_correcta = "uno";

    if ($password === $contrasena_correcta) {
        // Contraseña correcta, redirigir a otra página o realizar alguna acción
        header("location: index.php?e=emplearse");
        exit();
    } else {
        // Contraseña incorrecta, mostrar un mensaje de error
        echo "Contraseña incorrecta";
    }
}
?>