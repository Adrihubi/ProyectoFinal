<?php
class PaqueteModel{
    private $listaPaquetes;
    public function __construct(){
        $this->listaPaquetes=array();
    }
    public function mostrarPaquetes(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="select * from Paquete;";
        $resultado=$cnn->prepare($consula);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaPaquetes[]=$filas;
        }
        return $this->listaPaquetes;
    }
    public function guardarPaquete($nombre, $contenido, $costo){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="INSERT INTO Paquete (Nombre, Contenido, Costo)
        VALUES ('$nombre', '$contenido', '$costo');";
        $resultado=$cnn->prepare($consula);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function obtenerPaqueteId($id){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="select * from Paquete WHERE idPaquete=".$id.";";
        $resultado=$cnn->prepare($consula);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaPaquetes[]=$filas;
        }
        return $this->listaPaquetes;
    }
    public function actualizarPaquete($id, $nombre, $contenido, $costo){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="UPDATE Paquete set Nombre='".$nombre.
        "',Contenido='".$contenido."',Costo=".$costo.
        " where idPaquete=".$id;
        $resultado=$cnn->prepare($consula);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function eliminarPaquete($id){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="DELETE FROM Paquete where idPaquete=".$id;
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