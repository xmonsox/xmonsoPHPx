<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Eliminar Producto</title>
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center" >Admin a eliminar</h3>
        <?php
        include_once ("admin_cone.php");
        $id = $_GET["id"];

        $sql = $conexion ->query("select * from admin where id_admin=$id ");
        while ($row=$sql->fetch_array()) {
            ?>
            <form action="" method="POST">
            <label for="exampleFormControlInput1" class="form-label mt-2"><h5><b>Nombre</b></h5></label> 
            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
            border-opacity-50" type="text" name="nombre" value="<?= $row['nombre'] ?>"  required>

            <label for="exampleFormControlInput1" class="form-label mt-2"><h5><b>Contraseña</b></h5></label> 
            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
            border-opacity-50" type="text" name="contra" value="<?= $row['contraseña'] ?>" required >

            <div class="text-center mt-5">
            <input type="submit" id="button" name="btneliminar" class="btn btn-success btn-lg mt-3" value="Eliminar">
            </div> 
            <div class="text-center mt-4">
                <a href="http://localhost/Taller_php/login/consulta_admin.php" class="btn btn-danger border border-secondary-subtle btn-lg ">Atras</a>
            </div>
            </form>
            <?php
        }
        if(!empty($_POST['btneliminar'])){
            if(!empty($_GET['id'])){
                include_once("admin_cone.php");
                $sql=$conexion->query("delete from admin where id_admin=$id");
                if ($sql==1) {
                    ?>
                    <div class="alert alert-info mt-5 text-center" role="alert">
                        !!Eliminado!! (Da click para Consultar los Administradores);
                    </div>
                    <div class="text-center mt-4">
                        <a href="http://localhost/Taller_php/login/consulta_admin.php" class="btn btn-warning border border-secondary-subtle btn-lg ">Volver Consultar Admin</a>
                    </div>
                    <?php
                }else{
                    ?>
                    <div class="alert alert-danger mt-5 text-center" role="alert">
                        !!Error!! (los datos no fueron modificados);
                    </div>
                    <div class="text-center mt-3">
                        <a href="http://localhost/Taller_php/Principal_admin/principal_admin.php" class="btn btn-danger btn-lg mb-4 ">Atras</a> 
                    </div>
                    <?php
                }
            }
        }
        ?>
    </div>
</body>
</html>