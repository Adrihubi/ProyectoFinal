<?php require_once('vista/layout/headeremp.php');?>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
      <h3 class="text-center mb-4">Registrar nuevo paquete</h3>
      <form action="">
        <div class="mb-3">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre"><br><br>
        </div>
        <div class="mb-3">
            <label for="contenido">Contenido:</label>
            <input type="text" id="Contenido" name="contenido"><br><br>
        </div>
        <div class="mb-3">
            <label for="costo">Costo:</label>
            <input type="number" id="Costo" name="costo"><br><br>
        </div>
        <input type="submit" style="color:salmon" value="Registrar">
        <input type="hidden" name="p" value="guardar">
      </form>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<?php require_once('vista/layout/footer.php');?>