<?php require_once('vista/layout/headeremp.php');?>
<br>
<center><h1>Lista de Clientes</h1></center>
<br>
<div>
<table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">CURP</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
                <?php 
                foreach ($datos as $key => $value)
                    foreach ($value as $va ):
                        echo "<tr><td>".$va['idCliente']."</td>";
                        echo "<td>".$va['Nombre']."</td>";
                        echo "<td>".$va['Apellido']."</td>";
                        echo "<td>".$va['Telefono']."</td>";
                        echo "<td>".$va['Correo']."</td>";
                        echo "<td>".$va['CURP']."</td>";
                        echo "<td><a href='index.php?c=editar&id=".$va['idCliente']."'>ACTUALIZAR</a> 
                        <a href='index.php?c=eliminar&id=".$va['idCliente']."'>ELIMINAR</a></td>";
                        echo "</tr>";
                    endforeach;
                ?>      
        </tbody>
        </table>
</div>
<br>
<?php require_once('vista/layout/footer.php');?>