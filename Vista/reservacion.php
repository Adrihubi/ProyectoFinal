<?php require_once('layout/headercli.php');?>
<br><br><br><br>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
      <h3 class="text-center mb-4">Crear reservacion</h3>
      <form action="">
        <div class="mb-3">
            <label for="tiposervicios">TipoServicios:</label>
            <input type="number" id="idTipoServicios" name="tiposervicios" value="<?= $idtiposervicios ?>"><br><br>
        </div>
        <div class="mb-3">
            <label for="fecha">Fecha:</label>
            <input type="datetime-local" id="Fecha" name="fecha" value="<?= $fecha ?>"><br><br>
        </div>
        <div class="mb-3">
            <label for="pasajeros">Pasajeros:</label>
            <input type="number" id="Pasajeros" name="pasajeros" value="<?= $pasajeros ?>"><br><br>
        </div>
        <div class="mb-3">
            <label for="estatus">Estatus:</label>
            <input type="text" id="Estatus" name="estatus" value="<?= $estatus ?>"><br><br>
        </div>
        <div class="mb-3">
            <label for="precio">Precio:</label>
            <input type="number" id="Precio" name="precio" value="<?= $precio ?>"><br><br>
        </div>
        <div class="mb-3">
            <label for="cliente">Cliente:</label>
            <input type="number" id="idCliente" name="cliente" value="<?= $cliente ?>"><br><br>
        </div>
        <div class="mb-3">
            <label for="paquete">Paquete:</label>
            <input type="number" id="idPaquete" name="paquete" value="<?= $paquete ?>"><br><br>
        </div>
        <div class="mb-3">
            <label for="servicios">Servicios:</label>
            <input type="number" id="idServicios" name="servicios" value="<?= $servicios ?>"><br><br>
        </div>
        <input type="submit" style="color:salmon" value="Crear reservacion">
        <input type="hidden" name="r" value="guardar">
      </form>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<br><br><br><br>
<?php require_once('layout/footer.php');?>