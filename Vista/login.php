<?php require_once('layout/headercli.php');?>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
      <h3 class="text-center mb-4">Iniciar Sesion</h3>
      <?php if (isset($_GET['error'])): ?>
        <p style="color: red;">Correo o contraseña incorrectos</p>
      <?php endif; ?>
      <form action="index.php?u=login&u=iniciarSesion" method="POST">
        <div class="mb-3">
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="Correo" required><br><br>
        </div>
        <div class="mb-3">
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="Contrasena" required><br><br>
        </div>
        <button type="submit" style="color:salmon">Ingresar</button>
      </form>
      <br><center><a href="index.php?i=acceder" style="color:black">Acceder como empleado</a></center>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<?php require_once('layout/footer.php');?>