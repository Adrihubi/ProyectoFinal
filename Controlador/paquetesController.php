<?php
require_once('modelo/paqueteModel.php');
class PaquetesController{
    private $paqueteModel;
    public function __construct(){
        $this->paqueteModel = new PaqueteModel();
    }
    public static function mostrarPaquetes(){
        $modelpaquete = new PaqueteModel();
        $datos=$modelpaquete->mostrarPaquetes();  
        require_once('vista/paquetes/mostrarpaquetes.php');
    }
    public static function nuevospaquetes(){
        require_once('vista/nuevospaquetes.php');
    }
    public static function guardar(){
        $nombre=$_REQUEST['nombre'];
        $contenido=$_REQUEST['contenido'];
        $costo=$_REQUEST['costo'];
        $modelpaquete = new PaqueteModel();
        $modelpaquete->guardarPaquete($nombre, $contenido, $costo);
        header("location: index.php?p=mostrarpaquetes");
    }
    public static function editar(){
        $id=$_REQUEST['id'];
        $modelpaquete = new PaqueteModel();
        $datos=$modelpaquete->obtenerPaqueteId($id);
        require_once('vista/paquete/editar.php');
    }
    public static function actualizar(){
        $id=$_REQUEST['id'];
        $nombre=$_REQUEST['nombre'];
        $contenido=$_REQUEST['contenido'];
        $costo=$_REQUEST['costo'];
        $modelpaquete = new PaqueteModel();
        $modelpaquete->actualizarPaquete($id, $nombre, $contenido, $costo);
        header("location: index.php?p=mostrarpaquetes");
    }
    public static function eliminar(){
        $id=$_REQUEST['id'];
        $modelpaquete = new PaqueteModel();
        $modelpaquete->eliminarPaquete($id);
        header("location: index.php?p=mostrarpaquetes");
    }
}
?>