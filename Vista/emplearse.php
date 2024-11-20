<?php require_once('layout/headeremp.php');?>
<br><br><br><br><br><br><br><br><br><br>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
      <h3 class="text-center mb-4">Crear cuenta</h3>
      <form action="">
        <div class="mb-3">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre"><br><br>
        </div>
        <div class="mb-3">
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido"><br><br>
        </div>
        <div class="mb-3">
            <label for="tipo">Tipo:</label>
            <input type="text" id="Tipo" name="tipo"><br><br>
        </div>
        <div class="mb-3">
            <label for="fecha_nacimiento">Fecha_Nacimiento:</label>
            <input type="date" id="Fecha_Nacimiento" name="fecha_nacimiento"><br><br>
        </div>
        <div class="mb-3">
            <label for="curp">CURP:</label>
            <input type="text" id="curp" name="curp"><br><br>
        </div>
        <div class="mb-3">
            <label for="genero">Genero:</label>
            <input type="text" id="Genero" name="genero"><br><br>
        </div>
        <div class="mb-3">
            <label for="telefono">Telefono:</label>
            <input type="number" id="telefono" name="telefono"><br><br>
        </div>
        <div class="mb-3">
            <label for="correo">Correo:</label>
            <input type="correo" id="correo" name="correo"><br><br>
        </div>
        <div class="mb-3">
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña"><br><br>
        </div>
        <div class="mb-3">
            <label for="confirmar_contraseña">Confirmar contraseña:</label>
            <input type="password" id="confirmar_contraseña" name="confirmar_contraseña"><br><br>
        </div>
        <input type="submit" style="color:salmon" value="Crear cuenta">
        <input type="hidden" name="e" value="guardar">
        <br><br><center><a href="index.php?i=acceder" style="color:black">Iniciar Sesion</a></center>
        <br>
      </form>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<br><br><br><br><br><br><br>
<?php require_once('layout/footer.php');?>