<?php
class PerfilModel {
    public static function obtenerEmpleadoPorCredenciales($correo, $contrasena) {
        $conn = new mysqli("localhost", "root", "Jai82+Laodmqpx91901jsoen", "ChiapasCon");

        $sql = "SELECT * FROM Empleado WHERE Correo = ? AND Password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $correo, $contrasena);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            return $resultado->fetch_assoc(); // Retorna el usuario encontrado
        } else {
            return null; // Credenciales inválidas
        }
    }
}
?>