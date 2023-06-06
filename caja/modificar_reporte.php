
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Modificar Reporte</title>
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center" >Modificar Reporte</h3>
        <?php
        include_once ("reporte.php");
        $id = $_GET["id"];

        $sql = $reporte ->query("select * from reporte_ventas where id_reporte=$id ");
        while ($row=$sql->fetch_array()) {
            ?>
            <form action="" method="POST">
            <label for="exampleFormControlInput1" class="form-label"><h5><b>Id reporte</b></h5></label> 
            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
            border-opacity-50" type="text" name="id_reporte" value="<?= $row['id_reporte']?>" required>
            
            <label for="exampleFormControlInput1" class="form-label mt-2"><h5><b>Nombre</b></h5></label> 
            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
            border-opacity-50" type="text" name="nombre" value="<?= $row['nombre_c'] ?>"  required>

            <label for="exampleFormControlInput1" class="form-label mt-2"><h5><b>Cedula</b></h5></label> 
            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
            border-opacity-50" type="text" name="cedula" value="<?= $row['cedula_c'] ?>" required >
            
            <label for="exampleFormControlInput1" class="form-label mt-2"><h5><b>Telefono</b></h5></label> 
            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
            border-opacity-50" type="text" name="telefono" value="<?= $row['telefono_c'] ?>" required >
            
            <label for="exampleFormControlInput1" class="form-label mt-2"><h5><b>Email</b></h5></label> 
            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
            border-opacity-50" type="text" name="email" value="<?= $row['email_c'] ?>" required >
            
            <label for="exampleFormControlInput1" class="form-label mt-2"><h5><b>Producto</b></h5></label> 
            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
            border-opacity-50" type="text" name="producto" value="<?= $row['nom_pro'] ?>" required>

            <label for="exampleFormControlInput1" class="form-label mt-2"><h5><b>Precio Unitario</b></h5></label> 
            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
            border-opacity-50" type="text" name="precio" value="<?= $row['precio_r'] ?>" required>

            <label for="exampleFormControlInput1" class="form-label mt-2"><h5><b>Cantidad</b></h5></label> 
            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
            border-opacity-50" type="text" name="cantidad" value="<?= $row['cantidad_r'] ?>" required>

            <label for="exampleFormControlInput1" class="form-label mt-2"><h5><b>Total</b></h5></label> 
            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
            border-opacity-50" type="text" name="total" value="<?= $row['total_r'] ?>" required>

            <label for="exampleFormControlInput1" class="form-label mt-2"><h5><b>Recibe</b></h5></label> 
            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
            border-opacity-50" type="text" name="recibe" value="<?= $row['recibe'] ?>" required>

            <label for="exampleFormControlInput1" class="form-label mt-2"><h5><b>Cambio</b></h5></label> 
            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
            border-opacity-50" type="text" name="cambio" value="<?= $row['cambio'] ?>" required>

            <div class="text-center">
            <input type="submit" id="button" name="btnmodificar" class="btn btn-success btn-lg mt-5 " value="Modificar">
            </div> 
            <div class="text-center">
                <a href="http://localhost/Taller_php/caja/consulta_reporte.php" class="btn btn-danger border border-secondary-subtle btn-lg mt-3 mb-5">Atras</a>
            </div>
            </form>
            <?php
        }
        
        if(!empty($_POST['btnmodificar'])){
            if(!empty($_POST['id_reporte']) and !empty($_POST['nombre']) and !empty($_POST['cedula']) and !empty($_POST['telefono']) 
            and !empty($_POST['email']) and !empty($_POST['producto']) and !empty($_POST['precio']) and !empty($_POST['cantidad']) 
            and !empty($_POST['total']) and !empty($_POST['recibe']) and !empty($_POST['cambio'])  ){
                $nombre = $_POST['nombre'];
                $cedula = $_POST['cedula'];
                $telefono = $_POST['telefono'];
                $email = $_POST['email'];
                $producto = $_POST['producto'];
                $precio = $_POST['precio'];
                $cantidad = $_POST['cantidad'];
                $total = $_POST['total'];
                $recibe = $_POST['recibe'];
                $cambio = $_POST['cambio'];
                include_once("conexion.php");
                $sql=$reporte->query("update reporte_ventas set nombre_c='$nombre', cedula_c=$cedula, telefono_c=$telefono, email_c='$email', nom_pro='$producto', precio_r=$precio,
                cantidad_r=$cantidad, total_r=$total, recibe=$recibe, cambio=$cambio where id_reporte=$id");
                if ($sql==1) {
                    ?>
                    <div class="alert alert-info mt-5 text-center" role="alert">
                        !!Modificado!! (Da click para Consultar);
                    </div>
                    <div class="text-center mt-4">
                        <a href="http://localhost/Taller_php/caja/consulta_reporte.php" class="btn btn-warning border border-secondary-subtle btn-lg mb-5 ">Volver Consultar Reporte</a>
                    </div>
                    <?php
                }else{
                    ?>
                    <div class="alert alert-danger mt-5 text-center" role="alert">
                        !!Error!! (los datos no fueron modificados);
                    </div>
                    <div class="text-center mt-3">
                        <a href="http://localhost/Taller_php/caja/consulta_reporte.php" class="btn btn-danger btn-lg mb-4 ">Atras</a> 
                    </div>
                    <?php
                }
            }
        }
        ?>
        
        
    </div>
</body>
</html>