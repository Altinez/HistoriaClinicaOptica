<?php 

    include_once '../model/Historia/HistoriaModel.php';

    class PacienteController {
        public function getInsert(){
            $obj = new HistoriaModel();

            $sql = "SELECT * FROM historias";
            $historias = $obj-> consult($sql);

            $sql = "SELECT * FROM paciente";
            $pacientes = $obj-> consult($sql);

            include_once '../view/Historia/insert.php';
        }
    }