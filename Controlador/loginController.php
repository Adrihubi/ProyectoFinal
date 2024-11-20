<?php
require_once('modelo/usuarioModel.php');
class LoginController {
    public static function iniciarSesion() {
        session_start(); // Inicia la sesión

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $correo = $_POST['Correo'];
            $contrasena = $_POST['Contrasena'];

            // Usar el modelo para validar las credenciales
            require_once('modelo/UsuarioModel.php');
            $usuario = UsuarioModel::obtenerUsuarioPorCredenciales($correo, $contrasena);

            if ($usuario) {
                // Guardar datos en la sesión
                $_SESSION['Nombre'] = $usuario['Nombre'];
                $_SESSION['Apellido'] = $usuario['Apellido'];
                $_SESSION['Correo'] = $usuario['Correo'];
                $_SESSION['CURP'] = $usuario['CURP'];
                $_SESSION['idUsuario'] = $usuario['idCliente']; // o cualquier otro identificador

                // Redirigir al área protegida
                header('Location: index.php?u=mostrarusuarios');
                exit;
            } else {
                // Redirigir con un error
                header('Location: index.php?u=login&error=1');
                exit;
            }
        }
    }
    public static function cerrarSesion() {
        session_start();
        session_unset(); // Eliminar variables de sesión
        session_destroy(); // Destruir la sesión
        header("location: index.php?u=login"); // Redirige al login
        exit();
    }
    public static function login(){
        require_once("vista/login.php");
    }
    public static function mostrarusuarios(){
        require_once('vista/usuarios/mostrarusuarios.php');
    }
    public static function apartar(){
        require_once('vista/apartar.php');
    }
}
?>