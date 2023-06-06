<?php
include_once("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Consultar Producto</title>
</head>
<body>
    <div class="container mb-5 position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <div class="mt-5">
        <h3 class="text-center">Consulta producto</h3>
        <table class="table table-bordered">
            <tr class="well">
                <td>
                    <div class="text-center">
                        <form name="form3" method="post" action="" class="form-search"> 
                            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
                            border-opacity-50" placeholder="Buscar Producto" type="text" name="buscar_producto" required>
                            <div class="text-center d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-success btn-lg mt-3" name="buscar">Buscar</button>
                            </div>    
                        </form>
                    </div>
                </td>
            </tr>
        </table>   

            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre Producto</th>
                        <th>Descripcion</th>
                        <th>Costo</th>
                        <th>Precio</th>
                        <th>cantidad</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <?php
                    if(!empty($_POST['buscar_producto'])){
                    $buscar=($_POST['buscar_producto']);
                    
                    $consulta=$conexion->query("SELECT * FROM productos WHERE nombre LIKE '%$buscar%' or id_producto='$buscar' ORDER BY nombre ASC");	
                        }else{
                        $consulta=$conexion->query("SELECT * FROM productos");		
                        }		
                        
                    while($row=$consulta->fetch_array()){
                        
                        // $cod=$row['cedula'];
                    ?>
                        <tr>
                            <td><?= $row['id_producto'] ?> </td>
                            <td><?= $row['nombre'] ?> </td>
                            <td><?= $row['descripcion'] ?></td>
                            <td><?= $row['costo'] ?></td>
                            <td><?= $row['precio'] ?></td>
                            <td><?= $row['cantidad_inv'] ?></td>
                            <td><a href="modificar.php?id=<?=$row['id_producto'] ?>" class="btn btn-outline-success btn-sm">Modificar</a></td>
                            <td><a href="Eliminar.php?id=<?=$row['id_producto'] ?>" class="btn btn-outline-danger btn-sm">Eliminar</a></td>
                        </tr>
                    <?php
                    }
                    ?>
            </table> 
            <a href="http://localhost/Taller_php/Principal_admin/principal_admin.php" class="btn btn-danger border border-secondary-subtle btn-lg ">Atras</a>
        </div>
    </div>
    
</body>
</html>