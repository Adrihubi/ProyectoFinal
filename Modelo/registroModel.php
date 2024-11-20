<?php
class RegistroModel{
    private $listaClientes;
    public function __construct(){
        $this->listaClientes=array();
    }
    public function mostrarregistros(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="select * from Cliente;";
        $resultado=$cnn->prepare($consula);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaClientes[]=$filas;
        }
        return $this->listaClientes;
    }
    public function guardarCliente($nombre, $apellido, $telefono, $correo, $curp, $password){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="INSERT INTO Cliente (nombre, apellido, telefono, correo, curp, password)
        VALUES ('$nombre', '$apellido', '$telefono', '$correo', '$curp', '$password');";
        $resultado=$cnn->prepare($consula);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function obtenerClienteId($id){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="select * from Cliente WHERE idCliente=".$id.";";
        $resultado=$cnn->prepare($consula);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaClientes[]=$filas;
        }
        return $this->listaClientes;
    }
    public function actualizarCliente($id, $nombre, $apellido, $telefono, $correo, $curp, $password){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="UPDATE Cliente set Nombre='".$nombre.
        "',Apellido='".$apellido."',Telefono='".$telefono.
        "',Correo='".$correo."',CURP='".$curp.
        "',Password='".$password.
        "' where idCliente=".$id;
        $resultado=$cnn->prepare($consula);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function eliminarCliente($id){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="DELETE FROM Cliente where idCliente=".$id;
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