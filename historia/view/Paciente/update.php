<div class="mt-5">
    <h3 class="display-4">Editar Paciente</h3>
</div>

<div class="mt-5">
    <?php
        foreach ($pacientes as $pac) {
        
    ?>
    <form action="<?php echo getUrl("Paciente","Paciente","postUpdate");?>" method="post">

        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Paciente</label>
                <input type="hidden" name="pac_id" value="<?php echo $pac['pac_id'];?>">
                <input type="text" name="pac_nombre" class="form-control" value="<?php echo $pac['pac_nombre'];?>">
                <input type="text" name="pac_apellido" class="form-control" value="<?php echo $pac['pac_apellido'];?>">
                <input type="text" name="pac_direccion" class="form-control" value="<?php echo $pac['pac_direccion'];?>">
                <input type="number" name="pac_telefono" class="form-control" value="<?php echo $pac['pac_telefono'];?>">
            </div>

            <div class="col md-4">
                <label class="form-label">Género</label>
                <select name="gen_id" class="form-control">
                    <option value=""><---Seleccione---></option>
                    <?php 
                        foreach ($generos as $gen) {
                            if ($gen['gen_id']==$pac['gen_id']){
                                $selected="selected";
                            }
                            else{
                                $selected="";
                            }
                            echo "<option value='".$gen['gen_id']."'>".$gen['gen_nombre']."</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="col md-4">
                <label class="form-label">Estrato</label>
                <select name="estr_id" class="form-control">
                    <option value=""><---Seleccione---></option>
                    <?php 
                        foreach ($estratos as $estr) {
                            if ($estr['estr_id']==$pac['estr_id']){
                                $selected="selected";
                            }
                            else{
                                $selected="";
                            }
                            echo "<option value='".$estr['estr_id']."'>".$estr['estr_nombre']."</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="col md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>

    </form>
    <?php }?>
</div>