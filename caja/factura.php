<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilos.css">
    <title>Factura</title>
</head>
<body>
    <?php
        $nombre = $_REQUEST['nombre'];
        $cedula = $_REQUEST['cedula'];
        $telefono = $_REQUEST['telefono'];
        $email = $_REQUEST['email'];
        $producto = $_REQUEST['producto'];
        $precio = $_REQUEST['precio'];
        $cantidad_inv = $_REQUEST['cantidad_inv'];
        $cantidad = $_REQUEST['cantidad'];
        $pagar = $_REQUEST['pagar'];
        $total = $precio*$cantidad;
        $devuelta = $pagar-$total;
        include_once("conexion_caja.php");
        $conex->query("insert into caja_p(n_producto, v_producto, cant_venta) values ('$_REQUEST[producto]', $_REQUEST[precio], $_REQUEST[cantidad])");  
        include_once("reporte.php");

        if($cantidad>$cantidad_inv or $pagar<$total or $cantidad_inv<=0){
            ?>
            <div class="alert alert-success mt-5 text-center" role="alert">
                !!Error!! (La cantidad no esta disponible o verifica el valor con que vas a pagar que sea mayor a el total)
            </div>
            <div class="text-center">
            <a href="http://localhost/Taller_php/caja/caja.php" class="btn btn-danger btn-lg mb-4 ">Atras</a> 
            </div>
        <?php
        }else{
            $reporte->query("insert into reporte_ventas(nombre_c, cedula_c, telefono_c, email_c, nom_pro, precio_r, cantidad_r, total_r, recibe, cambio) values ('$nombre', '$cedula','$telefono','$email', '$_REQUEST[producto]', $_REQUEST[precio], $_REQUEST[cantidad],'$total','$pagar', '$devuelta')"); 
            ?>
            
            <div class="container-fluid">
            
                <h4 class="text-center">Entrega</h4>
                
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" value="<?=$nombre?>" name="cliente"  id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Cedula</label>
                    <input type="text" class="form-control" value="<?=$cedula?>" name="cedula"   id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Telefono</label>
                    <input type="text" class="form-control" value="<?=$telefono?>" name="telefono"  id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" value="<?=$email?>" name="email"  id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Producto</label>
                    <input type="text" class="form-control" type="text" value="<?=$producto?>" name="producto"  id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Precio</label>
                    <input type="text" class="form-control" type="text" value="<?=$precio?>" name="precio"  id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" type="text" value="<?=$cantidad?>" name="cantidad" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Total</label>
                    <input type="text" class="form-control" type="text" value="<?=$total?>" name="total" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Recibe</label>
                    <input type="text" class="form-control" type="text" value="<?=$pagar?>" name="pagar" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Cambio</label>
                    <input type="text" class="form-control" type="text" value="<?=$devuelta?>" name="devuelta" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <input type="submit" name="imprimir" class="btn btn-success " value="Imprimir"></input>
                <a href="http://localhost/Taller_php/Principal_admin/principal_admin.php" name="btnregistrar" class="btn btn-warning">Atras</a>

            
                
            </div>     
                
            <?php
        }

          
  
    ?>

</body>
</html>