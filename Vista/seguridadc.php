<?php 
session_start();
require_once('layout/headercli.php');?>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
      <h3 class="text-center mb-4">¿Ya inicio sesion?</h3>
      <?php if (isset($_GET['error'])): ?>
        <p style="color: red;">Contraseña incorrecta</p>
      <?php endif; ?>
      <button style="color:black"><a href="index.php?u=Login" style="color:salmon">No, todavía no.</a></button>
      <p>   </p>
      <form action="index.php?u=sesion&u=iniciarSesion" method="POST">
        <div class="mb-3">
            <label for="contrasena">Si ya lo hizo, por favor, confirme su contraseña:</label>
            <input type="password" id="contrasena" name="Contrasena" required>
        </div>
        <button type="submit" style="color:black"><a href="index.php?i=apartarc" style="color:salmon">Ingresar</a></button>
      </form>
      <p>   </p>
      <button style="color:black"><a href="index.php?i=registrar" style="color:salmon">Me quiero registrar</a></button>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<?php require_once('layout/footer.php');?>