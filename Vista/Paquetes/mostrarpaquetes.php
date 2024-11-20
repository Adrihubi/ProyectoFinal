<?php require_once('vista/layout/headeremp.php');?>
<br>
<center><h1>Lista de Paquetes</h1></center>
<br>
<div>
<table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Contenido</th>
            <th scope="col">Costo</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
                <?php 
                foreach ($datos as $key => $value)
                    foreach ($value as $va ):
                        echo "<tr><td>".$va['idPaquete']."</td>";
                        echo "<td>".$va['Nombre']."</td>";
                        echo "<td>".$va['Contenido']."</td>";
                        echo "<td>".$va['Costo']."</td>";
                        echo "<td><a href='index.php?p=editar&id=".$va['idPaquete']."'>ACTUALIZAR</a> 
                        <a href='index.php?p=eliminar&id=".$va['idPaquete']."'>ELIMINAR</a></td>";
                        echo "</tr>";
                    endforeach;
                ?>      
        </tbody>
        </table>
</div>
<br>
<?php require_once('vista/layout/footer.php');?>