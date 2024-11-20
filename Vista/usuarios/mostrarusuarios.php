<?php
session_start();
require_once('vista/layout/headercli.php');
?>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
      <h3 class="text-center mb-4"><h1>Bienvenido, <br><?php echo $_SESSION['Nombre']; ?></h1></h3>
      <form action="">
        <div class="mb-3">
            <p>Apellido: <?php echo $_SESSION['Apellido']; ?></p>
        </div>
        <div class="mb-3">
            <p>Correo: <?php echo $_SESSION['Correo']; ?></p>
        </div>
        <div class="mb-3">
            <p>CURP: <?php echo $_SESSION['CURP']; ?></p>
        </div>
      </form>
      <form action="index.php?u=login&u=cerrarSesion" method="POST">
        <button type="submit" style="color:salmon">Cerrar sesión</button>
      </form>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<?php require_once('vista/layout/footer.php');?>