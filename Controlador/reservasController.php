<?php
require_once('modelo/reservaModel.php');
class ReservasController{
    private $reservaModel;
    public function __construct(){
        $this->reservaModel = new ReservaModel();
    }
    public static function mostrarreservas(){
        $modelreserva = new ReservaModel();
        $datos=$modelreserva->mostrarreservas();  
        require_once('vista/reservas/mostrarreservas.php');
    }
    public static function reservacion(){
        require_once('vista/reservacion.php');
    }
    public static function guardar(){
        $idtiposervicios=$_REQUEST['tiposervicios'];
        $fecha=$_REQUEST['fecha'];
        $pasajeros=$_REQUEST['pasajeros'];
        $estatus=$_REQUEST['estatus'];
        $precio=$_REQUEST['precio'];
        $cliente=$_REQUEST['cliente'];
        $paquete=$_REQUEST['paquete'];
        $servicios=$_REQUEST['servicios'];
        $modelreserva = new ReservaModel();
        $modelreserva->guardarReserva($idtiposervicios, $fecha, $pasajeros, $estatus, $precio, $cliente, $paquete, $servicios);
        header("location: index.php?i=Paquetes");
    }
    public static function editar(){
        $id=$_REQUEST['id'];
        $modelreserva = new ReservaModel();
        $datos=$modelreserva->obtenerReservaId($id);
        require_once('vista/reservas/editar.php');
    }
    public static function actualizar(){
        $id=$_REQUEST['id'];
        $idtiposervicios=$_REQUEST['tiposervicios'];
        $fecha=$_REQUEST['fecha'];
        $pasajeros=$_REQUEST['pasajeros'];
        $estatus=$_REQUEST['estatus'];
        $precio=$_REQUEST['precio'];
        $cliente=$_REQUEST['cliente'];
        $paquete=$_REQUEST['paquete'];
        $servicios=$_REQUEST['servicios'];
        $modelreserva = new ReservaModel();
        $modelreserva->actualizarReserva($id, $idtiposervicios, $fecha, $pasajeros, $estatus, $precio, $cliente, $paquete, $servicios);
        header("location: index.php?r=mostrarreservas");
    }
    public static function eliminar(){
        $id=$_REQUEST['id'];
        $modelreserva = new ReservaModel();
        $modelreserva->eliminarReserva($id);
        header("location: index.php?r=mostrarreservas");
    }
}
?>