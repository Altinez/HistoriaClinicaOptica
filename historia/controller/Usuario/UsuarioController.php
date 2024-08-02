<?php 

    include_once '../model/Usuario/UsuarioModel.php';

    class UsuarioController {

        public function getLogin(){
            $obj = new UsuarioModel();

            $sql = "SELECT * FROM roles";
            $roles = $obj -> consult($sql);

            if (isset($roles)) {
                include_once '../view/partials/login.php';
            }
            
        }

        public function postLogin(){
            $obj = new UsuarioModel();

            $usu_docum=$_POST['usu_docum'];
            $usu_clave=$_POST['usu_clave'];
            $rol_id=$_POST['rol_id'];

            $sql = "SELECT * FROM usuarios WHERE usu_docum=$usu_docum AND usu_clave='$usu_clave' AND rol_id=$rol_id";
            $usuarios = $obj -> consult($sql);

            $result=mysqli_num_rows($usuarios);
            
            if ($result==0) {
                ?> <script type="text/javascript">
                        alert("Credenciales de acceso incorrectas. Intente nuevamente");
                    </script><?php
            } else {
                if ($rol_id==1) {
                    ?> 
                    <script type="text/javascript">
                        alert("Bienvenido",<?php echo $usu_nombre ?>,"...");
                    </script>
                    <?php  
                    header('location: index2.php');
                } else {
                    header('location:../view/Optometra/login2.php');
                }
                
            }    
        }
    }

?>