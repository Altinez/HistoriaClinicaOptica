<div class="mt-5">
    <h3 class="display-4">Consultar Pacientes</h3>
</div>

<div class="mt-5">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Género</th>
                <th>Estrato</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 

                foreach ($pacientes as $pac){
                    echo "<tr>";
                        echo "<td>".$pac['pac_id']."</td>";
                        echo "<td>".$pac['pac_nombre']."</td>";
                        echo "<td>".$pac['pac_apellido']."</td>";
                        echo "<td>".$pac['pac_direccion']."</td>";
                        echo "<td>".$pac['pac_telefono']."</td>";
                        echo "<td>".$pac['gen_nombre']."</td>";
                        echo "<td>".$pac['estr_nombre']."</td>";

                        //Boton crear historia
                        echo "<td> <a href='".getUrl("Historia", "Historia", "getInsert", 
                                array("pac_id"=>$pac['pac_id']))."'>
                                <button class='btn btn-primary'>Editar</button></a></td>";

                        //Boton de editar
                        echo "<td> <a href='".getUrl("Paciente", "Paciente", "getUpdate", 
                                array("pac_id"=>$pac['pac_id']))."'>
                                <button class='btn btn-warning'>Editar</button></a></td>";
                        
                        //Boton de Eliminar
                        echo "<td> <a href='".getUrl("Paciente","Paciente","getDelete",
                                array("pac_id"=>$pac['pac_id']))."'>
                                <button class='btn btn-danger'>Eliminar</button></a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>