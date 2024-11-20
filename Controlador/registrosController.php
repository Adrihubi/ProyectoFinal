<?php
require_once('modelo/registroModel.php');
class RegistrosController{
    private $registroModel;
    public function __construct(){
        $this->registroModel = new RegistroModel();
    }
    public static function mostrarregistros(){
        $modelregistro = new RegistroModel();
        $datos=$modelregistro->mostrarregistros();  
        require_once('vista/registros/mostrarregistros.php');
    }
    public static function registrarse(){
        require_once('vista/registrar.php');
    }
    public static function guardar(){
        $nombre=$_REQUEST['nombre'];
        $apellido=$_REQUEST['apellido'];
        $telefono=$_REQUEST['telefono'];
        $correo=$_REQUEST['correo'];
        $curp=$_REQUEST['curp'];
        $password=$_REQUEST['contraseña'];
        $modelregistro = new RegistroModel();
        $modelregistro->guardarCliente($nombre, $apellido, $telefono, $correo, $curp, $password);
        header("location: index.php?i=Chiapas");
    }
    public static function editar(){
        $id=$_REQUEST['id'];
        $modelregistro = new RegistroModel();
        $datos=$modelregistro->obtenerClienteId($id);
        require_once('vista/registros/editar.php');
    }
    public static function actualizar(){
        $id=$_REQUEST['id'];
        $nombre=$_REQUEST['nombre'];
        $apellido=$_REQUEST['apellido'];
        $telefono=$_REQUEST['telefono'];
        $correo=$_REQUEST['correo'];
        $curp=$_REQUEST['curp'];
        $password=$_REQUEST['contraseña'];
        $modelregistro = new RegistroModel();
        $modelregistro->actualizarCliente($id, $nombre, $apellido, $telefono, $correo, $curp, $password);
        header("location: index.php?c=mostrarregistros");
    }
    public static function eliminar(){
        $id=$_REQUEST['id'];
        $modelregistro = new RegistroModel();
        $modelregistro->eliminarCliente($id);
        header("location: index.php?c=mostrarregistros");
    }
}
?>