<div class="mt-5">
    <h3 class="display-4">Registrar Historia Medica</h3>
</div>
<?php
    foreach ($historias as $his) {
?>
<div class="mt-5">
    <form action="<?php echo getUrl("Historia","Historia","postInsert");?>" method="post">

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
                <label class="form-label">Paciente</label>
                    <?php 
                    //Lo dejé por acá
                        foreach ($paciente as $pac) {
                            echo "<input value='".$his['pac_id']."'>".$pac['pac_nombre']." type='text' readonly>";
                        }
                    ?>
            </div>

            <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>

    </form>
    <?php
}
?>
</div>
