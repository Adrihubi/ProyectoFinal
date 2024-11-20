<?php
require_once('modelo/empleadoModel.php');
class EmpleadosController{
    private $empleadoModel;
    public function __construct(){
        $this->empleadoModel = new EmpleadoModel();
    }
    public static function mostrarempleados(){
        $modelempleado = new EmpleadoModel();
        $datos=$modelempleado->mostrarempleados();  
        require_once('vista/empleados/mostrarempleados.php');
    }
    public static function emplearse(){
        require_once('vista/emplearse.php');
    }
    public static function guardar(){
        $nombre=$_REQUEST['nombre'];
        $apellido=$_REQUEST['apellido'];
        $tipo=$_REQUEST['tipo'];
        $fecha_nacimiento=$_REQUEST['fecha_nacimiento'];
        $curp=$_REQUEST['curp'];
        $genero=$_REQUEST['genero'];
        $telefono=$_REQUEST['telefono'];
        $correo=$_REQUEST['correo'];
        $password=$_REQUEST['contraseña'];
        $modelempleado = new EmpleadoModel();
        $modelempleado->guardarEmpleado($nombre, $apellido, $tipo, $fecha_nacimiento, $curp, $genero, $telefono, $correo, $password);
        header("location: index.php?e=mostrarempleados");
    }
    public static function editar(){
        $id=$_REQUEST['id'];
        $modelempleado = new EmpleadoModel();
        $datos=$modelempleado->obtenerEmpleadoId($id);
        require_once('vista/empleados/editar.php');
    }
    public static function actualizar(){
        $id=$_REQUEST['id'];
        $nombre=$_REQUEST['nombre'];
        $apellido=$_REQUEST['apellido'];
        $tipo=$_REQUEST['tipo'];
        $fecha_nacimiento=$_REQUEST['fecha_nacimiento'];
        $curp=$_REQUEST['curp'];
        $genero=$_REQUEST['genero'];
        $telefono=$_REQUEST['telefono'];
        $correo=$_REQUEST['correo'];
        $password=$_REQUEST['contraseña'];
        $modelempleado = new EmpleadoModel();
        $modelempleado->actualizarEmpleado($id, $nombre, $apellido, $tipo, $fecha_nacimiento, $curp, $genero, $telefono, $correo, $password);
        header("location: index.php?e=mostrarempleados");
    }
    public static function eliminar(){
        $id=$_REQUEST['id'];
        $modelempleado = new EmpleadoModel();
        $modelempleado->eliminarEmpleado($id);
        header("location: index.php?e=mostrarempleados");
    }
}
?>