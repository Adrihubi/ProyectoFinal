<?php require_once('vista/layout/headeremp.php');?>
<br>
<center><h1>Lista de Reservas</h1></center>
<br>
<div>
<table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Tipo de Servicio</th> 
            <th scope="col">Fecha</th>
            <th scope="col">Pasajeros</th>
            <th scope="col">Estatus</th>
            <th scope="col">Precio</th>
            <th scope="col">Cliente</th>
            <th scope="col">Paquete</th>
            <th scope="col">Servicios</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
                <?php 
                foreach ($datos as $key => $value)
                    foreach ($value as $va ):
                        echo "<tr><td>".$va['idReserva']."</td>";
                        echo "<td>".$va['idTipoServicios']."</td>";
                        echo "<td>".$va['Fecha']."</td>";
                        echo "<td>".$va['Pasajeros']."</td>";
                        echo "<td>".$va['Estatus']."</td>";
                        echo "<td>".$va['Precio']."</td>";
                        echo "<td>".$va['idCliente']."</td>";
                        echo "<td>".$va['idPaquete']."</td>";
                        echo "<td>".$va['idServicios']."</td>";
                        echo "<td><a href='index.php?r=editar&id=".$va['idReserva']."'>ACTUALIZAR</a> 
                        <a href='index.php?r=eliminar&id=".$va['idReserva']."'>ELIMINAR</a></td>";
                        echo "</tr>";
                    endforeach;
                ?>      
        </tbody>
        </table>
</div>
<br><br><br><br><br>
<?php require_once('vista/layout/footer.php');?>