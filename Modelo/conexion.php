<?php
class Conexion extends PDO{
    private $hostBD='localhost';
    private $nombreBD='ChiapasCon';
    private $usuarioBD='root';
    private $passwordBD='Jai82+Laodmqpx91901jsoen';
    public function __construct(){
        try {
            parent::__construct('mysql:host='.$this->hostBD.';dbname='.$this->nombreBD.';charset=utf8',$this->usuarioBD,$this->passwordBD,
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            exit;
        }
    }
}
?>