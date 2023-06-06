<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Inventario Productos</title>
</head>
<body>
    <div class="container">
        <div class="mt-5">
            <h3 class="text-center mb-5">Consulta Productos</h3>
            <?php
                include_once("conexion.php");
                $consulta_datos=$conexion->query("select * from productos");
                ?>
                <table class="table text-center table-light table-striped-columns table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre Producto</th>
                            <th>Descripcion</th>
                            <th>Costo</th>
                            <th>Precio</th>
                            <th>cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=$consulta_datos->fetch_array()){
                            ?>
                                <tr>
                                <td><?= $row['id_producto'] ?> </td>
                                <td><?= $row['nombre'] ?> </td>
                                <td><?= $row['descripcion'] ?></td>
                                <td><?= $row['costo'] ?></td>
                                <td><?= $row['precio'] ?></td>
                                <td><?= $row['cantidad_inv'] ?></td>
                                </tr>
                                
                            
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </table>                    
        </div>
    </div>
</body>
</html>