<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Registrar Productos</title>
</head>
<body>
<?php
    if(empty($_REQUEST)){
        ?>
        <div class="container-fluid">
            <form class="mx-auto mb-5" method="post" action="">
                <h4 class="text-center">Registro Producto</h4>
                
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Nit Producto</label>
                    <input type="text" class="form-control" name="nit_producto" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control"  name="nombre" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                    <input type="text" class="form-control"  name="descrip" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Costo</label>
                    <input type="text" class="form-control"  name="costo" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Precio</label>
                    <input type="text" class="form-control"  name="precio" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                    <input type="text" class="form-control"  name="cantidad" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                
                <input type="submit" class="btn btn-success " value="Registrar Producto"></input>
                <a href="http://localhost/Taller_php/Principal_admin/principal_admin.php" name="btnregistrar" class="btn btn-warning">Atras</a>

            </form>    
        </div>
            
                                    
    <?php
    }elseif (isset($_REQUEST['cantidad'])) {
        include_once("conexion.php");
        $conexion->query("insert into productos(id_producto, nombre, descripcion, costo, precio, cantidad_inv)  values ('$_REQUEST[nit_producto]', '$_REQUEST[nombre]', '$_REQUEST[descrip]', '$_REQUEST[costo]', 
        '$_REQUEST[precio]', '$_REQUEST[cantidad]')");
        ?>
        <a href="http://localhost/Taller_php/Producto/producto.php" class="btn btn-danger border border-secondary-subtle btn-lg ">Atras</a>
        <a href="http://localhost/Taller_php/Producto/consulta.php" class="btn btn-success border border-secondary-subtle btn-lg ">Consultar Producto</a>
    <?php
    }       
    ?>
        




</body>
</html>