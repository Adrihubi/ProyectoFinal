<?php
require_once('modelo/indexModel.php');
class IndexController{
    private $indexModel;
    function __construct(){
        $this->indexModel = new IndexModel();
    }
    public static function index(){
        require_once("Vista/index.php");
    }
    public static function Chiapas(){
        require_once("Vista/Chiapas.php");
    }
    public static function Contacto(){
        require_once("Vista/Contacto.php");
    }
    public static function Cosas(){
        require_once("Vista/Cosas.php");
    }
    public static function Hoteles(){
        require_once("Vista/Hoteles.php");
    }
    public static function Paquetes(){
        require_once("Vista/Paquetes.php");
    }
    public static function Reseñas(){
        require_once("Vista/Reseñas.php");
    }
    public static function Restaurantes(){
        require_once("Vista/Restaurantes.php");
    }
    public static function Viajespriv(){
        require_once("Vista/Viajespriv.php");
    }
    public static function Vuelos(){
        require_once("Vista/Vuelos.php");
    }
    public static function apartar(){
        require_once("Vista/apartar.php");
    }
    public static function apartaru(){
        require_once("Vista/apartaru.php");
    }
    public static function apartard(){
        require_once("Vista/apartard.php");
    }
    public static function apartart(){
        require_once("Vista/apartart.php");
    }
    public static function apartarc(){
        require_once("Vista/apartarc.php");
    }
    public static function apartado(){
        require_once("Vista/apartado.php");
    }
    public static function acceder(){
        require_once("Vista/acceder.php");
    }
    public static function acceso(){
        require_once("Vista/acceso.php");
    }
    public static function registrar(){
        require_once("Vista/registrar.php");
    }
    public static function crearcuenta(){
        require_once("Vista/registros/mostrarregistros.php");
    }
    public static function seguridad(){
        require_once("Vista/seguridad.php");
    }
    public static function seguridadu(){
        require_once("Vista/seguridadu.php");
    }
    public static function seguridadd(){
        require_once("Vista/seguridadd.php");
    }
    public static function seguridadt(){
        require_once("Vista/seguridadt.php");
    }
    public static function seguridadc(){
        require_once("Vista/seguridadc.php");
    }
}
?>