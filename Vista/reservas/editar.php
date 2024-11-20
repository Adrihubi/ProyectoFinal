<?php
    foreach ($datos as $key => $value) {
        foreach ($value as $valor) {
            $id=$valor['idReserva'];
            $idtiposervicios=$valor['idTipoServicios'];
            $fecha=$valor['Fecha'];
            $pasajeros=$valor['Pasajeros'];
            $estatus=$valor['Estatus'];
            $precio=$valor['Precio'];
            $cliente=$valor['idCliente'];
            $paquete=$valor['idPaquete'];
            $servicios=$valor['idServicios'];
        }
    }
?>
<?php require_once('vista/layout/headeremp.php');?>
<br>
<center><h1>Editar Reservacion</h1></center>
<br>
<form action="">
<label for="id">Id:</label>
    <input type="text" readonly id="idCliente" name="id" value="<?= $id ?>"><br><br>
    <label for="tiposervicios">TipoServicios:</label>
    <input type="number" id="idTipoServicios" name="tiposervicios" value="<?= $idtiposervicios ?>"><br><br>
    <label for="fecha">Fecha:</label>
    <input type="datetime-local" id="Fecha" name="fecha" value="<?= $fecha ?>"><br><br>
    <label for="pasajeros">Pasajeros:</label>
    <input type="number" id="Pasajeros" name="pasajeros" value="<?= $pasajeros ?>"><br><br>
    <label for="estatus">Estatus:</label>
    <input type="text" id="Estatus" name="estatus" value="<?= $estatus ?>"><br><br>
    <label for="precio">Precio:</label>
    <input type="number" id="Precio" name="precio" value="<?= $precio ?>"><br><br>
    <label for="cliente">Cliente:</label>
    <input type="number" id="idCliente" name="cliente" value="<?= $cliente ?>"><br><br>
    <label for="paquete">Paquete:</label>
    <input type="number" id="idPaquete" name="paquete" value="<?= $paquete ?>"><br><br>
    <label for="servicios">Servicios:</label>
    <input type="number" id="idServicios" name="servicios" value="<?= $servicios ?>"><br><br>
    <input type="submit" value="Reservacion">
    <input type="hidden" name="r" value="actualizar">
</form>
<br>
<?php require_once('vista/layout/footer.php');?>