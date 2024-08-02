<div class="mt-5">
    <h3 class="display-4">Eliminar Paciente</h3>
</div>

<div class="mt-5">
    <?php
        foreach ($pacientes as $pac) {
        
    ?>
    <form action="<?php echo getUrl("Paciente","Paciente","postDelete");?>" method="post">

        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="pac_id" value="<?php echo $pac['pac_id'];?>">
                <input type="text" name="pac_nombre" class="form-control" value="<?php echo $pac['pac_nombre'];?>" readonly>
            </div>

            <div class="col-md-4">
                <label class="form-label">Apellidos</label>
                <input type="text" name="pac_apellido" class="form-control" value="<?php echo $pac['pac_apellido'];?>" readonly>
            </div>

            <div class="col-md-4">
                <label class="form-label">Direccion</label>
                <input type="text" name="pac_direccion" class="form-control" value="<?php echo $pac['pac_direccion'];?>" readonly>
            </div>

            <div class="col-md-4">
                <label class="form-label">Telefono</label>
                <input type="number" name="pac_telefono" class="form-control" value="<?php echo $pac['pac_telefono'];?>" readonly>
            </div>

            <div class="col md-4">
                <label class="form-label">Género</label>
                    <?php 
                        foreach ($generos as $gen) {
                            if ($pac['gen_id'] == $gen['gen_id']) {
                                echo '<input type="text" name="gen_nombre" class="form-control" value="', $gen['gen_nombre'],'" readonly>'; 
                            }
                        }
                    ?>
            </div>

            <div class="col md-4">
                <label class="form-label">Estrato</label>
                    <?php 
                        foreach ($estratos as $estr) {
                            if ($pac['estr_id'] == $estr['estr_id']) {
                                echo '<input type="text" name="estr_nombre" class="form-control" value="', $estr['estr_nombre'],'" readonly>'; 
                            }
                        }
                    ?>
            </div>

            <div class="col md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>

    </form>
    <?php }?>
</div>