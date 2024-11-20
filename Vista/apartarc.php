<?php 
session_start();
require_once('layout/headerapar.php');?>
<br><center><i><h1 style="color: #28a745; font-family: 'Times New Roman', Times, serif; font-size: 30px;"><b>Datos del paquete a reservar:</b></h1></i></center>
<br>
<div class="container">
<dl>
    <br>
    <dt><b>Nombre del cliente:</b></dt>
    <p>   </p>
    <dd><p><?php echo $_SESSION['Nombre']; ?> <?php echo $_SESSION['Apellido']; ?></p></dd>
    <p>   </p>
    <dt><b>Nombre del Paquete:</b></dt>
    <p>   </p>
    <dd>Paquete VIP</dd>
    <p>   </p>
    <dt><b>Servicios que contiene:</b></dt>
    <p>   </p>
    <dd>
        Habitación para diez personas, habitaciones de lujo, servicio de traslado del aeropuerto al hotel totalmente gratis, viajes con chofer propio,
        un seguro de viajero en caso de algún accidente durante su estancia, todos los servicios son compartidos,
        servicio de desayuno, comida y cena proporcionada por la empresa Chiapas Contigo, así como un Chef personal para cocinar comidas gourmet,
        cuatro guías turisticos que los acompañaran en sus recorridos por el estado.
    </dd>
    <p>   </p>
    <dt><b>Duración:</b></dt>
    <p>   </p>
    <dd>
        El paquete tiene una duración de 8 días completos, así que para la ultima noche ya debe tener listas sus maletas, para
        evitar contratiempos.
    </dd>
    <p>   </p>
    <dt><b>Costo:</b></dt>
    <p>   </p>
    <dd>
        El costo del paquete es de veintiocho mil novecientos cincuenta pesos mexicanos, este precio es inamovible.
    </dd>
    <p>   </p>
    <dt><b>Reservacion:</b></dt>
    <p>   </p>
    <dd>
        ¿Desea reservar este paquete? Una vez realizada la reserva no se puede cambiar.
        <p>   </p>
        <ul>
            <li><a href="index.php?i=apartado">Si, quiero apartar este paquete</a></p></li>
            <li><a href="index.php?i=Paquetes">No, quiero revisar que otros paquetes ofrecen</a></p></li>
        </ul>
        <br>
    </dd>
</dl>
</div>
<?php require_once('layout/footer.php');?>