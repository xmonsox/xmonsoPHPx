
<?php
session_start();
if (!empty($_POST['btninicio'])) {
    if (!empty($_POST['usuario']) and !empty($_POST['password'])) {
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $consulta=$conexion->query("select * from usuario where nombre='$usuario' and contraseña='$password'");
            if ($row = $consulta->fetch_object()) {
                header ("location:../Principal_admin/principal_admin.php");
            } else {
                ?>
                <div class="alert alert-danger">
                    Acceso Denegado
                </div>
                <?php
            }
            
    }else {
        
    }
}


?>