<?php
class ReservaModel{
    private $listaReservas;
    public function __construct(){
        $this->listaReservas=array();
    }
    public function mostrarreservas(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="select * from Reserva;";
        $resultado=$cnn->prepare($consula);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaReservas[]=$filas;
        }
        return $this->listaReservas;
    }
    public function guardarReserva($idtiposervicios, $fecha, $pasajeros, $estatus, $precio, $cliente, $paquete, $servicios){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="INSERT INTO Reserva (idTipoServicios, Fecha, Pasajeros, Estatus, Precio, idCliente, idPaquete, idServicios)
        VALUES ('$idtiposervicios', '$fecha', '$pasajeros', '$estatus', '$precio', '$cliente', '$paquete', '$servicios');";
        $resultado=$cnn->prepare($consula);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function obtenerReservaId($id){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="select * from Reserva WHERE idReserva=".$id.";";
        $resultado=$cnn->prepare($consula);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaReservas[]=$filas;
        }
        return $this->listaReservas;
    }
    public function actualizarReserva($id, $idtiposervicios, $fecha, $pasajeros, $estatus, $precio, $cliente, $paquete, $servicios){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="UPDATE Reserva set idTipoServicios=".$idtiposervicios.
        ",Fecha='".$fecha."',Pasajeros=".$pasajeros.
        ",Estatus='".$estatus."',Precio=".$precio.
        ",idCliente=".$cliente.",idPaquete=".$paquete.
        ",idServicios=".$servicios.
        " where idReserva=".$id;
        $resultado=$cnn->prepare($consula);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function eliminarReserva($id){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="DELETE FROM Reserva where idReserva=".$id;
        $resultado=$cnn->prepare($consula);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
}
?>