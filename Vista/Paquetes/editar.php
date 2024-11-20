<?php
    foreach ($datos as $key => $value) {
        foreach ($value as $valor) {
            $id=$valor['idPaquete'];
            $nombre=$valor['Nombre'];
            $contenido=$valor['Contenido'];
            $costo=$valor['Costo'];
        }
    }
?>
<?php require_once('vista/layout/headeremp.php');?>
<br>
<center><h1>Editar paquete</h1></center>
<br>
<form action="">
<label for="id">Id:</label>
<input type="text" readonly id="idPaquete" name="id" value="<?= $id ?>"><br><br>
    <label for="nombre">Nombre:</label>
    <input type="text" id="Nombre" name="nombre" value="<?= $nombre ?>"><br><br>
    <label for="contenido">Contenido:</label>
    <input type="text" id="Contenido" name="contenido" value="<?= $contenido ?>"><br><br>
    <label for="costo">Costo:</label>
    <input type="number" id="Costo" name="costo" value="<?= $costo ?>"><br><br>
    <input type="submit" value="Registrar">
    <input type="hidden" name="p" value="actualizar">
</form>
<br>
<?php require_once('vista/layout/footer.php');?>