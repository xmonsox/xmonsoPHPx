<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilos.css">
    <title>Caja</title>
</head>
<body>
            <?php
            if(empty($_REQUEST)){
            ?><div class="container-fluid">
            <form class="mx-auto" method="post" action="">
                <h4 class="text-center">Carrito</h4>
                <div class="input-group mb-3 mt-5">
                     <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        <select name="elige" class="form-select" id="inputGroupSelect01" required>
                            <option selected>Elige...</option>   
                            <?php
                            include_once("conexion.php");
                            $consulta_datos=$conexion->query("select * from productos");
                            
                            while($row=$consulta_datos->fetch_array()){
                                
                                ?>
                                <option value = <?=$row['nombre']?> ><?=$row['nombre'] ?></option>
                                
                            <?php  
                                $nombre = $row['nombre'];
                            }
                            
                            ?>
                            <?php
                            include_once("conexion.php");
                            $consulta_datos=$conexion->query("select * from productos where nombre='$nombre'");
                            while($row=$consulta_datos->fetch_array()){
                                ?>
                                <input type="hidden" name="cantidad_i" value="<?=$row ['cantidad_inv']?>">
                                <?php
                            }
                            
                            ?> 
                        </select>   
                    </div>
                    <div class="mb-3 mt-5">
                    <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                </div>
                
                <input type="submit" class="btn btn-success " name="venta" value="Venta"></input>
                <a href="http://localhost/Taller_php/Principal_admin/principal_admin.php" name="btnregistrar" class="btn btn-warning">Atras</a>
        
            </form>
                
            </div>          
            <?php
            }else if(isset($_REQUEST['venta'])){
                $cantidad_i = $_REQUEST['cantidad_i'];
                $cant = $_REQUEST['cantidad'];
                $producto = $_REQUEST['elige'];
                if($cant>$cantidad_i){
                    ?>
                    <div class="alert alert-success mt-5 text-center" role="alert">
                        !!Error!! (No hay disponible)
                    </div>
                    <div class="text-center">
                        <a href="http://localhost/Taller_php/caja/caja.php" class="btn btn-danger btn-lg mb-4 ">Atras</a> 
                    </div>
                    <?php
                }else{
                    ?>
                    <input type="text" value="<?=$producto?>" name="prod" >
                    <input type="text" value="<?=$cantidad_i?>" name="prod" >

                    <div class="container-fluid">
                    <form class="mx-auto" method="post" action="factura.php">
                        <h4 class="text-center">factura</h4>
                        
                        <div class="mb-3 mt-5">
                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 mt-5">
                            <label for="exampleInputEmail1" class="form-label">Cedula</label>
                            <input type="text" class="form-control" name="cedula" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 mt-5">
                            <label for="exampleInputEmail1" class="form-label">Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 mt-5">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 mt-5">
                            <label for="exampleInputEmail1" class="form-label">Producto</label>
                            <input type="text" class="form-control" name="producto" value="<?=$producto?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <?php
                        include_once("conexion.php");
                        $consulta_datos=$conexion->query("select * from productos where nombre='$producto'");
                        while($row=$consulta_datos->fetch_array()){
                            ?>
                            <div class="mb-3 mt-5">
                                <label for="exampleInputEmail1" class="form-label">Precio</label>
                                <input type="number" class="form-control" value="<?=$row ['precio']?>" name="precio" id="exampleInputEmail1" aria-describedby="emailHelp" required readonly>
                            </div>
                            <input name="cantidad_inv" type="hidden" value="<?=$row ['cantidad_inv']?>">

                            <?php
                            $precio = $row['precio'];
                            $cantidad_actualizada = $row['cantidad_inv'];
                            ?>
                            <?php
                        }

                        $total = $precio*$cant; 
                        if($cantidad_actualizada<0){
                            ?>
                            <div class="alert alert-success mt-5 text-center" role="alert">
                                !!Error!! (No hay disponible)
                            </div>
                            <div class="text-center">
                                <a href="http://localhost/Taller_php/Principal_admin/principal_admin.php" class="btn btn-danger btn-lg mb-4 ">Atras</a> 
                            </div>
                        
                        
                        <input type="submit" name="btninicio" class="btn btn-success " value="Iniciar Sesion"></input>
                        <a href="http://localhost/Taller_php/Principal_admin/principal_admin.php" name="btnregistrar" class="btn btn-warning">Atras</a>
                        <?php
                        }else{
                            $cant_actu = $cantidad_actualizada-$cant;
                            $consulta = "UPDATE productos SET cantidad_inv = '$cant_actu' WHERE nombre = '$producto'";
                            $resultado = mysqli_query($conexion, $consulta);
                            ?>
                            <div class="mb-3 mt-5">
                                <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" name="cantidad" value="<?=$cant?>" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                            </div>
                            <div class="mb-3 mt-5">
                                <label for="exampleInputEmail1" class="form-label">Total</label>
                                <input type="number" class="form-control" name="total" value="<?=$total?>" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                            </div>
                            <div class="mb-3 mt-5">
                                <label for="exampleInputEmail1" class="form-label">Recibe</label>
                                <input type="number" class="form-control" name="pagar" id="exampleInputEmail1" aria-describedby="emailHelp" >
                            </div>

                        
                            <input type="hidden" name="precio_total" value="<?=$precio?>">
                            <div class="row justify-content-evenly mt-5 text-center">
                                <h3>METODOS DE PAGO</h3>
                                <div class="col-4">
                                    <h1 class="mt-4"><i class="fa-brands fa-cc-visa fa-xl "></i></h1>
                                    <h1 class="mt-4"><i class="fa-brands fa-cc-mastercard fa-xl "></i></h1>
                                    <h1 class="mt-4"><i class="fa-sharp fa-regular fa-money-bill-1 fa-xl"></i></h1>
                                </div>
                                <div class="col-4">
                                    <h1 class="mt-4"><i class="fa-brands fa-cc-paypal fa-xl "></i></h1>
                                    <h1 class="mt-4"><i class="fa-brands fa-bitcoin fa-xl "></i></h1>
                                    <h1 class="mt-4"><i class="fa-brands fa-cc-amex fa-xl"></i></h1>
                                </div>
                            </div>   

                            <div class="text-center d-grid gap-2 col-6 mx-auto">
                                <input type="submit"  class="btn btn-success btn-lg mt-3" value="Pagar">
                            </div>
                            <div class="text-center mt-3 mb-3">
                                <a href="http://localhost/Taller_php/Principal_admin/principal_admin.php" class="btn btn-danger border border-secondary-subtle btn-lg ">Atras</a>
                            </div>
                            <?php
                            
                        }  
                            
                        ?>
                        
                        
                    </form>
                    <?php
                }
                ?>
            <?php
                           
            }else{
                }
            ?>   
                        
                    </div>
                    
                        
</body>
</html>