<?php require_once('layout/headercli.php');?>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
      <h3 class="text-center mb-4">Acceder como empleado</h3>
      <form method="post" action="index.php?i=acceso">
        <div class="mb-3">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <input type="submit" style="color:salmon" value="Enviar">
      </form>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<?php require_once('layout/footer.php');?>