<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Registrar Admin</title>
</head>
<body>
<div class="container-fluid">
    <?php
    if(empty($_REQUEST)){
        ?>
        <form class="mx-auto" method="post" action="">
            <h4 class="text-center">Registrar Admin</h4>
            <div class="mb-3 mt-5">
                <label for="exampleInputEmail1" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="user" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
                <div id="emailHelp" class="form-text">Olvidaste tu contraseña?</div>
            </div>
            
            <input type="submit" name="btnreg" class="btn btn-success " value="Registrarse"></input>
            <a href="http://localhost/Taller_php/login/login_admin.php" name="btnregistrar" class="btn btn-warning">Atras</a>

        </form>
    <?php
    }if (!empty($_POST['btnreg']) and !empty($_POST['user']) and !empty($_POST['pass'])) {
        $usuario = $_POST['user'];
        $password = $_POST['pass'];
        include_once ("admin_cone.php");
        $conexion->query("insert into admin(nombre, contraseña) values ('$usuario', '$password')");
        ?>
        <div class="container-fluid">
            <form class="mx-auto" method="post" action="">
                <h4 class="text-center">Login Admin</h4>
                <div class="text-center mt-3">
                <a href="http://localhost/Taller_php/login/login.php" name="btnregistrar" class="btn btn-info">Login Usuario</a>
                </div>
                <?php
                include_once ("conexion.php");
                include "../controlador/controlador_login_admin.php";
                ?>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    <div id="emailHelp" class="form-text">Olvidaste tu contraseña?</div>
                </div>
                
                <input type="submit" name="btninicio" class="btn btn-success " value="Iniciar Sesion"></input>
                <a href="http://localhost/Taller_php/login/Registrar_admin.php" name="btnregistrar" class="btn btn-warning">No tienes cuenta? Registrate</a>

            </form>
        </div>
        <?php
    }else{
        session_start();
        if (!empty($_POST['btninicio'])) {
            if (!empty($_POST['usuario']) and !empty($_POST['password'])) {
                include_once ("admin_cone.php");
                    $usuario = $_POST['usuario'];
                    $password = $_POST['password'];
                    $consulta=$conexion->query("select * from admin where nombre='$usuario' and contraseña='$password'");
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

    }
        
    
    ?>
    
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>