<?php
require_once('modelo/perfilModel.php');
class SesionController {
    public static function iniciarSesion() {
        session_start(); // Inicia la sesión

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $correo = $_POST['Correo'];
            $contrasena = $_POST['Contrasena'];

            // Usar el modelo para validar las credenciales
            require_once('modelo/perfilModel.php');
            $usuario = PerfilModel::obtenerEmpleadoPorCredenciales($correo, $contrasena);

            if ($usuario) {
                // Guardar datos en la sesión
                $_SESSION['Nombre'] = $usuario['Nombre'];
                $_SESSION['Apellido'] = $usuario['Apellido'];
                $_SESSION['Tipo'] = $usuario['Tipo'];
                $_SESSION['CURP'] = $usuario['CURP'];
                $_SESSION['Genero'] = $usuario['Genero'];
                $_SESSION['Telefono'] = $usuario['Telefono'];
                $_SESSION['Correo'] = $usuario['Correo'];
                $_SESSION['idUsuario'] = $usuario['idEmpleado']; // o cualquier otro identificador

                // Redirigir al área protegida
                header('Location: index.php?s=perfil');
                exit;
            } else {
                // Redirigir con un error
                header('Location: index.php?s=sesion&error=1');
                exit;
            }
        }
    }
    public static function cerrarSesion() {
        session_start();
        session_unset(); // Eliminar variables de sesión
        session_destroy(); // Destruir la sesión
        header("location: index.php?s=sesion"); // Redirige al login
        exit();
    }
    public static function sesion(){
        require_once("vista/sesion.php");
    }
    public static function perfil(){
        require_once('vista/perfiles/perfil.php');
    }
}
?>