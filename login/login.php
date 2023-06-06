<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid">
    <form class="mx-auto" method="post" action="">
        <h4 class="text-center">Login Usuario</h4>
        <div class="text-center mt-3">
            <a href="http://localhost/Taller_php/login/login_admin.php" name="btnregistrar" class="btn btn-info">Login Admin</a>
        </div>
        <?php
        include_once ("conexion.php");
        include "../controlador/controlador_login.php";
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
        <a href="http://localhost/Taller_php/login/Registrar_usuario.php" name="btnregistrar" class="btn btn-warning">No tienes cuenta? Registrate</a>
        <div class="text-center mt-3">
        <a href="http://localhost/Taller_php/Principal_admin/principal_admin.php" name="btnatras" class="btn btn-danger">Atras</a>
        </div>

    </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>