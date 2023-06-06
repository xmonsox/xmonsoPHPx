<?php
include_once("reporte.php");
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
    <title>Reporte Ventas</title>
</head>
<body>
    <div class=" mb-5 ">
        <div class="mt-5">
        <h3 class="text-center">Consulta Reporte Ventas</h3>
        <table class="table table-bordered">
            <tr class="well">
                <td>
                    <div class="text-center">
                        <form name="form3" method="post" action="" class="form-search"> 
                            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
                            border-opacity-50" placeholder="Buscar Producto" type="text" name="Producto" required>
                            <div class="text-center d-grid gap-2 col-6 mx-auto">
                                <input type="submit"  class="btn btn-success btn-lg mt-3"  value="Buscar"> 
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
                        <th>Nombre</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Nombre Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th>Recibe</th>
                        <th>Cambio</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <?php
                    if(!empty($_POST['Producto'])){
                    $buscar=($_POST['Producto']);
                    
                    $consulta=$reporte->query("SELECT * FROM reporte_ventas WHERE nom_pro LIKE '%$buscar%' or id_reporte LIKE '%$buscar%' ORDER BY nom_pro ASC");	
                        }else{
                        $consulta=$reporte->query("SELECT * FROM reporte_ventas");		
                        }		
                        
                    while($row=$consulta->fetch_array()){
                        
                        // $cod=$row['cedula'];
                    ?>
                        <tr>
                            <td><?= $row['id_reporte'] ?> </td>
                            <td><?= $row['nombre_c'] ?> </td>
                            <td><?= $row['cedula_c'] ?> </td>
                            <td><?= $row['telefono_c'] ?> </td>
                            <td><?= $row['email_c'] ?> </td>
                            <td><?= $row['nom_pro'] ?> </td>
                            <td><?= $row['precio_r'] ?></td>
                            <td><?= $row['cantidad_r'] ?></td>
                            <td><?= $row['total_r'] ?></td>
                            <td><?= $row['recibe'] ?></td>
                            <td><?= $row['cambio'] ?></td>
                            
                            <td><a href="modificar_reporte.php?id=<?=$row['id_reporte'] ?>" class="btn btn-outline-success btn-sm">Modificar</a></td>
                            <td><a href="eliminar_reporte.php?id=<?=$row['id_reporte'] ?>" class="btn btn-outline-danger btn-sm">Eliminar</a></td>
                        </tr>
                    <?php
                    }
                    ?>
            </table>
            <div class="text-center mt-3 mb-3">
                <a href="http://localhost/Taller_php/Principal_admin/principal_admin.php" class="btn btn-danger btn-lg mb-4 ">Atras</a> 
            </div>  
        </div>
    </div>
</body>
</html>