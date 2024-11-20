<?php
    foreach ($datos as $key => $value) {
        foreach ($value as $valor) {
            $id=$valor['idCliente'];
            $nombre=$valor['Nombre'];
            $apellido=$valor['Apellido'];
            $telefono=$valor['Telefono'];
            $correo=$valor['Correo'];
            $curp=$valor['CURP'];
            $password=$valor['Password'];
        }
    }
?>
<?php require_once('vista/layout/headeremp.php');?>
<br>
<center><h1>Editar Cliente</h1></center>
<br>
<form action="">
<label for="id">Id:</label>
<input type="text" readonly id="idCliente" name="id" value="<?= $id ?>"><br><br>
    <label for="nombre">Nombre:</label>
    <input type="text" id="Nombre" name="nombre" value="<?= $nombre ?>"><br><br>
    <label for="apellido">Apellido:</label>
    <input type="text" id="Apellido" name="apellido" value="<?= $apellido ?>"><br><br>
    <label for="telefono">Telefono:</label>
    <input type="number" id="Telefono" name="telefono" value="<?= $telefono ?>"><br><br>
    <label for="correo">Correo:</label>
    <input type="correo" id="Correo" name="correo" value="<?= $correo ?>"><br><br>
    <label for="curp">CURP:</label>
    <input type="text" id="CURP" name="curp" value="<?= $curp ?>"><br><br>
    <label for="contraseña">Contraseña:</label>
    <input type="password" id="contraseña" name="contraseña" value="<?= $password ?>"><br><br>
    <input type="submit" value="Registrar">
    <input type="hidden" name="c" value="actualizar">
</form>
<br>
<?php require_once('vista/layout/footer.php');?>