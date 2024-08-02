<?php 

    include_once '../model/Paciente/PacienteModel.php';

    class PacienteController {
        public function getInsert(){
            $obj = new PacienteModel();

            $sql = "SELECT * FROM paciente";
            $pacientes = $obj-> consult($sql);

            $sql = "SELECT * FROM generos";
            $generos = $obj-> consult($sql);

            $sql = "SELECT * FROM estratos";
            $estratos = $obj-> consult($sql);

            include_once '../view/Paciente/insert.php';
        }
    
        public function postInsert(){
            $obj = new PacienteModel();

            $pac_nombre=$_POST['pac_nombre'];
            $pac_apellido=$_POST['pac_apellido'];
            $pac_direccion=$_POST['pac_direccion'];
            $pac_telefono=$_POST['pac_telefono'];
            $gen_id=$_POST['gen_id'];
            $estr_id=$_POST['estr_id'];
            $pac_id=$obj->autoincrement("pac_id","paciente");

            $sql = "INSERT INTO paciente VALUES ($pac_id,'$pac_nombre','$pac_apellido','$pac_direccion',$pac_telefono,$gen_id,$estr_id)";
            $ejecutar=$obj->insert($sql);

            if($ejecutar){
                redirect(getUrl("Paciente","Paciente","getInsert"));
            }
            else {
                echo "Hubo un error";
            }
        }

        public function consult(){
            $obj = new PacienteModel();

            $sql="SELECT p.pac_id, p.pac_nombre, p.pac_apellido, p.pac_direccion, pac_telefono, g.gen_nombre, e.estr_nombre FROM paciente p, generos g, estratos e WHERE p.gen_id=g.gen_id AND p.estr_id=e.estr_id ORDER BY p.pac_id";
            $pacientes=$obj->consult($sql);

            include_once '../view/Paciente/consult.php';

        }

        public function getUpdate(){
            $obj=new PacienteModel();
            
            $pac_id=$_GET['pac_id'];

            $sql="SELECT * FROM paciente WHERE pac_id=$pac_id";
            $pacientes=$obj->consult($sql);

            $sql="SELECT * FROM generos";
            $generos=$obj->consult($sql);

            $sql="SELECT * FROM estratos";
            $estratos=$obj->consult($sql);

            include_once "../view/Paciente/update.php";
        }
    
        public function postUpdate(){
            $obj=new PacienteModel();

            $pac_id=$_POST['pac_id'];
            $pac_nombre=$_POST['pac_nombre'];
            $pac_apellido=$_POST['pac_apellido'];
            $pac_direccion=$_POST['pac_direccion'];
            $pac_telefono=$_POST['pac_telefono'];
            $gen_id=$_POST['gen_id'];
            $estr_id=$_POST['estr_id'];

            $sql="UPDATE paciente SET pac_nombre='$pac_nombre', pac_apellido='$pac_apellido', pac_direccion='$pac_direccion', pac_telefono=$pac_telefono, gen_id=$gen_id, estr_id=$estr_id WHERE pac_id=$pac_id";
            $ejecutar=$obj->update($sql);

            if($ejecutar){
                redirect(getUrl("Paciente","Paciente","consult"));
            } else {
                echo "Hubo un error";
            }
        }

        public function getDelete(){
            $obj=new PacienteModel();
            
            $pac_id=$_GET['pac_id'];

            $sql="SELECT * FROM paciente WHERE pac_id=$pac_id";
            $pacientes=$obj->consult($sql);

            $sql="SELECT * FROM generos";
            $generos=$obj->consult($sql);

            $sql="SELECT * FROM estratos";
            $estratos=$obj->consult($sql);

            include_once "../view/Paciente/delete.php";
        }

        public function postDelete(){
            $obj=new PacienteModel();

            $pac_id=$_POST['pac_id'];
            $pac_nombre=$_POST['pac_nombre'];
            $pac_apellido=$_POST['pac_apellido'];
            $pac_direccion=$_POST['pac_direccion'];
            $pac_telefono=$_POST['pac_telefono'];
            $gen_id=$_POST['gen_id'];
            $estr_id=$_POST['estr_id'];

            $sql="DELETE FROM paciente WHERE pac_id=$pac_id";

            $ejecutar=$obj->delete($sql);

            if($ejecutar){
                redirect(getUrl("Paciente","Paciente","consult"));
            } else {
                echo "Hubo un error";
            }
        }
    
    }

?>