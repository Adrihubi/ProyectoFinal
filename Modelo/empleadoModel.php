<?php
class EmpleadoModel{
    private $listaEmpleados;
    public function __construct(){
        $this->listaEmpleados=array();
    }
    public function mostrarempleados(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="select * from Empleado;";
        $resultado=$cnn->prepare($consula);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaEmpleados[]=$filas;
        }
        return $this->listaEmpleados;
    }
    public function guardarEmpleado($nombre, $apellido, $tipo, $fecha_nacimiento, $curp, $genero, $telefono, $correo, $password){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="INSERT INTO Empleado (nombre, apellido, tipo, fecha_nacimiento, curp, genero, telefono, correo, password)
        VALUES ('$nombre', '$apellido', '$tipo', '$fecha_nacimiento', '$curp', '$genero', '$telefono', '$correo', '$password');";
        $resultado=$cnn->prepare($consula);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function obtenerEmpleadoId($id){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="select * from Empleado WHERE idEmpleado=".$id.";";
        $resultado=$cnn->prepare($consula);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaEmpleados[]=$filas;
        }
        return $this->listaEmpleados;
    }
    public function actualizarEmpleado($id, $nombre, $apellido, $tipo, $fecha_nacimiento, $curp, $genero, $telefono, $correo, $password){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="UPDATE Empleado set Nombre='".$nombre.
        "',Apellido='".$apellido."',Tipo='".$tipo.
        "',Fecha_Nacimiento='".$fecha_nacimiento."',CURP='".$curp.
        "',Genero='".$genero."',Telefono='".$telefono.
        "',Correo='".$correo."',Password='".$password.
        "' where idEmpleado=".$id;
        $resultado=$cnn->prepare($consula);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function eliminarEmpleado($id){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="DELETE FROM Empleado where idEmpleado=".$id;
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