<div class="mt-5">
    <h3 class="display-4">Registrar Paciente</h3>
</div>

<div class="mt-5">
    <form action="<?php echo getUrl("Paciente","Paciente","postInsert");?>" method="post">

        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Nombres</label>
                <input type="text" name="pac_nombre" class="form-control" placeholder="Nombres" required="required">
            </div>

            <div class="col-md-4">
                <label class="form-label">Apellidos</label>
                <input type="text" name="pac_apellido" class="form-control" placeholder="Apellidos" required="required">
            </div>

            <div class="col-md-4">
                <label class="form-label">Dirección</label>
                <input type="text" name="pac_direccion" class="form-control" placeholder="Dirección" required="required">
            </div>

            <div class="col-md-4">
                <label class="form-label">Telefonos</label>
                <input type="number" name="pac_telefono" class="form-control" placeholder="Teléfono" required="required">
            </div>

            <div class="col md-4">
                <label class="form-label">Género</label>
                <select name="gen_id" class="form-control">
                    <option value=""><---Seleccione---></option>
                    <?php 
                        foreach ($generos as $gen) {
                            echo "<option value='".$gen['gen_id']."'>".$gen['gen_nombre']."</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="col md-4">
                <label class="form-label">Estratos</label>
                <select name="estr_id" class="form-control">
                    <option value=""><---Seleccione---></option>
                    <?php 
                        foreach ($estratos as $estr) {
                            echo "<option value='".$estr['estr_id']."'>".$estr['estr_nombre']."</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>

    </form>
</div>
